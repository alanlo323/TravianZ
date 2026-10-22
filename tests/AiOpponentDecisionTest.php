<?php

require_once dirname(__DIR__) . '/GameEngine/Ai/OpponentDecision.php';

function failAi($message)
{
    fwrite(STDERR, $message . PHP_EOL);
    exit(1);
}

function assertAi($condition, $message)
{
    if (!$condition) {
        failAi($message);
    }
}

$poor = array(
    'action' => 'build',
    'resources' => array('wood' => 10, 'clay' => 10, 'iron' => 10, 'crop' => 10),
    'cost' => array('wood' => 40, 'clay' => 100, 'iron' => 50, 'crop' => 60),
    'prerequisites_met' => true,
    'target' => 1,
);
$denied = AiOpponentDecision::judge($poor);
assertAi($denied['status'] === AiOpponentDecision::DENY, 'Unaffordable build must be denied');
assertAi($denied['reason'] === AiOpponentDecision::REASON_RESOURCES, 'Unaffordable build reason is resources');

$troops = AiOpponentDecision::judge(array(
    'action' => 'raid',
    'troops' => 0,
    'troops_needed' => 1,
    'target_protect' => 0,
    'now' => 100,
    'prerequisites_met' => true,
    'target' => 9,
));
assertAi($troops['status'] === AiOpponentDecision::DENY, 'Empty army must be denied');
assertAi($troops['reason'] === AiOpponentDecision::REASON_TROOPS, 'Empty army reason is troops');

$protected = AiOpponentDecision::judge(array(
    'action' => 'attack',
    'troops' => 10,
    'troops_needed' => 1,
    'target_protect' => 500,
    'now' => 100,
    'prerequisites_met' => true,
    'target' => 4,
));
assertAi($protected['reason'] === AiOpponentDecision::REASON_PROTECTION, 'Beginner protection blocks attacks');

$noPlan = AiOpponentDecision::judge(array(
    'action' => 'wonder',
    'has_plan' => false,
    'ww_level' => 1,
    'resources' => array('wood' => 9, 'clay' => 9, 'iron' => 9, 'crop' => 9),
    'cost' => array('wood' => 1, 'clay' => 1, 'iron' => 1, 'crop' => 1),
    'prerequisites_met' => true,
));
assertAi($noPlan['status'] === AiOpponentDecision::DENY, 'Wonder without a plan is denied');

$withPlan = AiOpponentDecision::judge(array(
    'action' => 'wonder',
    'has_plan' => true,
    'alliance_has_plan' => false,
    'ww_level' => 10,
    'resources' => array('wood' => 100, 'clay' => 100, 'iron' => 100, 'crop' => 100),
    'cost' => array('wood' => 10, 'clay' => 10, 'iron' => 10, 'crop' => 10),
    'prerequisites_met' => true,
    'target' => 99,
));
assertAi($withPlan['status'] === AiOpponentDecision::ALLOW, 'Wonder with a plan and resources is allowed');

$heroOff = AiOpponentDecision::judge(array('action' => 'hero', 'hero_enabled' => false));
assertAi($heroOff['status'] === AiOpponentDecision::SKIP, 'Hero loop skips when the hero feature is off');

$gold = AiOpponentDecision::judge(array(
    'action' => 'gold',
    'gold' => 1,
    'gold_cost' => 3,
    'prerequisites_met' => true,
));
assertAi($gold['reason'] === AiOpponentDecision::REASON_RESOURCES, 'Gold spend above the balance is denied');

$event = array(
    'wid' => 7,
    'action' => 'build',
    'reason' => AiOpponentDecision::REASON_RESOURCES,
    'target' => 1,
    'result' => AiOpponentDecision::DENY,
);
assertAi(AiOpponentDecision::shouldAppendLog(null, $event), 'First refusal is stored');
assertAi(!AiOpponentDecision::shouldAppendLog($event, $event), 'Identical refusal is not stored again');
$changed = $event;
$changed['reason'] = AiOpponentDecision::REASON_PREREQ;
assertAi(AiOpponentDecision::shouldAppendLog($event, $changed), 'A new refusal reason is stored');
$success = $event;
$success['result'] = AiOpponentDecision::ALLOW;
$success['reason'] = '';
assertAi(AiOpponentDecision::shouldAppendLog($event, $success), 'A success after a refusal is stored');
assertAi(AiOpponentDecision::shouldAppendLog($success, $event), 'A refusal after a success is stored');

$times = AiOpponentDecision::trainingTimestamps(1000, 10, 2, array(array('timestamp' => 1300)));
assertAi($times['time'] === 1320 && $times['time2'] === 1310, 'Training end uses the passed queue rows');

$decisionSrc = file_get_contents(dirname(__DIR__) . '/GameEngine/Ai/OpponentDecision.php');
foreach (array('mysqli', 'getVillage', 'sendResource2', 'getTrainingList') as $banned) {
    assertAi(strpos($decisionSrc, $banned) === false, 'Decision file must not reference ' . $banned);
}

$traitPath = dirname(__DIR__) . '/GameEngine/Automation/AutomationAiOpponents.php';
$traitSrc = file_get_contents($traitPath);
assertAi(strpos($traitSrc, 'getVillage(') !== false && strpos($traitSrc, 'false') !== false, 'Trait reloads the village without the field cache');
assertAi(strpos($traitSrc, 'ai_opponent_cursor.txt') !== false, 'Cursor file is separate from the flock file');
assertAi(strpos($traitSrc, 'cron_active.txt') !== false, 'Trait refreshes the cron marker');
assertAi(strpos($traitSrc, '@') !== false, 'Registration uses an email address');
assertAi(strpos($traitSrc, 'sendResource2') === false, 'Trait must not call sendResource2');
assertAi(strpos($traitSrc, 'Market::sendResource') === false, 'Trait must not call Market::sendResource');

$troopSrc = file_get_contents(dirname(__DIR__) . '/GameEngine/Database/DatabaseTroopQueries.php');
assertAi(preg_match('/function trainUnitAtVillage\([\s\S]*?\n    \}/', $troopSrc, $match) === 1, 'trainUnitAtVillage exists');
assertAi(strpos($match[0], 'getTrainingList') === false, 'trainUnitAtVillage must not call getTrainingList');

echo "AiOpponentDecisionTest ok\n";
