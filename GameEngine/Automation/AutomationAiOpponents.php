<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Project:       TravianZ                                                    ##
##  Filename:      AutomationAiOpponents.php                                   ##
##  Purpose:       Cron-driven computer opponents that pay real costs.         ##
##                                                                             ##
##  License:       TravianZ Project                                            ##
##  Copyright:     TravianZ (c) 2010-2026. All rights reserved.                ##
##  URLs:          https://travianz.org                                        ##
##                 https://github.com/Shadowss/TravianZ                        ##
#################################################################################

require_once __DIR__ . '/../Ai/OpponentDecision.php';

trait AutomationAiOpponents
{
    /**
     * Keep AI accounts from the inactive-deletion pass. Called before ClearUser().
     */
    private function touchAiActivity()
    {
        if (!$this->aiOpponentsEnabled()) {
            return;
        }
        global $database;
        $this->refreshCronMarker();
        $database->ensureAiLogTable();
        $database->touchAiOpponentActivity();
        $this->ensureAiAccounts();
        $this->syncAiDiplomacy();
    }

    /**
     * Act for AI villages until this tick's time budget is spent.
     */
    private function aiOpponents()
    {
        if (!$this->aiOpponentsEnabled()) {
            return;
        }
        global $database;
        $database->ensureAiLogTable();
        $this->purgeOldAiSuccessLogs();

        $limit = defined('CRON_TICK_SECONDS') ? (int) CRON_TICK_SECONDS : 60;
        if ($limit < 15) {
            $limit = 15;
        }
        $started = isset($this->tickStarted) ? (int) $this->tickStarted : time();
        $cursorPath = dirname(__DIR__) . '/Prevention/ai_opponent_cursor.txt';
        $cursor = is_file($cursorPath) ? (int) trim((string) file_get_contents($cursorPath)) : 0;

        $villages = array();
        foreach ($database->listAiOpponentUsers() as $user) {
            foreach ($database->listVillagesByOwner((int) $user['id']) as $village) {
                $village['tribe'] = (int) $user['tribe'];
                $village['uid'] = (int) $user['id'];
                $village['gold'] = (int) $user['gold'];
                $village['user_cp'] = (int) $user['cp'];
                $village['protect'] = (int) $user['protect'];
                $village['alliance'] = (int) $user['alliance'];
                $villages[] = $village;
            }
        }
        if ($villages === array()) {
            return;
        }

        $startIndex = 0;
        foreach ($villages as $index => $village) {
            if ((int) $village['wref'] === $cursor) {
                $startIndex = $index;
                break;
            }
        }

        $count = count($villages);
        for ($step = 0; $step < $count; $step++) {
            if ((time() - $started) >= $limit) {
                $next = $villages[($startIndex + $step) % $count];
                file_put_contents($cursorPath, (string) (int) $next['wref']);
                return;
            }
            $this->refreshCronMarker();
            $village = $villages[($startIndex + $step) % $count];
            $this->actForAiVillage($village, $started, $limit, $cursorPath, $villages, ($startIndex + $step + 1) % $count);
        }
        file_put_contents($cursorPath, '0');
    }

    private function aiOpponentsEnabled()
    {
        return defined('AI_OPPONENTS') && (int) AI_OPPONENTS > 0;
    }

    private function refreshCronMarker()
    {
        $path = dirname(__DIR__) . '/Prevention/cron_active.txt';
        file_put_contents($path, (string) time());
    }

    private function ensureAiAccounts()
    {
        global $database;
        foreach ($this->enabledAiTribes() as $tribe) {
            $wanted = $this->aiCountForTribe($tribe);
            $have = $database->countAiOpponentsByTribe($tribe);
            for ($n = $have + 1; $n <= $wanted; $n++) {
                $this->refreshCronMarker();
                $name = 'AI' . $tribe . 'x' . $n;
                $email = 'ai' . $tribe . 'x' . $n . '@example.com';
                try {
                    $uid = $database->register(
                        $name,
                        password_hash(bin2hex(random_bytes(8)), PASSWORD_BCRYPT),
                        $email,
                        $tribe,
                        0,
                        0,
                        'ai-opponent'
                    );
                    if ($uid) {
                        $database->generateVillages(
                            array(array(
                                'wid' => 0,
                                'mode' => 0,
                                'type' => 3,
                                'kid' => rand(1, 4),
                                'capital' => 1,
                                'pop' => 2,
                                'name' => null,
                                'natar' => 0,
                            )),
                            (int) $uid,
                            $name
                        );
                    }
                } catch (Throwable $e) {
                    continue;
                }
            }
        }
    }

