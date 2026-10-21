<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       : config.tpl                                                ##
##  Type           : Install Panel Frontend & Backend                          ##
## --------------------------------------------------------------------------- ##
##  Developed by   : Dzoki (Original)                                          ##
##  Refactored by  : Shadow                                                    ##
##  Redesign by    : Shadow                                                    ##
## --------------------------------------------------------------------------- ##
##  Contact        : cata7007@gmail.com                                        ##
##  Project        : TravianZ                                                  ##
##  GitHub         : https://github.com/Shadowss/TravianZ                      ##
## --------------------------------------------------------------------------- ##
##  License        : TravianZ Project                                          ##
##  Copyright      : TravianZ (c) 2010-2025. All rights reserved.              ##
## --------------------------------------------------------------------------- ##
#################################################################################

if(isset($_GET['c']) && $_GET['c'] == 1) {
echo "<div class=\"headline\"><span class=\"f10 c5\">".INST_ERR_CONST."</span></div><br>";
}

@session_start();

$envPath = dirname(__DIR__, 2). '/.env';
$envDefaults = [];
if(file_exists($envPath)) {
    $lines = @file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if(is_array($lines)) {
        foreach($lines as $line) {
            $line = trim($line);
            if($line === '' || $line[0] === '#') {
                continue;
            }

            $eqPos = strpos($line, '=');
            if($eqPos === false) {
                continue;
            }

            $key = trim(substr($line, 0, $eqPos));
            $value = trim(substr($line, $eqPos + 1));
            if($key === '') {
                continue;
            }

            if((strlen($value) >= 2) && (($value[0] === '"' && substr($value, -1) === '"') || ($value[0] === "'" && substr($value, -1) === "'"))) {
                $value = substr($value, 1, -1);
            }

            $envDefaults[$key] = $value;
        }

        // Resolve ${VAR} references using parsed values first, then process env.
        foreach($envDefaults as $key => $value) {
            $envDefaults[$key] = preg_replace_callback('/\$\{([A-Z0-9_]+)\}/i', function($m) use ($envDefaults) {
                $ref = $m[1];
                if(isset($envDefaults[$ref])) return $envDefaults[$ref];
                $fromEnv = getenv($ref);
                return ($fromEnv!== false)? $fromEnv : '';
            }, $value);
        }
    }
}

$dbHost = $envDefaults['DB_HOST']?? 'localhost';
$dbPort = $envDefaults['DB_PORT']?? '3306';
$dbUser = $envDefaults['MARIADB_USER']?? ($envDefaults['MYSQL_USER']?? '');
$dbPass = $envDefaults['MARIADB_PASSWORD']?? ($envDefaults['MYSQL_PASSWORD']?? '');
$dbName = $envDefaults['MARIADB_DATABASE']?? ($envDefaults['MYSQL_DATABASE']?? '');

if(empty($_SESSION['install_random_prefix'])) {
    try {
        $_SESSION['install_random_prefix'] = 's'. substr(bin2hex(random_bytes(2)), 0, 4). '_';
    } catch (Throwable $e) {
        $_SESSION['install_random_prefix'] = 's'. str_pad((string) mt_rand(0, 9999), 4, '0', STR_PAD_LEFT). '_';
    }
}
$dbPrefix = $_SESSION['install_random_prefix'];
?>

<form action="process.php" method="post" id="dataform">
<input type="hidden" name="subconst" value="1">

