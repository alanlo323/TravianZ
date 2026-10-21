<?php 

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       : end.tpl                                                   ##
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

include("../GameEngine/config.php"); $time=time(); @rename("../install/","../installed_".$time); @touch('../var/installed'); ?>
<div class="card" style="text-align:center;">
  <h2 style="margin:0 0 8px;">🎉 <?php echo INST_COMPLETE; ?></h2>
  <p style="color:#475569;"><?php echo INST_THANKS; ?></p>
  <div style="display:inline-block;text-align:left;background:#0f172a;color:#e2e8f0;border-radius:10px;padding:12px 16px;font-family:ui-monospace;font-size:13px;line-height:1.6;">
    rm -R install<br>
    chmod -R 755 GameEngine<br>
    chmod -R 777 GameEngine/Prevention<br>
    chmod -R 777 GameEngine/Notes<br>
    chmod -R 777 var/log
  </div>
  <div style="margin-top:16px;"><a class="btn" href="<?php echo HOMEPAGE; ?>"><?php echo INST_GO_HOME; ?></a></div>
</div>

<div class="card">
  <h3 style="margin:0 0 12px;text-align:center;">🚀 <?php echo INST_NEXT_STEPS; ?></h3>
  <div class="grid-2" style="gap:14px;">
    <div style="background:#f8fafc;border:1px solid #e5e7eb;border-radius:12px;padding:14px;">
      <b>🔒 <?php echo INST_SECURE; ?></b>
      <p style="margin:6px 0 0;color:#475569;font-size:14px;"><?php echo INST_SECURE_DESC; ?></p>
    </div>
    <div style="background:#f8fafc;border:1px solid #e5e7eb;border-radius:12px;padding:14px;">
      <b>📚 <?php echo INST_DOCS; ?></b>
      <p style="margin:6px 0 0;color:#475569;font-size:14px;"><?php echo INST_DOCS_DESC; ?></p>
    </div>
    <div style="background:#f8fafc;border:1px solid #e5e7eb;border-radius:12px;padding:14px;">
      <b>💬 <?php echo INST_COMMUNITY; ?></b>
      <p style="margin:6px 0 0;color:#475569;font-size:14px;"><?php echo INST_COMMUNITY_DESC; ?></p>
    </div>
    <div style="background:#f8fafc;border:1px solid #e5e7eb;border-radius:12px;padding:14px;">
      <b>⭐ <?php echo INST_STAR; ?></b>
      <p style="margin:6px 0 0;color:#475569;font-size:14px;"><?php echo INST_STAR_DESC; ?></p>
    </div>
  </div>
  <div style="text-align:center;margin-top:16px;display:flex;gap:10px;justify-content:center;flex-wrap:wrap;">
    <a class="btn" style="background:#0f172a;" href="https://github.com/Shadowss/TravianZ" target="_blank">GitHub</a>
    <a class="btn" style="background:#16a34a;" href="https://github.com/Shadowss/TravianZ/wiki" target="_blank">Documentation</a>
    <a class="btn" style="background:#64748b;" href="mailto:cata7007@gmail.com">Contact Support</a>
  </div>
</div>