    private function enabledAiTribes()
    {
        $tribes = array(1, 2, 3);
        if (defined('NEW_FUNCTION_TRIBE_HUNS') && NEW_FUNCTION_TRIBE_HUNS) {
            $tribes[] = 6;
        }
        if (defined('NEW_FUNCTION_TRIBE_EGIPTEANS') && NEW_FUNCTION_TRIBE_EGIPTEANS) {
            $tribes[] = 7;
        }
        if (defined('NEW_FUNCTION_TRIBE_SPARTANS') && NEW_FUNCTION_TRIBE_SPARTANS) {
            $tribes[] = 8;
        }
        if (defined('NEW_FUNCTION_TRIBE_VIKINGS') && NEW_FUNCTION_TRIBE_VIKINGS) {
            $tribes[] = 9;
        }

        return $tribes;
    }

    private function aiCountForTribe($tribe)
    {
        $name = 'AI_COUNT_' . (int) $tribe;
        if (!defined($name)) {
            return 1;
        }

        return max(0, (int) constant($name));
    }

    private function syncAiDiplomacy()
    {
        if (!defined('AI_DIPLOMACY') || (int) AI_DIPLOMACY !== 1) {
            return;
        }
        global $database;
        $users = $database->listAiOpponentUsers();
        if ($users === array()) {
            return;
        }
        $aid = 0;
        $max = 60;
        $found = $database->findAllianceByTag('AIZ');
        if (is_array($found)) {
            $aid = (int) $found['id'];
            $max = (int) $found['max'];
        } else {
            $aid = (int) $database->createAlliance('AIZ', 'Computer', (int) $users[0]['id'], 60);
        }
        if ($aid <= 0) {
            return;
        }
        $members = 0;
        foreach ($users as $user) {
            if ((int) $user['alliance'] === $aid) {
                $members++;
            }
        }
        foreach ($users as $user) {
            if ((int) $user['alliance'] === $aid) {
                continue;
            }
            if ($members >= $max) {
                $this->recordAiDecision((int) $user['id'], 0, array(
                    'status' => AiOpponentDecision::DENY,
                    'action' => 'alliance',
                    'reason' => AiOpponentDecision::REASON_PREREQ,
                    'target' => $aid,
                ));
                continue;
            }
            $database->updateUserField((int) $user['id'], 'alliance', $aid, 1);
            $members++;
            $this->recordAiDecision((int) $user['id'], 0, array(
                'status' => AiOpponentDecision::ALLOW,
                'action' => 'alliance',
                'reason' => '',
                'target' => $aid,
            ));
        }
    }

    private function actForAiVillage(array $village, $started, $limit, $cursorPath, array $villages, $nextIndex)
    {
        global $database;
        $wid = (int) $village['wref'];
        $this->updateRes($wid);
        $fresh = $database->getVillage($wid, 0, false);
        if (!is_array($fresh)) {
            return;
        }
        $village = array_merge($village, $fresh);
        $actions = 0;
        while ($actions < 8) {
            if ((time() - (int) $started) >= (int) $limit) {
                $next = $villages[$nextIndex];
                file_put_contents($cursorPath, (string) (int) $next['wref']);
                return;
            }
            if (!$this->tryAiAction($village)) {
                return;
            }
            $actions++;
            $fresh = $database->getVillage($wid, 0, false);
            if (is_array($fresh)) {
                $village = array_merge($village, $fresh);
            }
            $this->refreshCronMarker();
        }
    }

    private function tryAiAction(array $village)
    {
        $proposal = $this->proposeAiAction($village);
        if ($proposal === null) {
            return false;
        }
        $decision = AiOpponentDecision::judge($proposal['snapshot']);
        $this->recordAiDecision((int) $village['uid'], (int) $village['wref'], $decision);
        if ($decision['status'] !== AiOpponentDecision::ALLOW) {
            return $this->tryNextAiAction($village, $proposal['kind']);
        }

        return $this->commitAiAction($village, $proposal);
    }