<div class="card">
  <span class="f10 c"><?php echo INST_SEC_SERVER; ?></span>
  <div class="grid-2" style="margin-top:8px;">
    <div><label><?php echo INST_LBL_SERVER_NAME; ?></label><input class="input" name="servername" id="servername" value="TravianZ"></div>
    <div><label><?php echo INST_LBL_TIMEZONE; ?></label>
      <select class="input" name="tzone" onchange="refresh(this.value)">
        <option value="1,Africa/Dakar" <?=$tz==1?'selected':''?>><?php echo INST_OPT_AFRICA; ?></option>
        <option value="2,America/New_York" <?=$tz==2?'selected':''?>><?php echo INST_OPT_AMERICA; ?></option>
        <option value="13,America/Sao_Paulo" <?=$tz==13?'selected':''?>><?php echo INST_OPT_BRAZIL; ?></option>
        <option value="3,Antarctica/Casey" <?=$tz==3?'selected':''?>><?php echo INST_OPT_ANTARCTICA; ?></option>
        <option value="4,Arctic/Longyearbyen" <?=$tz==4?'selected':''?>><?php echo INST_OPT_ARCTIC; ?></option>
        <option value="5,Asia/Kuala_Lumpur" <?=$tz==5?'selected':''?>><?php echo INST_OPT_ASIA; ?></option>
        <option value="6,Atlantic/Azores" <?=$tz==6?'selected':''?>><?php echo INST_OPT_ATLANTIC; ?></option>
        <option value="7,Australia/Melbourne" <?=$tz==7?'selected':''?>><?php echo INST_OPT_AUSTRALIA; ?></option>
        <option value="8,Europe/Bucharest" <?=$tz==8?'selected':''?>><?php echo INST_OPT_EU_BUCHAREST; ?></option>
        <option value="9,Europe/London" <?=$tz==9?'selected':''?>><?php echo INST_OPT_EU_LONDON; ?></option>
        <option value="14,Europe/Zurich" <?=$tz==14?'selected':''?>><?php echo INST_OPT_EU_SWISS; ?></option>
        <option value="10,Europe/Bratislava" <?=$tz==10?'selected':''?>><?php echo INST_OPT_EU_BRATISLAVA; ?></option>
        <option value="11,Indian/Maldives" <?=$tz==11?'selected':''?>><?php echo INST_OPT_INDIAN; ?></option>
        <option value="12,Pacific/Fiji" <?=$tz==12?'selected':''?>><?php echo INST_OPT_PACIFIC; ?></option>
      </select>
    </div>
    <div><label><?php echo INST_LBL_SPEED; ?></label><input class="input" name="speed" id="speed" value="1"></div>
    <div><label><?php echo INST_LBL_TROOP; ?></label><input class="input" name="incspeed" id="incspeed" value="1"></div>
    <div><label><?php echo INST_LBL_EVASION; ?></label><input class="input" name="evasionspeed" id="evasionspeed" value="1"></div>
    <div><label><?php echo INST_LBL_TRADER; ?></label><input class="input" name="tradercap" id="tradercap" value="1"></div>
    <div><label><?php echo INST_LBL_CRANNY; ?></label><input class="input" name="crannycap" id="crannycap" value="1"></div>
    <div><label><?php echo INST_LBL_TRAPPER; ?></label><input class="input" name="trappercap" id="trappercap" value="1"></div>
    <div><label><?php echo INST_LBL_WORLD; ?></label>
      <select class="input" name="wmax">
        <option value="10">10x10</option><option value="25">25x25</option><option value="50">50x50</option>
        <option value="100" selected>100x100</option><option value="150">150x150</option><option value="200">200x200</option>
        <option value="250">250x250</option><option value="300">300x300</option><option value="350">350x350</option><option value="400">400x400</option>
      </select>
    </div>
    <div><label><?php echo INST_LBL_LANGUAGE; ?></label>
      <select class="input" name="lang"><option value="en"><?php echo INST_OPT_EN; ?></option><option value="fr"><?php echo INST_OPT_FR; ?></option><option value="it"><?php echo INST_OPT_IT; ?></option><option value="es"><?php echo INST_OPT_ES; ?></option><option value="ro"><?php echo INST_OPT_RO; ?></option><option value="zh"><?php echo INST_OPT_ZH; ?></option><option value="zh_tw" selected><?php echo INST_OPT_ZH_TW; ?></option></select>
    </div>
    <div><label><?php echo INST_LBL_BEGINNER; ?></label>
      <select class="input" name="beginner">
        <option value="7200"><?php echo INST_OPT_H2; ?></option><option value="10800"><?php echo INST_OPT_H3; ?></option><option value="18000"><?php echo INST_OPT_H5; ?></option><option value="28800"><?php echo INST_OPT_H8; ?></option><option value="36000"><?php echo INST_OPT_H10; ?></option>
        <option value="43200" selected><?php echo INST_OPT_H12; ?></option><option value="86400"><?php echo INST_OPT_H24_1D; ?></option><option value="172800"><?php echo INST_OPT_H48_2D; ?></option><option value="259200"><?php echo INST_OPT_H72_3D; ?></option><option value="432000"><?php echo INST_OPT_H120_5D; ?></option>
      </select>
    </div>
    <div><label><?php echo INST_LBL_REG_OPEN; ?></label><select class="input" name="reg_open"><option value="true" selected><?php echo INST_OPT_TRUE; ?></option><option value="false"><?php echo INST_OPT_FALSE; ?></option></select></div>
  </div>
</div>

