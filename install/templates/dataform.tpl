<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       : dataform.tpl                                              ##
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

include_once('../GameEngine/config.php');
if(isset($_GET['c']) && $_GET['c'] == 1) {
    echo '<div class="card" style="border-color:#fecaca;background:#fef2f2;color:#991b1b;"><b>'.INST_ERR_DB_IMPORT.'</b></div>';
}
if(isset($_GET['err']) && $_GET['err'] == 1) {
    echo '<div class="card" style="border-color:#fecaca;background:#fef2f2;color:#991b1b;">'.sprintf(INST_ERR_DB_EXISTS, '<b>'.TB_PREFIX.'</b>', '<b>'.SQL_DB.'</b>').'</div>';
}
?>
<form action="process.php" method="post" id="dataform">
  <input type="hidden" name="substruc" value="1">
  <div class="card">
    <span class="f10 c"><?php echo INST_CREATE_DB; ?></span>
    <p style="color:#475569;"><?php echo INST_CREATE_DB_WARN; ?></p>
    <div style="text-align:center;margin-top:12px;">
      <button class="btn" id="Submit" onclick="return proceed()"><?php echo INST_CREATE_DB_BTN; ?></button>
    </div>
  </div>
</form>