    private function tryNextAiAction(array $village, $failedKind)
    {
        $order = array('build', 'train', 'raid', 'reinforce', 'settle', 'market', 'hero', 'wonder');
        $start = array_search($failedKind, $order, true);
        if ($start === false) {
            return false;
        }
        for ($i = $start + 1; $i < count($order); $i++) {
            $proposal = $this->proposeAiAction($village, $order[$i]);
            if ($proposal === null) {
                continue;
            }
            $decision = AiOpponentDecision::judge($proposal['snapshot']);
            $this->recordAiDecision((int) $village['uid'], (int) $village['wref'], $decision);
            if ($decision['status'] === AiOpponentDecision::ALLOW) {
                return $this->commitAiAction($village, $proposal);
            }
        }

        return false;
    }

    private function proposeAiAction(array $village, $only = null)
    {
        $kinds = $only === null
            ? array('build', 'train', 'raid', 'reinforce', 'settle', 'market', 'hero', 'wonder')
            : array($only);
        foreach ($kinds as $kind) {
            $proposal = $this->proposalFor($village, $kind);
            if ($proposal !== null) {
                return $proposal;
            }
        }

        return null;
    }

    private function proposalFor(array $village, $kind)
    {
        if ($kind === 'build') {
            return $this->proposeBuild($village);
        }
        if ($kind === 'train') {
            return $this->proposeTrain($village);
        }
        if ($kind === 'raid') {
            return $this->proposeRaid($village);
        }
        if ($kind === 'reinforce') {
            return $this->proposeReinforce($village);
        }
        if ($kind === 'settle') {
            return $this->proposeSettle($village);
        }
        if ($kind === 'market') {
            return $this->proposeMarket($village);
        }
        if ($kind === 'hero') {
            return $this->proposeHero($village);
        }
        if ($kind === 'wonder') {
            return $this->proposeWonder($village);
        }

        return null;
    }

    private function proposeBuild(array $village)
    {
        global $database;
        $wid = (int) $village['wref'];
        $fields = $database->getFdataRow($wid);
        if (!is_array($fields)) {
            return null;
        }
        $queued = $database->buildQueueFields($wid);
        $fallback = null;
        for ($slot = 1; $slot <= 18; $slot++) {
            if (in_array($slot, $queued, true)) {
                continue;
            }
            $type = (int) ($fields['f' . $slot . 't'] ?? 0);
            $level = (int) ($fields['f' . $slot] ?? 0);
            if ($type < 1 || $type > 4 || $level >= 10) {
                continue;
            }
            $cost = $this->aiBuildingCost($type, $level + 1);
            if ($cost === null) {
                continue;
            }
            $proposal = array(
                'kind' => 'build',
                'field' => $slot,
                'type' => $type,
                'level' => $level + 1,
                'cost' => $cost,
                'snapshot' => $this->baseSnapshot($village, 'build', $cost, $slot),
            );
            $have = $proposal['snapshot']['resources'];
            $affordable = $have['wood'] >= $cost['wood']
                && $have['clay'] >= $cost['clay']
                && $have['iron'] >= $cost['iron']
                && $have['crop'] >= $cost['crop'];
            if ($affordable) {
                return $proposal;
            }
            if ($fallback === null) {
                $fallback = $proposal;
            }
        }
        $inner = $this->proposeMissingInner($village, $fields, $queued);
        if ($inner !== null && $this->proposalAffordable($inner)) {
            return $inner;
        }

        return $fallback ?? $inner;
    }

    private function proposeMissingInner(array $village, array $fields, array $queued)
    {
        $present = array();
        for ($slot = 19; $slot <= 40; $slot++) {
            $present[(int) ($fields['f' . $slot . 't'] ?? 0)] = true;
        }
        foreach (array(19, 10, 11, 17, 22, 25, 13) as $gid) {
            if (!empty($present[$gid])) {
                continue;
            }
            for ($slot = 19; $slot <= 38; $slot++) {
                if (in_array($slot, $queued, true) || (int) ($fields['f' . $slot . 't'] ?? 0) !== 0) {
                    continue;
                }
                $cost = $this->aiBuildingCost($gid, 1);
                if ($cost === null) {
                    return null;
                }

                return array(
                    'kind' => 'build',
                    'field' => $slot,
                    'type' => $gid,
                    'level' => 1,
                    'cost' => $cost,
                    'snapshot' => $this->baseSnapshot($village, 'build', $cost, $slot),
                );
            }
        }

        return null;
    }

    private function proposalAffordable(array $proposal)
    {
        $have = $proposal['snapshot']['resources'];
        $cost = $proposal['cost'];

        return $have['wood'] >= $cost['wood']
            && $have['clay'] >= $cost['clay']
            && $have['iron'] >= $cost['iron']
            && $have['crop'] >= $cost['crop'];
    }