<div class="grid-2">
  <div class="card">
    <span class="f10 c"><?php echo INST_SEC_NATARS; ?></span>
    <div style="margin-top:12px;display:grid;gap:10px;">
      <div><label><?php echo INST_LBL_NATARS_UNITS_MULTIPLIER; ?></label><input class="input" name="natars_units" id="natars_units" value="100"></div>
      <div><label><?php echo INST_LBL_NATARS_SPAWN_DAYS; ?></label><input class="input" name="natars_spawn_time" id="natars_spawn_time" value="260"></div>
      <div><label><?php echo INST_LBL_WW_SPAWN_DAYS; ?></label><input class="input" name="natars_ww_spawn_time" id="natars_ww_spawn_time" value="260"></div>
      <div><label><?php echo INST_LBL_WW_BP_SPAWN_DAYS; ?></label><input class="input" name="natars_ww_building_plan_spawn_time" id="natars_ww_building_plan_spawn_time" value="260"></div>
      <div><label><?php echo INST_LBL_NATARS_START_BUILD_WW_DAYS; ?></label><input class="input" name="natars_ww_start_delay" id="natars_ww_start_delay" value="10"></div>
      <div><label><?php echo INST_LBL_NATURE_REGEN; ?></label><select class="input" name="nature_regtime"><option value="28800"><?php echo INST_OPT_H8; ?></option><option value="36000"><?php echo INST_OPT_H10; ?></option><option value="43200" selected><?php echo INST_OPT_H12; ?></option><option value="57600"><?php echo INST_OPT_H16; ?></option><option value="72000"><?php echo INST_OPT_H20; ?></option><option value="86400"><?php echo INST_OPT_H24; ?></option></select></div>
    </div>
  </div>
  <div class="card">
    <span class="f10 c"><?php echo INST_SEC_OASIS; ?></span>
    <div style="margin-top:12px;display:grid;gap:10px;">
      <div><label><?php echo INST_LBL_WOOD_MULTIPLIER; ?></label><input class="input" name="oasis_wood_multiplier" id="oasis_wood_multiplier" value="40"></div>
      <div><label><?php echo INST_LBL_CLAY_MULTIPLIER; ?></label><input class="input" name="oasis_clay_multiplier" id="oasis_clay_multiplier" value="40"></div>
      <div><label><?php echo INST_LBL_IRON_MULTIPLIER; ?></label><input class="input" name="oasis_iron_multiplier" id="oasis_iron_multiplier" value="40"></div>
      <div><label><?php echo INST_LBL_CROP_MULTIPLIER; ?></label><input class="input" name="oasis_crop_multiplier" id="oasis_crop_multiplier" value="40"></div>
      <div><label><?php echo INST_LBL_STORAGE_MULTIPLIER; ?></label><input class="input" name="storage_multiplier" id="storage_multiplier" value="1"></div>
      <div><label><?php echo INST_LBL_TS_THRESHOLD; ?></label><input class="input" name="ts_threshold" id="ts_threshold" value="20"></div>
    </div>
  </div>
</div>

