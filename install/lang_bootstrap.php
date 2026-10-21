<?php
/**
 * Installer UI language bootstrap.
 *
 * GameEngine/Lang/*.php only drives the game AFTER install (SERVER_LANG).
 * The installer templates were hard-coded English. This file loads an
 * installer-only pack early so Intro and every step can render localized UI.
 *
 * Default: zh_tw (Traditional Chinese). Override with ?ilang=en or cookie.
 */
if (session_status() !== PHP_SESSION_ACTIVE) {
    @session_start();
}

if (!function_exists('tz_install_def')) {
    function tz_install_def($k, $v)
    {
        if (!defined($k)) {
            define($k, $v);
        }
    }
}

$allowed = ['zh_tw', 'en'];
$chosen = 'zh_tw';

if (isset($_GET['ilang'])) {
    $candidate = strtolower(preg_replace('/[^a-z_]/', '', (string) $_GET['ilang']));
    if (in_array($candidate, $allowed, true)) {
        $chosen = $candidate;
        $_SESSION['install_lang'] = $chosen;
        setcookie('install_lang', $chosen, time() + 86400 * 30, '/');
    }
} elseif (!empty($_SESSION['install_lang'])) {
    $candidate = strtolower(preg_replace('/[^a-z_]/', '', (string) $_SESSION['install_lang']));
    if (in_array($candidate, $allowed, true)) {
        $chosen = $candidate;
    }
} elseif (!empty($_COOKIE['install_lang'])) {
    $candidate = strtolower(preg_replace('/[^a-z_]/', '', (string) $_COOKIE['install_lang']));
    if (in_array($candidate, $allowed, true)) {
        $chosen = $candidate;
    }
}

$langFile = __DIR__ . '/lang/' . $chosen . '.php';
if (!is_file($langFile)) {
    $chosen = 'zh_tw';
    $langFile = __DIR__ . '/lang/zh_tw.php';
}

require $langFile;
if (!defined('INSTALL_LANG')) {
    define('INSTALL_LANG', $chosen);
}