    private function proposeTrain(array $village)
    {
        global $database;
        $wid = (int) $village['wref'];
        $fields = $database->getFdataRow($wid);
        $barracks = 0;
        if (is_array($fields)) {
            for ($slot = 19; $slot <= 40; $slot++) {
                if ((int) ($fields['f' . $slot . 't'] ?? 0) === 19) {
                    $barracks = (int) ($fields['f' . $slot] ?? 0);
                }
            }
        }
        $unitId = ((int) $village['tribe'] - 1) * 10 + 1;
        $unit = $GLOBALS['u' . $unitId] ?? null;
        if (!is_array($unit)) {
            return null;
        }
        $cost = array(
            'wood' => (int) $unit['wood'],
            'clay' => (int) $unit['clay'],
            'iron' => (int) $unit['iron'],
            'crop' => (int) $unit['crop'],
        );
        $snapshot = $this->baseSnapshot($village, 'train', $cost, $unitId);
        $snapshot['prerequisites_met'] = $barracks >= 1;

        return array(
            'kind' => 'train',
            'unit' => $unitId,
            'each' => (int) $unit['time'],
            'pop' => (int) ($unit['pop'] ?? 1),
            'cost' => $cost,
            'snapshot' => $snapshot,
        );
    }

    private function proposeRaid(array $village)
    {
        global $database;
        $unitId = ((int) $village['tribe'] - 1) * 10 + 1;
        $units = $database->getUnit((int) $village['wref'], false);
        $have = is_array($units) ? (int) ($units['u' . $unitId] ?? 0) : 0;
        $target = $database->findUnoccupiedOasis();
        $protect = 0;
        if ($target <= 0) {
            return null;
        }
        $snapshot = $this->baseSnapshot($village, 'raid', array('wood' => 0, 'clay' => 0, 'iron' => 0, 'crop' => 0), $target);
        $snapshot['troops'] = $have;
        $snapshot['troops_needed'] = 1;
        $snapshot['target_protect'] = $protect;
        $snapshot['now'] = time();

        return array('kind' => 'raid', 'unit' => $unitId, 'snapshot' => $snapshot);
    }

    private function proposeReinforce(array $village)
    {
        global $database;
        $own = $database->listVillagesByOwner((int) $village['uid']);
        $target = 0;
        foreach ($own as $other) {
            if ((int) $other['wref'] !== (int) $village['wref']) {
                $target = (int) $other['wref'];
                break;
            }
        }
        if ($target <= 0) {
            return null;
        }
        $unitId = ((int) $village['tribe'] - 1) * 10 + 1;
        $units = $database->getUnit((int) $village['wref'], false);
        $have = is_array($units) ? (int) ($units['u' . $unitId] ?? 0) : 0;
        $snapshot = $this->baseSnapshot($village, 'reinforce', array('wood' => 0, 'clay' => 0, 'iron' => 0, 'crop' => 0), $target);
        $snapshot['troops'] = $have;
        $snapshot['troops_needed'] = 1;
        $snapshot['target_self'] = true;

        return array('kind' => 'reinforce', 'unit' => $unitId, 'snapshot' => $snapshot);
    }

    private function proposeSettle(array $village)
    {
        global $database;
        $unitId = ((int) $village['tribe'] - 1) * 10 + 10;
        $units = $database->getUnit((int) $village['wref'], false);
        $settlers = is_array($units) ? (int) ($units['u' . $unitId] ?? 0) : 0;
        $cost = array('wood' => 750, 'clay' => 750, 'iron' => 750, 'crop' => 750);
        $snapshot = $this->baseSnapshot($village, 'settle', $cost, 0);
        $snapshot['settlers'] = $settlers;
        $snapshot['troops'] = $settlers;
        $snapshot['troops_needed'] = 3;
        $snapshot['cp'] = (int) ($village['user_cp'] ?? 0);
        $snapshot['cp_needed'] = (int) ($village['user_cp'] ?? 0) > 0 ? 0 : 1;

        return array('kind' => 'settle', 'unit' => $unitId, 'cost' => $cost, 'snapshot' => $snapshot);
    }