<div class="grid-2">
  <div class="card">
    <span class="f10 c"><?php echo INST_SEC_SQL; ?></span>
    <div style="margin-top:12px;display:grid;gap:10px;">
      <div><label><?php echo INST_LBL_HOSTNAME; ?></label><input class="input" name="sserver" id="sserver" value="<?=htmlspecialchars($dbHost, ENT_QUOTES, 'UTF-8')?>"></div>
      <div><label><?php echo INST_LBL_PORT; ?></label><input class="input" name="sport" id="sport" value="<?=htmlspecialchars($dbPort, ENT_QUOTES, 'UTF-8')?>"></div>
      <div><label><?php echo INST_LBL_USERNAME; ?></label><input class="input" name="suser" id="suser" value="<?=htmlspecialchars($dbUser, ENT_QUOTES, 'UTF-8')?>"></div>
      <div><label><?php echo INST_LBL_PASSWORD; ?></label><input class="input" type="password" name="spass" id="spass" value="<?=htmlspecialchars($dbPass, ENT_QUOTES, 'UTF-8')?>"></div>
      <div><label><?php echo INST_LBL_DBNAME; ?></label><input class="input" name="sdb" id="sdb" value="<?=htmlspecialchars($dbName, ENT_QUOTES, 'UTF-8')?>"></div>
      <div><label><?php echo INST_LBL_PREFIX; ?></label><input class="input" name="prefix" id="prefix" value="<?=htmlspecialchars($dbPrefix, ENT_QUOTES, 'UTF-8')?>" size="7"></div>
      <div><label><?php echo INST_LBL_TYPE; ?></label><select class="input" name="connectt"><option value="0" disabled><?php echo INST_OPT_MYSQL_OLD; ?></option><option value="1" selected><?php echo INST_OPT_MYSQLI; ?></option></select></div>
    </div>
  </div>
  <div class="card">
    <span class="f10 c"><?php echo INST_SEC_URLS; ?></span>
    <div style="margin-top:12px;display:grid;gap:10px;">
      <div><label><?php echo INST_LBL_SERVER_URL; ?></label><input class="input" name="server" id="homepage" value="http://<?=$_SERVER['HTTP_HOST']?>/"></div>
      <div><label><?php echo INST_LBL_DOMAIN; ?></label><input class="input" name="domain" id="homepage" value="http://<?=$_SERVER['HTTP_HOST']?>/"></div>
      <div><label><?php echo INST_LBL_HOMEPAGE; ?></label><input class="input" name="homepage" id="homepage" value="http://<?=$_SERVER['HTTP_HOST']?>/"></div>
      <div><label><?php echo INST_LBL_MEDAL_INTERVAL; ?></label><select class="input" name="medalinterval"><option value="0"><?php echo INST_OPT_NONE_LC; ?></option><option value="(3600*24)"><?php echo INST_OPT_D1; ?></option><option value="(3600*24*2)"><?php echo INST_OPT_D2; ?></option><option value="(3600*24*3)"><?php echo INST_OPT_D3; ?></option><option value="(3600*24*4)"><?php echo INST_OPT_D4; ?></option><option value="(3600*24*5)"><?php echo INST_OPT_D5; ?></option><option value="(3600*24*6)"><?php echo INST_OPT_D6; ?></option><option value="(3600*24*7)" selected><?php echo INST_OPT_D7; ?></option></select></div>
      <div><label><?php echo INST_LBL_GREAT_WORKSHOP; ?></label><select class="input" name="great_wks"><option value="true"><?php echo INST_OPT_TRUE; ?></option><option value="false" selected><?php echo INST_OPT_FALSE; ?></option></select></div>
      <div><label><?php echo INST_LBL_WW_ENABLED; ?></label><select class="input" name="ww"><option value="true"><?php echo INST_OPT_TRUE; ?></option><option value="false" selected><?php echo INST_OPT_FALSE; ?></option></select></div>
      <div><label><?php echo INST_LBL_SHOW_NATARS; ?></label><select class="input" name="show_natars"><option value="true"><?php echo INST_OPT_TRUE; ?></option><option value="false" selected><?php echo INST_OPT_FALSE; ?></option></select></div>
      <div><label><?php echo INST_LBL_PEACE_SYSTEM; ?></label><select class="input" name="peace"><option value="0" selected><?php echo INST_OPT_NONE; ?></option><option value="1"><?php echo INST_OPT_NORMAL; ?></option><option value="2"><?php echo INST_OPT_CHRISTMAS; ?></option><option value="3"><?php echo INST_OPT_NEWYEAR; ?></option><option value="4"><?php echo INST_OPT_EASTER; ?></option></select></div>
    </div>
  </div>
</div>

<div class="card">
  <span class="f10 c"><?php echo INST_SEC_MECH; ?></span>
	<div class="grid-1" style="margin-top:12px;display:flex;flex-direction:column;gap:10px;">
