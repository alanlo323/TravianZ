<div class="card">
  <h3 style="margin:0 0 8px;font-size:16px;">⚠️ <?php echo INST_DISCLAIMER; ?></h3>
  <ul style="margin:0;padding-left:18px;line-height:1.6;color:#334155;">
    <li><?php echo INST_DISC_1; ?></li>
    <li><?php echo INST_DISC_2; ?></li>
    <li><?php echo INST_DISC_3; ?></li>
    <li><?php echo INST_DISC_4; ?></li>
    <li><?php echo INST_DISC_5; ?></li>
    <li><b><?php echo INST_DISC_6; ?></b></li>
    <li><?php echo INST_DISC_7; ?></li>
  </ul>
</div>

<div class="grid-2">
  <div class="card">
    <h3 style="margin:0 0 8px;">🐧 <?php echo INST_BEFORE_LINUX; ?></h3>
    <div style="font-family:ui-monospace;background:#0f172a;color:#e2e8f0;padding:10px;border-radius:8px;font-size:13px;">
      chmod -R 777 install<br>chmod -R 777 GameEngine
    </div>
  </div>
  <div class="card">
    <h3 style="margin:0 0 8px;">✅ <?php echo INST_AFTER_INSTALL; ?></h3>
    <div style="font-family:ui-monospace;background:#0f172a;color:#e2e8f0;padding:10px;border-radius:8px;font-size:13px;">
      rm -R install<br>
      chmod -R 755 GameEngine<br>
      chmod -R 777 GameEngine/Prevention<br>
      chmod -R 777 GameEngine/Notes<br>
      chmod -R 777 var/log
    </div>
  </div>
</div>

<div class="card">
  <b>🔒 <?php echo INST_PROTECT_ADMIN; ?></b>
</div>

<div style="text-align:center;margin-top:16px;">
  <a class="btn" href="?s=1"><?php echo INST_NEXT; ?></a>
  <div style="margin-top:8px;color:#64748b;font-size:12px;"><?php echo INST_TEAM; ?></div>
</div>