    private function proposeMarket(array $village)
    {
        global $database;
        $own = $database->listVillagesByOwner((int) $village['uid']);
        $target = 0;
        foreach ($own as $other) {
            if ((int) $other['wref'] !== (int) $village['wref']) {
                $target = (int) $other['wref'];
                break;
            }
        }
        if ($target <= 0) {
            return null;
        }
        $fields = $database->getFdataRow((int) $village['wref']);
        $market = 0;
        if (is_array($fields)) {
            for ($slot = 19; $slot <= 40; $slot++) {
                if ((int) ($fields['f' . $slot . 't'] ?? 0) === 17) {
                    $market = (int) ($fields['f' . $slot] ?? 0);
                }
            }
        }
        $cost = array('wood' => 50, 'clay' => 0, 'iron' => 0, 'crop' => 0);
        $snapshot = $this->baseSnapshot($village, 'market', $cost, $target);
        $snapshot['prerequisites_met'] = $market >= 1;
        $snapshot['push_exempt'] = true;
        $snapshot['send_amount'] = 50;

        return array('kind' => 'market', 'cost' => $cost, 'snapshot' => $snapshot);
    }

    private function proposeHero(array $village)
    {
        global $database;
        $enabled = defined('NEW_FUNCTIONS_HERO_T4') && NEW_FUNCTIONS_HERO_T4;
        $offer = 0;
        if ($enabled) {
            $offer = (int) $database->nextOpenAdventure((int) $village['uid']);
        }
        $snapshot = $this->baseSnapshot($village, 'hero', array('wood' => 0, 'clay' => 0, 'iron' => 0, 'crop' => 0), $offer);
        $snapshot['hero_enabled'] = $enabled;
        $snapshot['prerequisites_met'] = $offer > 0;

        return array('kind' => 'hero', 'adventure' => $offer, 'snapshot' => $snapshot);
    }

    private function proposeWonder(array $village)
    {
        global $database;
        $wid = (int) $village['wref'];
        $fields = $database->getFdataRow($wid);
        $level = is_array($fields) ? (int) ($fields['f99'] ?? 0) : 0;
        $type = is_array($fields) ? (int) ($fields['f99t'] ?? 0) : 0;
        if ($type !== 40) {
            return null;
        }
        $hasPlan = method_exists($database, 'getWWConstructionPlans')
            ? (bool) $database->getWWConstructionPlans((int) $village['uid'])
            : false;
        $allyPlan = false;
        if ((int) $village['alliance'] > 0 && method_exists($database, 'getWWConstructionPlans')) {
            $allyPlan = (bool) $database->getWWConstructionPlans((int) $village['uid'], (int) $village['alliance']);
        }
        $cost = $this->aiBuildingCost(40, $level + 1);
        if ($cost === null) {
            $cost = array('wood' => 1, 'clay' => 1, 'iron' => 1, 'crop' => 1);
        }
        $snapshot = $this->baseSnapshot($village, 'wonder', $cost, 99);
        $snapshot['has_plan'] = $hasPlan;
        $snapshot['alliance_has_plan'] = $allyPlan;
        $snapshot['ww_level'] = $level;

        return array('kind' => 'wonder', 'level' => $level + 1, 'cost' => $cost, 'snapshot' => $snapshot);
    }

    private function baseSnapshot(array $village, $action, array $cost, $target)
    {
        return array(
            'action' => $action,
            'target' => (int) $target,
            'resources' => array(
                'wood' => (int) ($village['wood'] ?? 0),
                'clay' => (int) ($village['clay'] ?? 0),
                'iron' => (int) ($village['iron'] ?? 0),
                'crop' => (int) ($village['crop'] ?? 0),
            ),
            'cost' => $cost,
            'prerequisites_met' => true,
            'now' => time(),
        );
    }

    private function aiBuildingCost($type, $level)
    {
        $table = $GLOBALS['bid' . (int) $type] ?? null;
        if (!is_array($table) || !isset($table[$level])) {
            return null;
        }
        $row = $table[$level];

        return array(
            'wood' => (int) ($row['wood'] ?? 0),
            'clay' => (int) ($row['clay'] ?? 0),
            'iron' => (int) ($row['iron'] ?? 0),
            'crop' => (int) ($row['crop'] ?? 0),
            'time' => (int) ($row['time'] ?? 0),
        );
    }