<?php
$mechs = [
    'new_functions_oasis'                 => INST_MECH_DISPLAY_OASIS_IN_PROFILE,
    'new_functions_alliance_invitation'   => INST_MECH_ALLIANCE_INVITATION,
    'new_functions_embassy_mechanics'     => INST_MECH_EMBASSY_MECHANICS,
    'new_functions_forum_post_message'    => INST_MECH_FORUM_POST_MESSAGE,
    'new_functions_tribe_images'          => INST_MECH_TRIBES_IMAGES,
    'new_functions_mhs_images'            => INST_MECH_MHS_IMAGES,
    'new_functions_display_artifact'      => INST_MECH_DISPLAY_ARTIFACT,
    'new_functions_display_wonder'        => INST_MECH_DISPLAY_WONDER,
    'new_functions_vacation'              => INST_MECH_VACATION_MODE,
    'new_functions_display_catapult_target'=> INST_MECH_CATAPULT_TARGETS,
    'new_functions_manual_naturenatars'   => INST_MECH_MANUAL_NATURE_NATARS,
    'new_functions_display_links'         => INST_MECH_DIRECT_LINKS,
    'new_functions_medal_3year'           => INST_MECH_MEDAL_3Y,
    'new_functions_medal_5year'           => INST_MECH_MEDAL_5Y,
    'new_functions_medal_10year'          => INST_MECH_MEDAL_10Y,
	'new_functions_special_medals_system' => INST_MECH_SPECIAL_MEDALS_SYSTEM,
	'new_functions_medal_reset' 		  => INST_MECH_MEDAL_RESET,
	'new_functions_milestones'            => INST_MECH_SERVER_MILESTONES,
	'new_functions_hero_t4'               => INST_MECH_T4_HERO_ITEMS_ADVENTURES_AUCTION,
	'new_function_tribe_huns'             => INST_MECH_NEW_TRIBE_HUNS,
	'new_function_tribe_egipteans'        => INST_MECH_NEW_TRIBE_EGYPTIANS,
	'new_function_tribe_spartans'         => INST_MECH_NEW_TRIBE_SPARTANS,
	'new_function_tribe_vikings'          => INST_MECH_NEW_TRIBE_VIKINGS,
	'new_function_tribe_vikings'          => INST_MECH_NEW_TRIBE_VIKINGS,
	'new_function_registration_gold'      => INST_MECH_REGISTRATION_BONUS_GOLD
];

foreach($mechs as $k => $l){
    echo "
    <div style='display:flex;flex-direction:column;gap:4px;'>
        <label>$l</label>
        <select class='input' name='$k'>
            <option value='true'><?php echo INST_OPT_TRUE; ?></option>
            <option value='false' selected><?php echo INST_OPT_FALSE; ?></option>
        </select>
    </div>";
}
?>
<div style='display:flex;flex-direction:column;gap:4px;margin-top:4px;'>
    <label><?php echo INST_LBL_REG_GOLD_AMOUNT; ?></label>
    <input class='input' type='number' min='0' step='1' name='new_function_registration_gold_value' id='new_function_registration_gold_value' value='200'>
</div>                      
</div>
</div>

<div class="card">
  <span class="f10 c"><?php echo INST_SEC_PLUS; ?></span>
  <div class="grid-2" style="margin-top:12px;">
    <div><label><?php echo INST_LBL_PAYPAL_EMAIL; ?></label><input class="input" name="paypal-email" id="paypal-email" value="@"></div>
    <div><label><?php echo INST_LBL_CURRENCY; ?></label><input class="input" name="paypal-currency" id="paypal-currency" value="EUR"></div>
    <div><label><?php echo INST_LBL_PACKAGE_A_GOLD; ?></label><input class="input" name="plus-a-gold" id="plus-a-gold" value="60"></div>
    <div><label><?php echo INST_LBL_PACKAGE_A_PRICE; ?></label><input class="input" name="plus-a-price" id="plus-a-price" value="1,99"></div>
    <div><label><?php echo INST_LBL_PACKAGE_B_GOLD; ?></label><input class="input" name="plus-b-gold" id="plus-b-gold" value="120"></div>
    <div><label><?php echo INST_LBL_PACKAGE_B_PRICE; ?></label><input class="input" name="plus-b-price" id="plus-b-price" value="4,99"></div>
    <div><label><?php echo INST_LBL_PACKAGE_C_GOLD; ?></label><input class="input" name="plus-c-gold" id="plus-c-gold" value="360"></div>
    <div><label><?php echo INST_LBL_PACKAGE_C_PRICE; ?></label><input class="input" name="plus-c-price" id="plus-c-price" value="9,99"></div>
    <div><label><?php echo INST_LBL_PACKAGE_D_GOLD; ?></label><input class="input" name="plus-d-gold" id="plus-d-gold" value="1000"></div>
    <div><label><?php echo INST_LBL_PACKAGE_D_PRICE; ?></label><input class="input" name="plus-d-price" id="plus-d-price" value="19,99"></div>
    <div><label><?php echo INST_LBL_PACKAGE_E_GOLD; ?></label><input class="input" name="plus-e-gold" id="plus-e-gold" value="2000"></div>
    <div><label><?php echo INST_LBL_PACKAGE_E_PRICE; ?></label><input class="input" name="plus-e-price" id="plus-e-price" value="49,99"></div>
    <div><label><?php echo INST_LBL_PLUS_LENGTH; ?></label><select class="input" name="plus_time"><option value="(3600*12)"><?php echo INST_OPT_H12; ?></option><option value="(3600*24)"><?php echo INST_OPT_D1; ?></option><option value="(3600*24*2)"><?php echo INST_OPT_D2; ?></option><option value="(3600*24*3)"><?php echo INST_OPT_D3; ?></option><option value="(3600*24*4)"><?php echo INST_OPT_D4; ?></option><option value="(3600*24*5)"><?php echo INST_OPT_D5; ?></option><option value="(3600*24*6)"><?php echo INST_OPT_D6; ?></option><option value="(3600*24*7)" selected><?php echo INST_OPT_D7; ?></option></select></div>
    <div><label><?php echo INST_LBL_25_PRODUCTION; ?></label><select class="input" name="plus_production"><option value="(3600*12)"><?php echo INST_OPT_H12; ?></option><option value="(3600*24)"><?php echo INST_OPT_D1; ?></option><option value="(3600*24*2)"><?php echo INST_OPT_D2; ?></option><option value="(3600*24*3)"><?php echo INST_OPT_D3; ?></option><option value="(3600*24*4)"><?php echo INST_OPT_D4; ?></option><option value="(3600*24*5)"><?php echo INST_OPT_D5; ?></option><option value="(3600*24*6)"><?php echo INST_OPT_D6; ?></option><option value="(3600*24*7)" selected><?php echo INST_OPT_D7; ?></option></select></div>
  </div>
