<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Project:       TravianZ                                                    ##
##  Filename:      OpponentDecision.php                                        ##
##  Purpose:       Pure allow / deny / skip decisions for AI opponents.        ##
##                 No session, no database, no page redirects.                 ##
##                                                                             ##
##  License:       TravianZ Project                                            ##
##  Copyright:     TravianZ (c) 2010-2026. All rights reserved.                ##
##  URLs:          https://travianz.org                                        ##
##                 https://github.com/Shadowss/TravianZ                        ##
#################################################################################

class AiOpponentDecision
{
    public const ALLOW = 'allow';
    public const DENY = 'deny';
    public const SKIP = 'skip';

    public const REASON_RESOURCES = 'resources';
    public const REASON_PREREQ = 'prereq';
    public const REASON_PROTECTION = 'protection';
    public const REASON_TROOPS = 'troops';

    /**
     * Judge one proposed action against an already-flushed village snapshot.
     *
     * @param array $snapshot
     * @return array{status:string,action:string,reason:string,target:int}
     */
    public static function judge(array $snapshot)
    {
        $action = (string) ($snapshot['action'] ?? '');
        $target = (int) ($snapshot['target'] ?? 0);

        if (array_key_exists('feature_enabled', $snapshot) && !$snapshot['feature_enabled']) {
            return self::result(self::SKIP, $action, '', $target);
        }

        if ($action === 'hero' && empty($snapshot['hero_enabled'])) {
            return self::result(self::SKIP, $action, '', $target);
        }

        if ($action === 'wonder') {
            $level = (int) ($snapshot['ww_level'] ?? 0);
            $hasPlan = !empty($snapshot['has_plan']);
            $allyPlan = !empty($snapshot['alliance_has_plan']);
            if (!$hasPlan || ($level >= 50 && !$allyPlan)) {
                return self::result(self::DENY, $action, self::REASON_PREREQ, $target);
            }
        }

        if ($action === 'settle') {
            $settlers = (int) ($snapshot['settlers'] ?? 0);
            $cp = (int) ($snapshot['cp'] ?? 0);
            $needed = (int) ($snapshot['cp_needed'] ?? 0);
            if ($settlers < 3 || $cp < $needed) {
                return self::result(self::DENY, $action, self::REASON_PREREQ, $target);
            }
        }

        if (in_array($action, array('attack', 'raid'), true)) {
            $protect = (int) ($snapshot['target_protect'] ?? 0);
            $now = (int) ($snapshot['now'] ?? 0);
            if ($protect > $now) {
                return self::result(self::DENY, $action, self::REASON_PROTECTION, $target);
            }
        }

        if (in_array($action, array('attack', 'raid', 'reinforce', 'settle'), true)) {
            $have = (int) ($snapshot['troops'] ?? 0);
            $need = (int) ($snapshot['troops_needed'] ?? 0);
            if ($need > 0 && $have < $need) {
                return self::result(self::DENY, $action, self::REASON_TROOPS, $target);
            }
        }

        if (array_key_exists('prerequisites_met', $snapshot) && !$snapshot['prerequisites_met']) {
            return self::result(self::DENY, $action, self::REASON_PREREQ, $target);
        }

        if ($action === 'market' && empty($snapshot['push_exempt'])) {
            $send = (int) ($snapshot['send_amount'] ?? 0);
            $allowance = (int) ($snapshot['push_allowance'] ?? 0);
            if ($send > $allowance) {
                return self::result(self::DENY, $action, self::REASON_PREREQ, $target);
            }
        }

        if ($action === 'gold') {
            $gold = (int) ($snapshot['gold'] ?? 0);
            $cost = (int) ($snapshot['gold_cost'] ?? 0);
            if ($cost > 0 && $gold < $cost) {
                return self::result(self::DENY, $action, self::REASON_RESOURCES, $target);
            }
        }

        if (self::shortResources($snapshot)) {
            return self::result(self::DENY, $action, self::REASON_RESOURCES, $target);
        }

        return self::result(self::ALLOW, $action, '', $target);
    }

    /**
     * Identical refusals stay as one row until the village, action, reason, or target changes.
     * Successful actions always append. A success followed by a refusal appends again.
     *
     * @param array|null $latest
     * @param array $event keys: wid, action, reason, target, result
     */
    public static function shouldAppendLog($latest, array $event)
    {
        $result = (string) ($event['result'] ?? '');
        if ($result !== self::DENY) {
            return true;
        }
        if (!is_array($latest) || $latest === array()) {
            return true;
        }
        if ((string) ($latest['result'] ?? '') !== self::DENY) {
            return true;
        }

        return (int) ($latest['wid'] ?? 0) !== (int) ($event['wid'] ?? 0)
            || (string) ($latest['action'] ?? '') !== (string) ($event['action'] ?? '')
            || (string) ($latest['reason'] ?? '') !== (string) ($event['reason'] ?? '')
            || (int) ($latest['target'] ?? 0) !== (int) ($event['target'] ?? 0);
    }

    /**
     * Queue finish times for one village's existing rows of the same unit.
     * The caller passes the rows; this does not read a global village.
     *
     * @param array $queued rows with a timestamp column
     * @return array{time:int,time2:int}
     */
    public static function trainingTimestamps($now, $each, $amt, array $queued)
    {
        $now = (int) $now;
        $each = (int) $each;
        $amt = max(1, (int) $amt);
        $time = $now + ($each * $amt);
        $time2 = $now + $each;
        if ($queued !== array()) {
            $last = $queued[count($queued) - 1];
            $end = (int) ($last['timestamp'] ?? $now);
            $extra = $end - $now;
            if ($extra > 0) {
                $time += $extra;
                $time2 += $extra;
            }
        }

        return array('time' => $time, 'time2' => $time2);
    }

    private static function shortResources(array $snapshot)
    {
        $have = isset($snapshot['resources']) && is_array($snapshot['resources'])
            ? $snapshot['resources']
            : array();
        $cost = isset($snapshot['cost']) && is_array($snapshot['cost'])
            ? $snapshot['cost']
            : array();
        foreach (array('wood', 'clay', 'iron', 'crop') as $key) {
            if ((int) ($cost[$key] ?? 0) > (int) ($have[$key] ?? 0)) {
                return true;
            }
        }

        return false;
    }

    private static function result($status, $action, $reason, $target)
    {
        return array(
            'status' => $status,
            'action' => $action,
            'reason' => $reason,
            'target' => $target,
        );
    }
}