    private function commitAiAction(array $village, array $proposal)
    {
        global $database;
        $wid = (int) $village['wref'];
        $uid = (int) $village['uid'];
        $cost = $proposal['cost'] ?? array('wood' => 0, 'clay' => 0, 'iron' => 0, 'crop' => 0);
        $kind = $proposal['kind'];

        if (in_array($kind, array('build', 'train', 'settle', 'market', 'wonder'), true)) {
            if (!$database->spendVillageResources($wid, $cost['wood'], $cost['clay'], $cost['iron'], $cost['crop'])) {
                $this->recordAiDecision($uid, $wid, array(
                    'status' => AiOpponentDecision::DENY,
                    'action' => $kind,
                    'reason' => AiOpponentDecision::REASON_RESOURCES,
                    'target' => (int) ($proposal['snapshot']['target'] ?? 0),
                ));
                return false;
            }
        }

        if ($kind === 'build' || $kind === 'wonder') {
            $speed = defined('SPEED') && (int) SPEED > 0 ? (int) SPEED : 1;
            $time = time() + (int) (($cost['time'] ?? 60) / $speed);
            $field = $kind === 'wonder' ? 99 : (int) $proposal['field'];
            $type = $kind === 'wonder' ? 40 : (int) $proposal['type'];
            $database->addBuilding($wid, $field, $type, 0, $time, 0, (int) $proposal['level']);
            return true;
        }

        if ($kind === 'train') {
            $queued = array();
            foreach ($database->getTraining($wid) as $row) {
                if ((int) $row['unit'] === (int) $proposal['unit']) {
                    $queued[] = $row;
                }
            }
            $times = AiOpponentDecision::trainingTimestamps(time(), (int) $proposal['each'], 1, $queued);
            $database->trainUnitAtVillage(
                $wid,
                (int) $proposal['unit'],
                1,
                (int) $proposal['pop'],
                (int) $proposal['each'],
                $times['time'],
                $times['time2']
            );
            return true;
        }

        if ($kind === 'raid' || $kind === 'reinforce' || $kind === 'settle') {
            $column = 'u' . (int) $proposal['unit'];
            $amount = $kind === 'settle' ? 3 : 1;
            if (!$database->spendVillageUnits($wid, array($column => $amount))) {
                return false;
            }
            $troops = array_fill(0, 11, 0);
            $index = ((int) $proposal['unit'] - 1) % 10;
            $troops[$index] = $amount;
            $ref = $database->addAttack(
                $wid,
                $troops[0], $troops[1], $troops[2], $troops[3], $troops[4],
                $troops[5], $troops[6], $troops[7], $troops[8], $troops[9],
                0,
                $kind === 'reinforce' ? 2 : ($kind === 'raid' ? 4 : 3),
                0, 0, 0
            );
            $target = (int) ($proposal['snapshot']['target'] ?? 0);
            if ($kind === 'settle') {
                $target = $database->findEmptyValley();
            }
            $sort = $kind === 'settle' ? 5 : 3;
            $database->addMovement($sort, $wid, $target, $ref, time(), time() + 60);
            if ($kind !== 'reinforce') {
                $database->updateUserField($uid, 'protect', 0, 1);
            }
            return true;
        }

        if ($kind === 'market') {
            $target = (int) $proposal['snapshot']['target'];
            $sendId = $database->sendResource($cost['wood'], $cost['clay'], $cost['iron'], $cost['crop'], 1, 0);
            $database->addMovement(0, $wid, $target, $sendId, time(), time() + 120, 1, $cost['wood'], $cost['clay'], $cost['iron'], $cost['crop']);
            return true;
        }

        if ($kind === 'hero') {
            include_once __DIR__ . '/../HeroAdventure.php';
            $adventures = new HeroAdventure();
            $adventures->startAdventure($uid, (int) $proposal['adventure']);
            return true;
        }

        return false;
    }

    private function recordAiDecision($uid, $wid, array $decision)
    {
        if ($decision['status'] === AiOpponentDecision::SKIP) {
            return;
        }
        global $database;
        $event = array(
            'wid' => (int) $wid,
            'action' => (string) $decision['action'],
            'reason' => (string) $decision['reason'],
            'target' => (int) $decision['target'],
            'result' => (string) $decision['status'],
        );
        $latest = $database->latestAiLog((int) $uid, (int) $wid, $event['action']);
        if (!AiOpponentDecision::shouldAppendLog($latest, $event)) {
            return;
        }
        $database->insertAiLog(
            (int) $uid,
            (int) $wid,
            $event['action'],
            $event['target'],
            $event['result'],
            $event['reason']
        );
    }

    private function purgeOldAiSuccessLogs()
    {
        if (!defined('CLEANUP_REPORTS_DAYS') || (int) CLEANUP_REPORTS_DAYS <= 0) {
            return;
        }
        global $database;
        $database->purgeAiSuccessLogs(time() - ((int) CLEANUP_REPORTS_DAYS * 86400));
    }
}