</div>

<div class="grid-2">
  <div class="card">
    <span class="f10 c"><?php echo INST_SEC_NEWS; ?></span>
    <div style="margin-top:12px;display:grid;gap:10px;">
      <div><label><?php echo INST_LBL_NEWSBOX_1; ?></label><select class="input" name="box1"><option value="true"><?php echo INST_OPT_ENABLED; ?></option><option value="false" selected><?php echo INST_OPT_DISABLED; ?></option></select></div>
      <div><label><?php echo INST_LBL_NEWSBOX_2; ?></label><select class="input" name="box2"><option value="true"><?php echo INST_OPT_ENABLED; ?></option><option value="false" selected><?php echo INST_OPT_DISABLED; ?></option></select></div>
      <div><label><?php echo INST_LBL_NEWSBOX_3; ?></label><select class="input" name="box3"><option value="true"><?php echo INST_OPT_ENABLED; ?></option><option value="false" selected><?php echo INST_OPT_DISABLED; ?></option></select></div>
    </div>
  </div>
  <div class="card">
    <span class="f10 c"><?php echo INST_SEC_LOG; ?></span>
    <div style="margin-top:12px;display:grid;gap:10px;">
      <div><label><?php echo INST_LBL_LOG_BUILDING; ?></label><select class="input" name="log_build"><option value="true"><?php echo INST_OPT_YES; ?></option><option value="false" selected><?php echo INST_OPT_NO; ?></option></select></div>
      <div><label><?php echo INST_LBL_LOG_TECH; ?></label><select class="input" name="log_tech"><option value="true"><?php echo INST_OPT_YES; ?></option><option value="false" selected><?php echo INST_OPT_NO; ?></option></select></div>
      <div><label><?php echo INST_LBL_LOG_LOGIN; ?></label><select class="input" name="log_login"><option value="true"><?php echo INST_OPT_YES; ?></option><option value="false" selected><?php echo INST_OPT_NO; ?></option></select></div>
      <div><label><?php echo INST_LBL_LOG_GOLD; ?></label><select class="input" name="log_gold_fin"><option value="true"><?php echo INST_OPT_YES; ?></option><option value="false" selected><?php echo INST_OPT_NO; ?></option></select></div>
      <div><label><?php echo INST_LBL_LOG_ADMIN; ?></label><select class="input" name="log_admin"><option value="true"><?php echo INST_OPT_YES; ?></option><option value="false" selected><?php echo INST_OPT_NO; ?></option></select></div>
      <div><label><?php echo INST_LBL_LOG_WAR; ?></label><select class="input" name="log_war"><option value="true"><?php echo INST_OPT_YES; ?></option><option value="false" selected><?php echo INST_OPT_NO; ?></option></select></div>
      <div><label><?php echo INST_LBL_LOG_MARKET; ?></label><select class="input" name="log_market"><option value="true"><?php echo INST_OPT_YES; ?></option><option value="false" selected><?php echo INST_OPT_NO; ?></option></select></div>
      <div><label><?php echo INST_LBL_LOG_ILLEGAL; ?></label><select class="input" name="log_illegal"><option value="true"><?php echo INST_OPT_YES; ?></option><option value="false" selected><?php echo INST_OPT_NO; ?></option></select></div>
    </div>
  </div>
