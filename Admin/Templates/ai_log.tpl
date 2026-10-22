<?php
$rows = array();
$filter = isset($_GET['uid']) ? (int) $_GET['uid'] : 0;
if (isset($database)) {
    $database->ensureAiLogTable();
    $rows = $database->listAiLogs($filter, 100);
    $aiUsers = $database->listAiOpponentUsers();
} else {
    $aiUsers = array();
}
?>
<h4><?php echo AI_LOG_TITLE; ?></h4>
<form method="get" action="">
    <input type="hidden" name="p" value="ai_log">
    <label><?php echo AI_LOG_ACCOUNT; ?>
        <select name="uid">
            <option value="0"><?php echo AI_LOG_ALL; ?></option>
            <?php foreach ($aiUsers as $user) { ?>
                <option value="<?php echo (int) $user['id']; ?>" <?php if ($filter === (int) $user['id']) echo 'selected'; ?>>
                    <?php echo htmlspecialchars((string) $user['username'], ENT_QUOTES, 'UTF-8'); ?>
                </option>
            <?php } ?>
        </select>
    </label>
    <input type="submit" value="<?php echo AI_LOG_FILTER; ?>">
</form>
<?php if ($filter > 0) { ?>
<form method="post" action="../GameEngine/Admin/Mods/aiGold.php">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="uid" value="<?php echo $filter; ?>">
    <label><?php echo AI_LOG_GOLD; ?> <input name="gold" value="0"></label>
    <input type="submit" value="<?php echo AI_LOG_GRANT; ?>">
</form>
<?php } ?>
<table cellpadding="1" cellspacing="1">
    <thead>
        <tr>
            <td><?php echo AI_LOG_TIME; ?></td>
            <td><?php echo AI_LOG_ACCOUNT; ?></td>
            <td><?php echo AI_LOG_VILLAGE; ?></td>
            <td><?php echo AI_LOG_ACTION; ?></td>
            <td><?php echo AI_LOG_TARGET; ?></td>
            <td><?php echo AI_LOG_RESULT; ?></td>
            <td><?php echo AI_LOG_REASON; ?></td>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($rows as $row) { ?>
        <tr>
            <td><?php echo date('Y-m-d H:i', (int) $row['time']); ?></td>
            <td><?php echo (int) $row['uid']; ?></td>
            <td><?php echo (int) $row['wid']; ?></td>
            <td><?php echo htmlspecialchars((string) $row['action'], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo (int) $row['target']; ?></td>
            <td><?php echo htmlspecialchars((string) $row['result'], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlspecialchars((string) $row['reason'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
