<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       : accounts.tpl                                              ##
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

if(isset($_GET['err']) && $_GET['err'] == 1) {
    echo '<div class="card" style="background:#fef2f2;border-color:#fecaca;color:#991b1b;margin-bottom:14px;">'.INST_ERR_MH_PASS.'</div>';
}
if(isset($_GET['err']) && $_GET['err'] == 2) {
    echo '<div class="card" style="background:#fef2f2;border-color:#fecaca;color:#991b1b;margin-bottom:14px;">'.INST_ERR_NATARS_NAME.'</div>';
}
?>
<form action="include/accounts.php" method="post" id="dataform">
  <div class="grid-2">
    <div class="card">
      <span class="f10 c"><?php echo INST_MH_ACCOUNT; ?></span>
      <div style="margin-top:12px;display:grid;gap:10px;">
        <div><label><?php echo INST_LBL_NAME; ?></label><input class="input" type="text" value="Multihunter" disabled></div>
        <div><label><?php echo INST_LBL_PASSWORD; ?></label><input class="input" type="password" name="mhpw" required></div>
      </div>
    </div>
    <div class="card">
      <span class="f10 c"><?php echo INST_SUPPORT_ACCOUNT; ?></span>
      <div style="margin-top:12px;display:grid;gap:10px;">
        <div><label><?php echo INST_LBL_NAME; ?></label><input class="input" type="text" value="Support" disabled></div>
        <div><label><?php echo INST_LBL_PASSWORD; ?></label><input class="input" type="password" name="spw" required></div>
      </div>
    </div>
  </div>

  <div class="card">
    <span class="f10 c"><?php echo INST_ADMIN_ACCOUNT; ?></span>
    <div class="grid-2" style="margin-top:12px;">
      <div><label><?php echo INST_LBL_ADMIN_NAME; ?></label><input class="input" name="aname"></div>
      <div><label><?php echo INST_LBL_ADMIN_EMAIL; ?></label><input class="input" name="aemail" type="email"></div>
      <div><label><?php echo INST_LBL_ADMIN_PASS; ?></label><input class="input" name="apass" type="password"></div>
      <div><label><?php echo INST_LBL_TRIBE; ?></label>
        <select class="input" name="atribe">
          <option value="1" selected><?php echo INST_OPT_TRIBE_ROMANS; ?></option>
          <option value="2"><?php echo INST_OPT_TRIBE_TEUTONS; ?></option>
          <option value="3"><?php echo INST_OPT_TRIBE_GAULS; ?></option>
		  <option value="6"><?php echo INST_OPT_TRIBE_HUNS; ?></option>
		  <option value="7"><?php echo INST_OPT_TRIBE_EGYPTIANS; ?></option>
		  <option value="8"><?php echo INST_OPT_TRIBE_SPARTANS; ?></option>
		  <option value="9"><?php echo INST_OPT_TRIBE_VIKINGS; ?></option>
        </select>
      </div>
      <div><label><?php echo INST_LBL_SHOW_STATS; ?></label>
        <select class="input" name="admin_rank">
          <option value="true"><?php echo INST_OPT_TRUE; ?></option>
          <option value="false" selected><?php echo INST_OPT_FALSE; ?></option>
        </select>
      </div>
      <div><label><?php echo INST_LBL_INCLUDE_SUPPORT_MSGS; ?></label>
        <select class="input" name="admin_support_msgs">
          <option value="true" selected><?php echo INST_OPT_TRUE; ?></option>
          <option value="false"><?php echo INST_OPT_FALSE; ?></option>
        </select>
      </div>
      <div><label><?php echo INST_LBL_ALLOW_RAIDABLE; ?></label>
        <select class="input" name="admin_raidable">
          <option value="true" selected><?php echo INST_OPT_TRUE; ?></option>
          <option value="false"><?php echo INST_OPT_FALSE; ?></option>
        </select>
      </div>
    </div>
    <p style="color:#64748b;font-size:12px;margin-top:12px;"><?php echo INST_ADMIN_NOTE; ?></p>
    <div style="text-align:center;margin-top:12px;">
      <button class="btn" type="submit"><?php echo INST_CREATE_ACCOUNTS; ?></button>
    </div>
  </div>
</form>