</div>

<div class="card">
  <span class="f10 c"><?php echo INST_SEC_EXTRA; ?></span>
  <div class="grid-2" style="margin-top:12px;">
    <div><label><?php echo INST_LBL_QUEST; ?></label><select class="input" name="quest"><option value="true" selected><?php echo INST_OPT_YES; ?></option><option value="false"><?php echo INST_OPT_NO; ?></option></select></div>
    <div><label><?php echo INST_LBL_QUEST_TYPE; ?></label><select class="input" name="qtype"><option value="25" selected><?php echo INST_OPT_QUEST_OFFICIAL; ?></option><option value="37"><?php echo INST_OPT_QUEST_EXTENDED; ?></option></select></div>
    <div><label><?php echo INST_LBL_ACTIVATE; ?></label><select class="input" name="activate"><option value="true"><?php echo INST_OPT_YES; ?></option><option value="false" selected><?php echo INST_OPT_NO; ?></option></select></div>
    <div><label><?php echo INST_LBL_LIMIT_MAILBOX; ?></label><select class="input" name="limit_mailbox"><option value="true"><?php echo INST_OPT_YES; ?></option><option value="false" selected><?php echo INST_OPT_NO; ?></option></select></div>
    <div><label><?php echo INST_LBL_MAX_MAILS; ?></label><input class="input" name="max_mails" id="max_mails" value="30"></div>
    <div><label><?php echo INST_LBL_DEMOLISH_LVL_REQUIRED; ?></label><select class="input" name="demolish"><option value="5">5</option><option value="10" selected><?php echo INST_OPT_DEMOLISH_DEFAULT; ?></option><option value="15">15</option><option value="20">20</option></select></div>
    <div><label><?php echo INST_LBL_VILLAGE_EXPAND; ?></label><select class="input" name="village_expand"><option value="1" selected><?php echo INST_OPT_SLOW; ?></option><option value="0"><?php echo INST_OPT_FAST; ?></option></select></div>
    <div><label><?php echo INST_LBL_ERROR_REPORTING; ?></label><select class="input" name="error"><option value="error_reporting (E_ALL ^ E_NOTICE ^ E_DEPRECATED);" selected><?php echo INST_OPT_YES; ?></option><option value="error_reporting (0);"><?php echo INST_OPT_NO; ?></option></select></div>
    <div><label><?php echo INST_LBL_T4_IS_COMING_SCREEN; ?></label><select class="input" name="t4_coming"><option value="true"><?php echo INST_OPT_YES; ?></option><option value="false" selected><?php echo INST_OPT_NO; ?></option></select></div>
    <div><label><?php echo INST_LBL_START_DATE; ?></label><input class="input" name="start_date" id="start_date" value="<?=date('d.m.Y')?>"></div>
    <div><label><?php echo INST_LBL_START_TIME; ?></label><input class="input" name="start_time" id="start_time" value="<?=date('H:i')?>"></div>
  </div>
</div>

