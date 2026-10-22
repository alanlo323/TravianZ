<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Project:       TravianZ                                                    ##
##  Filename:      aiGold.php                                                  ##
##  Purpose:       Grant gold to a marked AI opponent account.                 ##
##                                                                             ##
##  License:       TravianZ Project                                            ##
##  Copyright:     TravianZ (c) 2010-2026. All rights reserved.                ##
##  URLs:          https://travianz.org                                        ##
##                 https://github.com/Shadowss/TravianZ                        ##
#################################################################################

require_once(__DIR__ . '/../csrf.php');
if (!isset($_SESSION)) {
    session_start();
}
if (($_SESSION['access'] ?? 0) < 9) {
    admin_deny('You must be signed in as an administrator to view this page.');
}
csrf_verify();

include_once(__DIR__ . '/../../config.php');
include_once(__DIR__ . '/../../Database.php');

global $database;
$uid = (int) ($_POST['uid'] ?? 0);
$amount = (int) ($_POST['gold'] ?? 0);
if ($uid > 5 && $amount > 0) {
    foreach ($database->listAiOpponentUsers() as $user) {
        if ((int) $user['id'] === $uid) {
            $database->modifyGold($uid, $amount, 1);
            break;
        }
    }
}

header('Location: ../../../Admin/admin.php?p=ai_log&uid=' . $uid);
exit;