<div class="card">
  <span class="f10 c"><?php echo INST_SEC_CRON; ?></span>
  <div class="grid-2" style="margin-top:12px;">
    <div><label><?php echo INST_LBL_CRON_INVOCATION_LENGTH_SEC; ?></label><select class="input" name="cron_loop">
        <option value="300" selected><?php echo INST_OPT_CRON_300; ?></option>
        <option value="600"><?php echo INST_OPT_CRON_600; ?></option>
        <option value="900"><?php echo INST_OPT_CRON_900; ?></option>
        <option value="0"><?php echo INST_OPT_CRON_0; ?></option>
    </select></div>
    <div><label><?php echo INST_LBL_CRON_TICK_INTERVAL_SEC; ?></label><input class="input" name="cron_tick" id="cron_tick" value="60"></div>
    <div><label><?php echo INST_LBL_DELETE_UNARCHIVED_REPORTS_AFTER_DAYS; ?></label><input class="input" name="cleanup_reports" id="cleanup_reports" value="14"></div>
    <div><label><?php echo INST_LBL_DELETE_CHAT_MESSAGES_AFTER_DAYS; ?></label><input class="input" name="cleanup_chat" id="cleanup_chat" value="7"></div>
    <div><label><?php echo INST_LBL_DELETE_MESSAGES_ERASED_BY_BOTH_SIDES_DAYS; ?></label><input class="input" name="cleanup_messages" id="cleanup_messages" value="0"></div>
    <div><label><?php echo INST_LBL_HERO_BASE_REGENERATION_HP_DAY; ?></label><input class="input" name="hero_base_regen" id="hero_base_regen" value="10"></div>
    <div><label><?php echo INST_LBL_SILVER_RECEIVED_PER_1_GOLD; ?></label><input class="input" name="hero_silver_per_gold" id="hero_silver_per_gold" value="10"></div>
    <div><label><?php echo INST_LBL_SILVER_NEEDED_FOR_1_GOLD; ?></label><input class="input" name="hero_silver_to_gold" id="hero_silver_to_gold" value="25"></div>
    <div><label><?php echo INST_LBL_PLUS_GRAPHICAL_STATISTICS; ?></label><select class="input" name="plus_statistics">
        <option value="true" selected><?php echo INST_OPT_PLUS_STATS_YES; ?></option>
        <option value="false"><?php echo INST_OPT_NO; ?></option>
    </select></div>
    <div><label><?php echo INST_LBL_STATISTICS_SNAPSHOT_INTERVAL_HOURS; ?></label><input class="input" type="text" name="plus_stats_hours" value="6"></div>
    <div><label><?php echo INST_LBL_STATISTICS_HISTORY_KEPT_DAYS_0_FOREVER; ?></label><input class="input" type="text" name="plus_stats_keep" value="0"></div>
    <div><label><?php echo INST_LBL_ALLIANCE_BONUSES_T4; ?></label><select class="input" name="alliance_bonuses">
        <option value="false" selected><?php echo INST_OPT_NO; ?></option>
        <option value="true"><?php echo INST_OPT_YES; ?></option>
    </select></div>
    <div><label><?php echo INST_LBL_MINIMUM_USERNAME_LENGTH; ?></label><input class="input" type="text" name="usrnm_min" value="3"></div>
    <div><label><?php echo INST_LBL_MAXIMUM_USERNAME_LENGTH; ?></label><input class="input" type="text" name="usrnm_max" value="15"></div>
    <div><label><?php echo INST_LBL_MINIMUM_PASSWORD_LENGTH; ?></label><input class="input" type="text" name="pw_min" value="4"></div>
    <div><label><?php echo INST_LBL_ALLOW_IN_USERNAMES; ?></label><select class="input" name="usrnm_special">
        <option value="true" selected><?php echo INST_OPT_YES; ?></option>
        <option value="false"><?php echo INST_OPT_USR_SPECIAL_NO; ?></option>
    </select></div>
    <div><label><?php echo INST_LBL_PER_TRIBE_WORLD_WONDER_IMAGE; ?></label><select class="input" name="ww_image">
        <option value="true" selected><?php echo INST_OPT_YES; ?></option>
        <option value="false"><?php echo INST_OPT_WW_IMG_NO; ?></option>
    </select></div>
    <div><label><?php echo INST_LBL_PROTECTED_PLAYERS_NO_ATTACKS; ?></label><input class="input" type="text" name="protected_players" value="" placeholder="<?php echo INST_PLACEHOLDER_PROTECTED; ?>"></div>
    <div><label><?php echo INST_LBL_ALLOW_PLAYER_GRAPHIC_PACKS; ?></label><select class="input" name="gpack">
        <option value="false" selected><?php echo INST_OPT_GPACK_NO; ?></option>
        <option value="true"><?php echo INST_OPT_GPACK_YES; ?></option>
    </select></div>
    <div><label><?php echo INST_LBL_GRAPHIC_PACK; ?></label><select class="input" name="gp_locate">
        <option value="gpack/travian_default/" selected><?php echo INST_OPT_GP_DEFAULT; ?></option>
        <option value="gpack/travian_t4/"><?php echo INST_OPT_GP_T4; ?></option>
    </select></div>
    <div><label><?php echo INST_LBL_HERO_RESOURCES_PER_POINT_ALL_FOUR; ?></label><input class="input" name="hero_res_all" id="hero_res_all" value="3"></div>
    <div><label><?php echo INST_LBL_HERO_RESOURCES_PER_POINT_SINGLE_TYPE; ?></label><input class="input" name="hero_res_one" id="hero_res_one" value="10"></div>
  </div>
  <div class="f10" style="margin-top:8px;opacity:.75;">
    <?php echo INST_CRON_HELP; ?>
  </div>
</div>

<div style="text-align:center;margin:18px 0;">
  <button class="btn" type="submit" name="Submit" id="Submit"><?php echo INST_SAVE_CONFIG; ?></button>
</div>
</form>