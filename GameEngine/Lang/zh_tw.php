<?php

// tz_def(): define cu gard - nu redefineste o constanta deja setata, deci nu mai
// arunca "Constant X already defined" (warning pe fiecare request, fatal pe PHP 9).
// Gardul function_exists face fisierul auto-suficient indiferent de ordinea de
// incarcare a limbilor (LANG apoi en.php ca fallback in Session.php).
if (!function_exists('tz_def')) {
    function tz_def($k, $v) { if (!defined($k)) { define($k, $v); } }
}


//////////////////////////////////////////////////////////////////////////////////////////////////////
//                                             TRAVIANZ                                             //
//            Only for advanced users, do not edit if you dont know what are you doing!             //
//                                Made by: Dzoki & Dixie (TravianZ)                                 //
//                              - TravianZ = Travian Clone Project -                                //
//                                 DO NOT REMOVE COPYRIGHT NOTICE!                                  //
//                                Adding tasks, constructions and artefact  by: Armando             //
//                                Modified , added , fixed , implementd  by: Shadow and ronix       //
//////////////////////////////////////////////////////////////////////////////////////////////////////
									//                         //
									//   Traditional Chinese   //
									//  (zh_tw / 繁體中文)     //
									// Base: muchen.fan zh +   //
									// OpenCC s2twp; aligned   //
									// with former in-repo     //
									// zh_tw (Pickuse / TW)    //
									/////////////////////////////

//MAIN MENU
tz_def('TRIBE1', '羅馬');
tz_def('TRIBE2', '條頓');
tz_def('TRIBE3', '高盧');
tz_def('TRIBE4', '自然');
tz_def('TRIBE5', '納塔');
tz_def('TRIBE6', '野獸');

tz_def('HOME', '主頁');
tz_def('INSTRUCT', '說明');
tz_def('ADMIN_PANEL', '管理員面板');
tz_def('MH_PANEL', 'Multihunter Panel');
tz_def('MASS_MESSAGE', '群發訊息');
tz_def('LOGOUT', '登出');
tz_def('PROFILE', '檔案');
tz_def('SUPPORT', '支援');
tz_def('UPDATE_T_10', '更新前十');
tz_def('SYSTEM_MESSAGE', '系統資訊');
tz_def('TRAVIAN_PLUS', 'Travian <b><span class="plus_g">P</span><span class="plus_o">l</span><span class="plus_g">u</span><span class="plus_o">s</span></span></span></b>');
tz_def('CONTACT', '聯絡我們');
tz_def('GAME_RULES', '遊戲規則');

//MENU
tz_def('REG', '註冊');
tz_def('FORUM', '論壇');
tz_def('CHAT', '聊天');
tz_def('IMPRINT', '資訊');
tz_def('MORE_LINKS', '更多連結');
tz_def('TOUR', '觀光');


//ERRORS
tz_def('USRNM_EMPTY', '(使用者名稱為空)');
tz_def('USRNM_TAKEN', '(使用者名稱已被佔用)');
tz_def('USRNM_SHORT', '(使用者名稱最少 '.USRNM_MIN_LENGTH.' 個字元)');
tz_def('USRNM_CHAR', '(含有不可用字元)');
tz_def('PW_EMPTY', '(密碼為空)');
tz_def('PW_SHORT', '(使用者名稱最少 '.PW_MIN_LENGTH.' 個字元)');
tz_def('PW_INSECURE', '(密碼不安全，請採用更復雜的密碼)');
tz_def('EMAIL_EMPTY', '(郵箱地址為空)');
tz_def('EMAIL_INVALID', '(不可用的郵箱地址)');
tz_def('EMAIL_TAKEN', '(郵箱地址已被使用)');
tz_def('TRIBE_EMPTY', '<li>請選擇一個種族。</li>');
tz_def('AGREE_ERROR', '<li>若要註冊，請先同意遊戲規則和T&C。</li>');
tz_def('LOGIN_USR_EMPTY', '請輸入使用者名稱。');
tz_def('LOGIN_PASS_EMPTY', '請輸入密碼。');
tz_def('EMAIL_ERROR', '郵箱地址未知。');
tz_def('PASS_MISMATCH', '密碼不匹配。');
tz_def('ALLI_OWNER', '在刪除前，請先指派新盟主。');
tz_def('SIT_ERROR', '代管人已經設定或不存在。');
tz_def('USR_NT_FOUND', '使用者名稱不存在。');
tz_def('LOGIN_PW_ERROR', '密碼錯誤。');
tz_def('WEL_TOPIC', '實用訊息');
tz_def('ATAG_EMPTY', '標籤為空');
tz_def('ANAME_EMPTY', '名稱為空');
tz_def('ATAG_EXIST', '標籤已佔用');
tz_def('ANAME_EXIST', '名稱已佔用');
tz_def('ALREADY_ALLY_MEMBER', '你已經在聯盟中');
tz_def('ALLY_TOO_LOW', '你必須擁有3級或更高等級的大使館');
tz_def('USER_NOT_IN_YOUR_ALLY', '該使用者不在你的聯盟中。');
tz_def('CANT_EDIT_YOUR_PERMISSIONS', '你不能更改自己的許可權');
tz_def('CANT_EDIT_LEADER_PERMISSIONS', '盟主的許可權不能更改。');
tz_def('NO_PERMISSION', '你的許可權不夠。');
tz_def('NAME_OR_DIPL_EMPTY', '名稱或外交關係為空');
tz_def('ALLY_DOESNT_EXISTS', '聯盟不存在');
tz_def('CANNOT_INVITE_SAME_ALLY', '你不能邀請你自己的聯盟');
tz_def('WRONG_DIPLOMACY', '選擇錯誤');
tz_def('INVITE_ALREADY_SENT', '協定邀請已發出、或對方已發出邀請、或你已經與對方存在協定關係。');
tz_def('INVITE_SENT', '邀請已發出');
tz_def('DECLARED_WAR_ON', '宣告戰爭，向');
tz_def('OFFERED_NON_AGGRESION_PACT_TO', '發出互不侵略協定邀請，向');
tz_def('OFFERED_CONFED_TO', '發出聯合邀請，向');
tz_def('ALLY_TOO_MUCH_PACTS', '你不能發出更多此類協定的邀請、或聯盟已經到達簽訂此種協定數量的上限。');
tz_def('ALLY_PERMISSIONS_UPDATED', '許可權已更新');
tz_def('ALLY_FORUM_LINK_UPDATED', '論壇連結已更新');
tz_def('NO_FORUMS_YET', '目前還沒有論壇');
tz_def('ALLY_USER_KICKED', ' 已經被踢出聯盟');
tz_def('NOT_OPENED_YET', '伺服器尚未啟動');
tz_def('REGISTER_CLOSED', '註冊已關閉，你不能在此伺服器上註冊。');
tz_def('NAME_EMPTY', '請輸入名稱');
tz_def('NAME_NO_EXIST', '該名稱不存在 ');
tz_def('ID_NO_EXIST', '該ID不存在 ');
tz_def('SAME_NAME', '你不能邀請你自己');
tz_def('ALREADY_INVITED', ' 已被邀請');
tz_def('ALREADY_IN_ALLY', ' 已經在聯盟中');
tz_def('ALREADY_IN_AN_ALLY', ' 已經在其他聯盟中');
tz_def('NAME_OR_TAG_CHANGED', '名稱或標籤已被更改');
tz_def('VAC_MODE_WRONG_DAYS', '你輸入了錯誤的天數');

//COPYRIGHT
tz_def('TRAVIAN_COPYRIGHT', 'TravianZ 100% 開源 Travian 克隆。');

//BUILD.TPL
tz_def('CUR_PROD', '當前產量');
tz_def('NEXT_PROD', '產量，等級 ');
tz_def('CONSTRUCT_BUILD', '建造建築');

//DORF1
tz_def('LUMBER', '木材');
tz_def('CLAY', '黏土');
tz_def('IRON', '鐵礦');
tz_def('CROP', '糧食');
tz_def('LEVEL', '等級');
tz_def('CROP_COM', CROP.'消耗');
tz_def('PER_HR', '每小時');
tz_def('PRODUCTION', '產量');
tz_def('CAPITAL1', 'Capital');
tz_def('VILLAGES', '村民');
tz_def('ANNOUNCEMENT', '公告');
tz_def('GO2MY_VILLAGE', '返回我的村莊');
tz_def('VILLAGE_CENTER', '村莊大樓');
tz_def('FINISH_GOLD', '將使用 2 金幣瞬間完成本村的所有建築和研究佇列');
tz_def('WAITING_LOOP', '(佇列中)');
tz_def('CROP_NEGATIVE', '你的糧食產量為負，因此不可能抵達需求的糧食數目。');
tz_def('HR', 'h.');
tz_def('HRS', '(小時)');
tz_def('DONE_AT', '完成於');
tz_def('CANCEL', '取消');
tz_def('LOYALTY', '忠誠度');
tz_def('CALCULATED_IN', '響應延遲');
tz_def('HI', '嗨');
tz_def('P_IN', '在');
tz_def('MS', 'ms');
tz_def('SERVER_TIME', '伺服器時間:');
tz_def('REMAINING_GOLD', 'Remaining gold');

// HEADER && MENU && Messages && Reports
tz_def('REPORTS', "戰報");
tz_def('MESSAGES', 'Messages');
tz_def('PLUS_MENU', 'Plus menu');
tz_def('LINKS', 'Links');
tz_def('CANCEL_PROCESS', 'Cancel process');
tz_def('ACCOUNT_DELETING', 'The account will be deleted in');
tz_def('INBOX', 'Inbox');
tz_def('WRITE', 'Write');
tz_def('SENT', 'Sent');
tz_def('SEND', 'Send');
tz_def('ARCHIVE', "存檔");
tz_def('NOTES', 'Notes');
tz_def('SUBJECT', "主題");
tz_def('SENDER', 'Sender');
tz_def('RECIPIENT', 'Recipient');
tz_def('BACK', 'Back');
tz_def('NEW', 'new');
tz_def('UNREAD', 'unread');
tz_def('NO_MESS', 'There are no messages available');
tz_def('NO_MESS_IN_ARCHIVE', NO_MESS.' in the archive');
tz_def('NO_MESS_SENT', 'There are no sent messages available');
tz_def('MESS_FOR_SUP', 'Message for Support');
tz_def('MESS_FOR_MH', 'Message for Multihunter');
tz_def('SEND_AS_SUP', 'Send as Support');
tz_def('SEND_AS_MH', 'Send as Multihunter');
tz_def('SAVE', 'Save');
tz_def('ANSWER', 'Answer');
tz_def('REPLY', 'Reply');
tz_def('ADDRESSBOOK', 'Addressbook');
tz_def('CLOSE_ADDRESSBOOK', 'Close Addressbook');
tz_def('ONLINE_S1', 'Now online');
tz_def('ONLINE_S2', 'Offline');
tz_def('ONLINE_S3', 'Last 3 days');
tz_def('ONLINE_S4', 'Last 7 days');
tz_def('ONLINE_S5', 'Inactive');
tz_def('WAIT_FOR_CONFIRM', 'Wait for confirm');
tz_def('CONFIRM', 'Confirm');
tz_def('WRITE_MESS_WARN', '<b>Warning:</b> you can&#39;t use the values <b>[message]</b> or <b>[/message]</b> in your message because it can cause problem with bbcode system');
tz_def('NO_REPORTS', "暫無可用戰報");
tz_def('ATTACKER', 'Attacker');
tz_def('NATAR_COUNTERFORCE', 'Natar Counterforce');
tz_def('FROM_THE_VILL', "來自村莊");
tz_def('CASUALTIES', 'Casualties');
tz_def('INFORMATION', 'Information');
tz_def('CARRY', 'carry');
tz_def('DEFENDER', 'Defender');
tz_def('VISITED', 'visited');
tz_def('HIS_TROOPS', '&#39;s troops');
tz_def('WISHES_YOU', 'wishes you');
tz_def('X_MAS', 'Merry Christmas');
tz_def('NEW_YEAR', 'Happy New Year');
tz_def('EASTER', 'Happy Easter');
tz_def('PEACE', 'Peace');

tz_def('GOLD', '金幣');
tz_def('GOLD_IMG', '<img src=\"/img/x.gif\" class=\"gold\" alt=\"'.GOLD.'\" title=\"'.GOLD.'\">');

//QUEST
tz_def('Q_CONTINUE', '繼續下一個任務。');
tz_def('Q_REWARD', '你的獎勵:');
tz_def('Q_BUTN', '完成任務');
tz_def('Q0', '歡迎來到');
tz_def('Q0_DESC', '嘿，看起來你就是這座小村莊的首領。在剛開始的這段時間裡我來指導你如何發展你的部落。');
tz_def('Q0_OPT1', '開始任務');
tz_def('Q0_OPT2', '我想自己看看');
tz_def('Q0_OPT3', '跳過任務');

tz_def('Q1', '任務 1: 伐木場');
tz_def('Q1_DESC', '你的村莊裡有四片綠色的森林。在一片森林中建造一個伐木場，因為木材是我們新聚居點的重要資源。');
tz_def('Q1_ORDER', '目標:</p>建造一個伐木場。');
tz_def('Q1_RESP', '就是這樣，現在村莊能生產更多木材了。我幫點小忙，把建造瞬間完成。');
tz_def('Q1_REWARD', '伐木場瞬間建造完成。');

tz_def('Q2', '任務 2: 糧食');
tz_def('Q2_DESC', '你的人民辛勤勞作，他們的伙食保障至關重要。開發一片農田來滿足糧食需求。當建築完成了再回來。');
tz_def('Q2_ORDER', '目標:</p>開發一片農田。');
tz_def('Q2_RESP', '很好，你的人民吃得飽飯了。');
tz_def('Q2_REWARD', '你的獎勵:</p>1 天 Travian');

tz_def('Q3', '任務 3: 你村莊的名字');
tz_def('Q3_DESC', 'Creative as you are you can grant your village the ultimate name.<br><br>Click on &#39;profile&#39; in the left hand menu and then select &#39;change profile&#39;...');
tz_def('Q3_ORDER', 'Order:</p>Change your village&#39;s name to something nice.');
tz_def('Q3_RESP', 'Wow, a great name for their village. It could have been the name of my village!...');

tz_def('Q4', '任務 4: Other Players');
tz_def('Q4_DESC', 'In '.SERVER_NAME.' you play along with billions of other players. Click &#39;statistics&#39; in the top menu to look up your rank and enter it here.');
tz_def('Q4_ORDER', 'Order:</p>Look for your rank in the statistics and enter it here.');
tz_def('Q4_BUTN', 'complete task');
tz_def('Q4_RESP', 'Exactly! That&#39;s your rank.');

tz_def('Q5', '任務 5: Two Building Orders');
tz_def('Q5_DESC', 'Build an iron mine and a clay pit. Of iron and clay one can never have enough.');
tz_def('Q5_ORDER', 'Order:</p><ul><li>Extend one iron mine.</li><li>Extend one clay pit.</li></ul>');
tz_def('Q5_RESP', 'As you noticed, building orders take rather long. The world of '.SERVER_NAME.' will continue to spin even if you are offline. Even in a few months there will be many new things for you to discover.<br><br>The best thing to do is occasionally checking your village and giving you subjects new tasks to do.');

tz_def('Q6', '任務 6: Messages');
tz_def('Q6_DESC', 'You can talk to other players using the messaging system. I sent a message to you. Read it and come back here.<br><br>P.S. Don&#39;t forget: on the left the reports, on the right the messages.');
tz_def('Q6_ORDER', 'Order:</p>Read your new message.');
tz_def('Q6_RESP', 'You received it? Very good.<br><br>Here is some Gold. With Gold you can do several things, e.g. extend your   in the left hand menu.');
tz_def('Q6_RESP1', '-Account or increase your resource production.To do so click ');
tz_def('Q6_RESP2', 'in the left hand menu.');
tz_def('Q6_SUBJECT', 'Message From The Taskmaster');
tz_def('Q6_MESSAGE', 'You are to be informed that a nice reward is waiting for you at the taskmaster.<br><br>Hint: The message has been generated automatically. An answer is not necessary.');

tz_def('Q7', '任務 7: One Each!');
tz_def('Q7_DESC', 'Now we should increase your resource production a bit. Build an additional woodcutter, clay pit, iron mine and cropland to level 1.');
tz_def('Q7_ORDER', 'Order:</p>Extend one more of each resource tile to level 1.');
tz_def('Q7_RESP', 'Very good, great develop of resources production.');

tz_def('Q8', '任務 8: Huge Army!');
tz_def('Q8_DESC', 'Now I&#39;ve got a very special quest for you. I am hungry. Give me 200 crop!<br><br>In return I will try to organize a huge army to protect your village.');
tz_def('Q8_ORDER', 'Order:</p>Send 200 crop to the taskmaster.');
tz_def('Q8_BUTN', 'Send crop');
tz_def('Q8_NOCROP', 'No Enough Crop!');

tz_def('Q9', '任務 9: Everything to 1.');
tz_def('Q9_DESC', 'In Travian there is always something to do! While you are waiting for incoming the huge army, Now we should increase your resource production a bit. Extend all your resource tiles to level 1.');
tz_def('Q9_ORDER', 'Order:</p>Extend all resource tiles to level 1.');
tz_def('Q9_RESP', 'Very good, your resource production just thrives.<br><br>Soon we can start with constructing buildings in the village.');

tz_def('Q10', '任務 10: Dove of Peace');
tz_def('Q10_DESC', 'The first days after signing up you are protected against attacks by your fellow players. You can see how long this protection lasts by adding the code <b>[#0]</b> to your profile.');
tz_def('Q10_ORDER', 'Order:</p>Write the code <b>[#0]</b> into your profile by adding it to one of the two description fields.');
tz_def('Q10_RESP', 'Well done! Now everyone can see what a great warrior the world is approached by.');
tz_def('Q10_REWARD', 'Your reward:</p>2 day Travian');

tz_def('Q11', '任務 11: Neighbours!');
tz_def('Q11_DESC', 'Around you, there are many different villages. One of them is named. ');
tz_def('Q11_DESC1', ' Click on &#39;map&#39; in the header menu and look for that village. The name of your neighbours&#39; villages can be seen when hovering your mouse over any of them.');
tz_def('Q11_ORDER', 'Order:</p>Look for the coordinates of ');
tz_def('Q11_ORDER1', 'and enter them here.');
tz_def('Q11_RESP', 'Exactly, there ');
tz_def('Q11_RESP1', ' Village! As many resources as you reach this village. Well, almost as much ...');
tz_def('Q11_BUTN', 'complete task');

tz_def('Q12', '任務 12: Cranny');
tz_def('Q12_DESC', 'It&#39;s getting time to erect a cranny. The world of '.SERVER_NAME.' is dangerous.<br><br>Many players live by stealing other players&#39; resources. Build a cranny to hide some of your resources from enemies.');
tz_def('Q12_ORDER', 'Order:</p>Construct a Cranny.');
tz_def('Q12_RESP', 'Well done, now it&#39;s way harder for your mean fellow players to plunder your village.<br><br>If under attack, your villagers will hide the resources in the Cranny all on their own.');

tz_def('Q13', '任務 13: To Two.');
tz_def('Q13_DESC', 'In '.SERVER_NAME.' there is always something to do! Extend one woodcutter, one clay pit, one iron mine and one cropland to level 2 each.');
tz_def('Q13_ORDER', 'Order:</p>Extend one of each resource tile to level 2.');
tz_def('Q13_RESP', 'Very good, your village grows and thrives!');

tz_def('Q14', '任務 14: Instructions');
tz_def('Q14_DESC', 'In the ingame instructions you can find short information texts about different buildings and types of units.<br><br>Click on &#39;instructions&#39; at the left to find out how much lumber is required for the barracks.');
tz_def('Q14_ORDER', 'Order:</p>Enter how much lumber barracks cost');
tz_def('Q14_BUTN', 'complete task');
tz_def('Q14_RESP', 'Exactly! Barracks cost 210 lumber.');

tz_def('Q15', '任務 15: Main Building');
tz_def('Q15_DESC', 'Your master builders need a main building level 3 to erect important buildings such as the marketplace or barracks.');
tz_def('Q15_ORDER', 'Order:</p>Extend your main building to level 3.');
tz_def('Q15_RESP', 'Well done. The main building level 3 has been completed.<br><br>With this upgrade your master builders cannot only construct more types of buildings but also do so faster.');

tz_def('Q16', '任務 16: Advanced!');
tz_def('Q16_DESC', 'Look up your rank in the player statistics again and enjoy your progress.');
tz_def('Q16_ORDER', 'Order:</p>Look for your rank in the statistics and enter it here.');
tz_def('Q16_RESP', 'Well done! That&#39;s your current rank.');

tz_def('Q17', '任務 17: Weapons or Dough');
tz_def('Q17_DESC', 'Now you have to make a decision: Either trade peacefully or become a dreaded warrior.<br><br>For the marketplace you need a granary, for the barracks you need a rally point.');
tz_def('Q17_BUTN', 'Economy');
tz_def('Q17_BUTN1', 'Military');

tz_def('Q18', '任務 18: Military');
tz_def('Q18_DESC', 'A brave decision. To be able to send troops you need a rally point.<br><br>The rally point must be built on a specific building site. The ');
tz_def('Q18_DESC1', ' building site.');
tz_def('Q18_DESC2', ' is located on the right side of the main building, slightly below it. The building site itself is curved.');
tz_def('Q18_ORDER', 'Order:</p>Construct a rally point.');
tz_def('Q18_RESP', 'Your rally point has been erected! A good move towards world domination!');

tz_def('Q19', '任務 19: Barracks');
tz_def('Q19_DESC', 'Now you have a main building level 3 and a rally point. That means that all prerequisites for building barracks have been fulfilled.<br><br>You can use the barracks to train troops for fighting.');
tz_def('Q19_ORDER', 'Order:</p>Construct barracks.');
tz_def('Q19_RESP', 'Well done... The best instructors from the whole country have gathered to train your men\u2019s fighting skills to top form.');

tz_def('Q20', '任務 20: Train.');
tz_def('Q20_DESC', 'Now that you have barracks you can start training troops. Train two ');
tz_def('Q20_ORDER', 'Please train 2 ');
tz_def('Q20_RESP', 'The foundation for your glorious army has been laid.<br><br>Before sending your army off to plunder you should check with the.');
tz_def('Q20_RESP1', 'Combat Simulator');
tz_def('Q20_RESP2', 'to see how many troops you need to successfully fight one rat without losses.');

tz_def('Q21', '任務 18: Economy');
tz_def('Q21_DESC', 'Trade & Economy was your choice. Golden times await you for sure!');
tz_def('Q21_ORDER', 'Order:</p>Construct a Granary.');
tz_def('Q21_RESP', 'Well done! With the Granary you can store more wheat.');

tz_def('Q22', '任務 19: Warehouse');
tz_def('Q22_DESC', 'Not only Crop has to be saved. Other resources can go to waste as well if they are not stored correctly. Construct a Warehouse!');
tz_def('Q22_ORDER', 'Order:</p>Construct Warehouse.');
tz_def('Q22_RESP', ';Well done, your Warehouse is complete...&rdquo;</i><br>Now you have fulfilled all prerequisites required to construct a Marketplace.');

tz_def('Q23', '任務 20: Marketplace.');
tz_def('Q23_DESC', ';Construct a Marketplace so you can trade with your fellow players.');
tz_def('Q23_ORDER', 'Order:</p>Please build a Marketplace.');
tz_def('Q23_RESP', ';The Marketplace has been completed. Now you can make offers of your own and accept foreign offers! When creating your own offers, you should think about offering what other players need most to get more profit.');

tz_def('Q24', '任務 21: Everything to 2.');
tz_def('Q24_DESC', 'Now we should increase your resource production a bit. Build an additional woodcutter, clay pit, iron mine and cropland to level 1.');
tz_def('Q24_ORDER', 'Order:</p>Extend all resource tiles to level 2.');
tz_def('Q24_RESP', 'Congratulations! Your village grows and thrives...');

tz_def('Q28', '任務 22: Alliance.');
tz_def('Q28_DESC', 'Teamwork is important in Travian. Players who work together organise themselves in alliances. Get an invitation from an alliance in your region and join this alliance. Alternatively, you can found your own alliance. To do this, you need a level 3 embassy.');
tz_def('Q28_ORDER', 'Order:</p>Join an alliance or found one on your own.');
tz_def('Q28_RESP', 'Is good! Now you&#39;re in a union called');
tz_def('Q28_RESP1', ', and you&#39;re a member of their alliance with the faster you&#39;ll progress...');

tz_def('Q29', '任務 23: Main Building to Level 5');
tz_def('Q29_DESC', 'To be able to build a palace or residence, you will need a main building at level 5.');
tz_def('Q29_ORDER', 'Order:</p>Upgrade your main building to level 5.');
tz_def('Q29_RESP', 'The main building is level 5 now and you can build palace or residence...');

tz_def('Q30', '任務 24: Granary to Level 3.');
tz_def('Q30_DESC', 'That you do not lose crop, you should upgrade your granary.');
tz_def('Q30_ORDER', 'Order:</p>Upgrade your granary to level 3.');
tz_def('Q30_RESP', 'Granary is level 3 now...');

tz_def('Q31', '任務 25: Warehouse to Level 7');
tz_def('Q31_DESC', ' To make sure your resources won&#39;t overflow, you should upgrade your warehouse.');
tz_def('Q31_ORDER', 'Order:</p>Upgrade your warehouse to level 7.');
tz_def('Q31_RESP', 'Warehouse has upgraded to level 7...');

tz_def('Q32', '任務 26: All to five!');
tz_def('Q32_DESC', 'You will always need more resources. Resource tiles are quite expensive but will always pay out in the long term.');
tz_def('Q32_ORDER', 'Order:</p>Upgrade all resources tiles to level 5.');
tz_def('Q32_RESP', 'All resources are at level 5, very good, your village grows and thrives!');

tz_def('Q33', '任務 27: Palace or Residence?');
tz_def('Q33_DESC', 'To found a new village, you will need settlers. Those you can train in either a palace or a residence.');
tz_def('Q33_ORDER', 'Order:</p>Build a palace or residence to level 10.');
tz_def('Q33_RESP', 'had reached to level 10, you can now train settlers and found your second village. Notice the cultural points...');

tz_def('Q34', '任務 28: 3 settlers.');
tz_def('Q34_DESC', 'To found a new village, you will need settlers. They can be trained  in either a palace or a residence.');
tz_def('Q34_ORDER', 'Order:</p>Train 3 settlers.');
tz_def('Q34_RESP', '3 settlers were trained. To found new village you need at least');
tz_def('Q34_RESP1', 'culture points...');

tz_def('Q35', '任務 29: New Village.');
tz_def('Q35_DESC', 'There are a lot of empty tiles on the map. Find one that suits you and found a new village');
tz_def('Q35_ORDER', 'Order:</p>Found a new village.');
tz_def('Q35_RESP', 'I am proud of you! Now you have two villages and have all the possibilities to build a mighty empire. I wish you luck with this.');

tz_def('Q36', ' 任務 30: Build a ');
tz_def('Q36_DESC', 'Now that you have trained some soldiers, you should build a ');
tz_def('Q36_DESC1', ' too. It increases the base defence and your soldiers will receive a defensive bonus.');
tz_def('Q36_ORDER', 'Order:</p>Build a ');
tz_def('Q36_RESP', 'That&#39;s what I&#39;m talking about. A ');
tz_def('Q36_RESP1', ' Very useful. It increases the defence of the troops in the village.');

tz_def('Q37', 'Tasks');
tz_def('Q37_DESC', 'All tasks achieved!');

tz_def('RESOURCES_OVERVIEW', 'Resource overview');
tz_def('YOUR_RES_DELIVERIES', 'Your resource deliveries');
tz_def('DELIVERY', 'Delivery');
tz_def('DELIVERY_TIME', 'Delivery time');
tz_def('STATUS', 'Status');
tz_def('FETCH', 'fetch');
tz_def('FETCHED', 'fetched');
tz_def('ON_HOLD', 'on hold');
tz_def('ONE_DAY_OF_TRAVIAN', '1 day Travian ');
tz_def('TWO_DAYS_OF_TRAVIAN', '2 days Travian ');

//Quest 25
tz_def('Q25_7', '任務 7: Neighbours!');
tz_def('Q25_7_DESC', 'Around you, there are many different villages. One of them is named. ');
tz_def('Q25_7_DESC1', 'Click &#39;Map&#39; in the head menu and look for that village. The name of your neighbours&#39; villages can be seen once you hover your mouse over any of them.');
tz_def('Q25_7_ORDER', '</p><b>Order:</b><br>Look for the coordinates of ');
tz_def('Q25_7_ORDER1', 'and enter them here.');
tz_def('Q25_7_RESP', 'Exactly, there ');
tz_def('Q25_7_RESP1', ' Village! As many resources as you reach this village. Well, almost as much ...');

tz_def('Q25_8', '任務 8: Huge Army!');
tz_def('Q25_8_DESC', 'Now I&#39;ve got a very special Quest for you. I am hungry. Give me 200 crop!<br><br>In return I will try to organize a huge army to protect your village.');
tz_def('Q25_8_ORDER', 'Order:</p>Send 200 crop to the taskmaster.');
tz_def('Q25_8_BUTN', 'Send crop');
tz_def('Q25_8_NOCROP', 'No Enough Crop!');

tz_def('Q25_9', '任務 9: One each!');
tz_def('Q25_9_DESC', 'In '.SERVER_NAME.' there is always something to do! While you are waiting for your new army,<br><br>extend one additional woodcutter, clay pit, iron mine and cropland to level 1');
tz_def('Q25_9_ORDER', 'Order:</p>Extend one more of each resource tile to level 1.');
tz_def('Q25_9_RESP', 'Very good, great development of resource production.');

tz_def('Q25_10', '任務 10: Comming Soon!');
tz_def('Q25_10_DESC', 'Now there is time for a small break until the gigantic army I sent you arrives.<br><br>Until then you can explore the map or extend a few resource tiles.');
tz_def('Q25_10_ORDER', 'Order:</p>Wait for the taskmaster&#39;s army to arrive');
tz_def('Q25_10_RESP', 'Now a huge army from taskmaster has arrive to protect your village');
tz_def('Q25_10_REWARD', 'Your reward:</p>2 days more of Travian');

tz_def('Q25_11', '任務 11: Reports');
tz_def('Q25_11_DESC', 'Every time something important happens to your account you will receive a report.<br><br>You can see these by clicking on the left half of the 5th button (from left to right). Read the report and come back here.');
tz_def('Q25_11_ORDER', 'Order:</p>Read your latest report.');
tz_def('Q25_11_RESP', 'You received it? Very good. Here is your reward.');

tz_def('Q25_12', '任務 12: Everything to 1.');
tz_def('Q25_12_DESC', 'Now we should increase your resource production a bit.');
tz_def('Q25_12_ORDER', 'Order:</p>Extend all resource tiles to level 1.');
tz_def('Q25_12_RESP', 'Very good, your resource production just thrives.<br><br>Soon we can start with constructing buildings in the village.');

tz_def('Q25_13', '任務 13: Dove of Peace');
tz_def('Q25_13_DESC', 'The first days after signing up you are protected against attacks by your fellow players. You can see how long this protection lasts by adding the code <b>[#0]</b> to your profile.');
tz_def('Q25_13_ORDER', 'Order:</p>Write the code <b>[#0]</b> into your profile by adding it to one of the two description fields.');
tz_def('Q25_13_RESP', 'Well done! Now everyone can see what a great warrior the world is approached by.');

tz_def('Q25_14', '任務 14: Cranny');
tz_def('Q25_14_DESC', 'It&#39;s getting time to erect a cranny. The world of <b>'.SERVER_NAME.'</b> is dangerous.<br><br>Many players live by stealing other players&#39; resources. Build a cranny to hide some of your resources from enemies.');
tz_def('Q25_14_ORDER', 'Order:</p>Construct a Cranny.');
tz_def('Q25_14_RESP', 'Well done, now it&#39;s way harder for your mean fellow players to plunder your village.<br><br>If under attack, your villagers will hide the resources in the Cranny all on their own.');

tz_def('Q25_15', '任務 15: To Two.');
tz_def('Q25_15_DESC', 'In <b>'.SERVER_NAME.'</b> there is always something to do! Extend one woodcutter, one clay pit, one iron mine and one cropland to level 2 each.');
tz_def('Q25_15_ORDER', 'Order:</p>Extend one of each resource tile to level 2.');
tz_def('Q25_15_RESP', 'Very good, your village grows and thrives!');

tz_def('Q25_16', '任務 16: Instructions');
tz_def('Q25_16_DESC', 'In the ingame instructions you can find short information texts about different buildings and types of units.<br><br>Click on &#39;instructions&#39; at the left to find out how much lumber is required for the barracks.');
tz_def('Q25_16_ORDER', 'Order:</p>Enter how much lumber barracks cost');
tz_def('Q25_16_BUTN', 'complete task');
tz_def('Q25_16_RESP', 'Exactly! Barracks cost 210 lumber.');

tz_def('Q25_17', '任務 17: Main Building');
tz_def('Q25_17_DESC', 'Your master builders need a main building level 3 to erect important buildings such as the marketplace or barracks.');
tz_def('Q25_17_ORDER', 'Order:</p>Extend your main building to level 3.');
tz_def('Q25_17_RESP', 'Well done. The main building level 3 has been completed.<br><br>With this upgrade your master builders can construct more types of buildings and also do so faster.');

tz_def('Q25_18', '任務 18: Advanced!');
tz_def('Q25_18_DESC', 'Look up your rank in the player statistics again and enjoy your progress.');
tz_def('Q25_18_ORDER', 'Order:</p>Look for your rank in the statistics and enter it here.');
tz_def('Q25_18_RESP', 'Well done! That&#39;s your current rank.');

tz_def('Q25_19', '任務 19: Weapons or Dough');
tz_def('Q25_19_DESC', 'Now you have to make a decision: Either trade peacefully or become a dreaded warrior.<br><br>For the marketplace you need a granary, for the barracks you need a rally point.');
tz_def('Q25_19_BUTN', 'Economy');
tz_def('Q25_19_BUTN1', 'Military');

tz_def('Q25_20', '任務 19: Economy');
tz_def('Q25_20_DESC', 'Trade & Economy was your choice. Golden times await you for sure!');
tz_def('Q25_20_ORDER', 'Order:</p>Construct a Granary.');
tz_def('Q25_20_RESP', 'Well done! With the Granary you can store more wheat.');

tz_def('Q25_21', '任務 20: Warehouse');
tz_def('Q25_21_DESC', 'Not only Crop has to be saved. Other resources can go to waste as well if they are not stored correctly. Construct a Warehouse!');
tz_def('Q25_21_ORDER', 'Order:</p>Construct Warehouse.');
tz_def('Q25_21_RESP', ';Well done, your Warehouse is complete...&rdquo;</i><br>Now you have fulfilled all prerequisites required to construct a Marketplace.');

tz_def('Q25_22', '任務 21: Marketplace.');
tz_def('Q25_22_DESC', ';Construct a Marketplace so you can trade with your fellow players.');
tz_def('Q25_22_ORDER', 'Order:</p>Please build a Marketplace.');
tz_def('Q25_22_RESP', 'The Marketplace has been completed. Now you can make offers of your own and accept foreign offers! When creating your own offers, you should think about offering what other players need most to get more profit.');

tz_def('Q25_23', '任務 19: Military');
tz_def('Q25_23_DESC', 'A brave decision. To be able to send troops you need a rally point.<br><br>The rally point must be built on a specific building site. The ');
tz_def('Q25_23_DESC1', ' building site.');
tz_def('Q25_23_DESC2', ' is located on the right side of the main building, slightly below it. The building site itself is curved.');
tz_def('Q25_23_ORDER', 'Order:</p>Construct a rally point.');
tz_def('Q25_23_RESP', 'Your rally point has been erected! A good move towards world domination!');

tz_def('Q25_24', '任務 20: Barracks');
tz_def('Q25_24_DESC', 'Now you have a main building level 3 and a rally point. That means that all prerequisites for building barracks have been fulfilled.<br><br>You can use the barracks to train troops for fighting.');
tz_def('Q25_24_ORDER', 'Order:</p>Construct barracks.');
tz_def('Q25_24_RESP', 'Well done... The best instructors from the whole country have gathered to train your men\u2019s fighting skills to top form.');

tz_def('Q25_25', '任務 21: Train.');
tz_def('Q25_25_DESC', 'Now that you have barracks you can start training troops. Train two ');
tz_def('Q25_25_ORDER', 'Please train 2 ');
tz_def('Q25_25_RESP', 'The foundation for your glorious army has been laid.<br><br>Before sending your army off to plunder you should check with the');
tz_def('Q25_25_RESP1', 'Combat Simulator');
tz_def('Q25_25_RESP2', 'to see how many troops you need to successfully fight one rat without losses.');

tz_def('Q25_26', '任務 22: Everything to 2.');
tz_def('Q25_26_DESC', 'Now it&#39;s time again to extend the cornerstones of might and wealth! This time level 1 is not enough... it will take a while but in the end it will be worth it. Extend all your resource tiles to level 2!');
tz_def('Q25_26_ORDER', 'Order:</p>Extend all resource tiles to level 2.');
tz_def('Q25_26_RESP', 'Congratulations! Your village grows and thrives...');

tz_def('Q25_27', '任務 23: Friends.');
tz_def('Q25_27_DESC', 'As single player it is hard to compete with attackers. It is to your advantage if your neighbours like you.<br><br>It is even better if you play together with friends. Did you know that you can earn '.GOLD_IMG.' by inviting friends?');
tz_def('Q25_27_ORDER', 'Order:</p>How much '.GOLD_IMG.' do you earn for inviting a friend?');
tz_def('Q25_27_RESP', 'Correct! You get 50 '.GOLD_IMG.' if your invited friend have 2 village.');

tz_def('Q25_28', '任務 24: Construct Embassy.');
tz_def('Q25_28_DESC', 'The world of Travian is dangerous. You already built a cranny to protect you against attackers.<br><br>A good alliance will give you even better protection.');
tz_def('Q25_28_ORDER', 'Order:</p>To accept invitations from alliances, build an embassy.');
tz_def('Q25_28_RESP', 'Yes! You can wait invitation from an alliance or create you own if embassy has level 3');

tz_def('Q25_29', '任務 25: Alliance.');
tz_def('Q25_29_DESC', 'Teamwork is important in Travian. Players who work together organise themselves in alliances. Get an invitation from an alliance in your region and join this alliance. Alternatively, you can found your own alliance. To do this, you need a level 3 embassy.');
tz_def('Q25_29_ORDER', 'Order:</p>Join an alliance or found your own alliance.');
tz_def('Q25_29_RESP', 'Well done! Now you&#39;re in a union called');
tz_def('Q25_29_RESP1', ', and you&#39;re a member of their alliance.<br>Working together you will all progress faster...');

tz_def('Q25_30', '任務');
tz_def('Q25_30_DESC', '所有任務都已經完成!');


//======================================================//
//================ UNITS - DO NOT EDIT! ================//
//======================================================//
tz_def('U0', '英雄');

//ROMAN UNITS
tz_def('U1', '古羅馬步兵');
tz_def('U2', '禁衛兵');
tz_def('U3', '帝國兵');
tz_def('U4', '使節騎士');
tz_def('U5', '帝國騎士');
tz_def('U6', '將軍騎士');
tz_def('U7', '攻城錘');
tz_def('U8', '火焰投石機');
tz_def('U9', '參議員');
tz_def('U10', '拓荒者');

//TEUTON UNITS
tz_def('U11', '棍棒兵');
tz_def('U12', '矛兵');
tz_def('U13', '斧頭兵');
tz_def('U14', '探子');
tz_def('U15', '遊騎兵');
tz_def('U16', '條頓騎士');
tz_def('U17', '衝車');
tz_def('U18', '簡易投石機');
tz_def('U19', '司令官');
tz_def('U20', '拓荒者');

//GAUL UNITS
tz_def('U21', '方陣兵');
tz_def('U22', '劍客');
tz_def('U23', '尋路者');
tz_def('U24', '雷法師');
tz_def('U25', '德魯伊騎兵');
tz_def('U26', '海頓騎士');
tz_def('U27', '衝車');
tz_def('U28', '投石機');
tz_def('U29', '族長');
tz_def('U30', '拓荒者');
tz_def('U99', '陷阱');

//NATURE UNITS
tz_def('U31', '老鼠');
tz_def('U32', '蜘蛛');
tz_def('U33', '蛇');
tz_def('U34', '蝙蝠');
tz_def('U35', '野豬');
tz_def('U36', '狼');
tz_def('U37', '熊');
tz_def('U38', '鱷魚');
tz_def('U39', '老虎');
tz_def('U40', '大象');

//NATARS UNITS
tz_def('U41', '長槍兵');
tz_def('U42', '荊棘戰士');
tz_def('U43', '禁衛兵');
tz_def('U44', '獵鷹');
tz_def('U45', '斧頭騎兵');
tz_def('U46', '納塔騎士');
tz_def('U47', '戰象');
tz_def('U48', '射石機');
tz_def('U49', '納塔帝王');
tz_def('U50', '納塔拓荒者');

//MONSTER UNITS
tz_def('U51', 'Monster Peon');
tz_def('U52', 'Monster Hunter');
tz_def('U53', 'Monster Warrior');
tz_def('U54', 'Ghost');
tz_def('U55', 'Monster Steed');
tz_def('U56', 'Monster War Steed');
tz_def('U57', 'Monster Ram');
tz_def('U58', 'Monster Catapult');
tz_def('U59', 'Monster Chief');
tz_def('U60', 'Monster Settler');

//INDEX.php
tz_def('LOGIN', '登入');
tz_def('PLAYERS', '玩家');
tz_def('MODERATOR', '管理員');
tz_def('ACTIVE', '活躍');
tz_def('ONLINE', '線上');
tz_def('TUTORIAL', '教程');
tz_def('FAQ', 'Faq');
tz_def('SPIELREGELN', 'Game Rules');
tz_def('PLAYER_STATISTICS', '玩家資料');
tz_def('TOTAL_PLAYERS', '共有 '.PLAYERS.' 名玩家');
tz_def('ACTIVE_PLAYERS', '活躍玩家');
tz_def('ONLINE_PLAYERS', PLAYERS.' 玩家線上');
tz_def('MP_STRATEGY_GAME', SERVER_NAME.' - 多人線上策略遊戲');
tz_def('WHAT_IS', SERVER_NAME.' 是風靡全世界的網頁遊戲。 作為 '.SERVER_NAME.' 的一員，你將建立你自己的帝國、組建強大的軍隊、與你的盟友並肩作戰並最終稱霸世界。');
tz_def('REGISTER_FOR_FREE', '在此免費註冊!');
tz_def('LATEST_GAME_WORLD', '最新遊戲世界');
tz_def('LATEST_GAME_WORLD2', 'Register on the latest<br>game world and enjoy<br>the advantages of<br>being one of the<br>first players.');
tz_def('PLAY_NOW', 'Play '.SERVER_NAME.' now');
tz_def('LEARN_MORE', '瞭解更多 <br>有關 '.SERVER_NAME.'!');
tz_def('LEARN_MORE2', 'Now with a revolutionised<br>server system, completely new<br>graphics <br>This clone is The Shiz!');
tz_def('COMUNITY', 'Community');
tz_def('BECOME_COMUNITY', 'Become part of our community now!');
tz_def('BECOME_COMUNITY2', 'Become a part of one of<br>the biggest gaming<br>communities in the<br>world.');
tz_def('NEWS', '新聞');
tz_def('SCREENSHOTS', '遊戲截圖');
tz_def('FAQ', 'FAQ');
tz_def('SPIELREGELN', '規則');
tz_def('AGB', '條款宣告');
tz_def('LEARN1', 'Upgrade your fields and mines to increase your resource production. You will need resources to construct buildings and train soldiers.');
tz_def('LEARN2', 'Construct and expand the buildings in your village. Buildings improve your overall infrastructure, increase your resource production and allow you to research, train and upgrade your troops.');
tz_def('LEARN3', 'View and interact with your surroundings. You can make new friends or new enemies, make use of the nearby oases and observe as your empire grows and becomes stronger.');
tz_def('LEARN4', 'Follow your improvement and success and compare yourself to other players. Look at the Top 10 rankings and fight to win a weekly medal.');
tz_def('LEARN5', 'Receive detailed reports about your adventures, trades and battles. Don&#39;t forget to check the brand new reports about the happenings taking place in your surroundings.');
tz_def('LEARN6', 'Exchange information and conduct diplomacy with other players. Always remember that communication is the key to winning new friends and solving old conflicts.');
tz_def('LOGIN_TO', '登入至 '.SERVER_NAME);
tz_def('REGIN_TO', '註冊於 '.SERVER_NAME);
tz_def('P_ONLINE', '線上玩家: ');
tz_def('P_TOTAL', '所有玩家: ');
tz_def('CHOOSE', '請選擇一個伺服器');
tz_def('STARTED', ' 伺服器啟動於 '.round((time() - COMMENCE) / 86400).' 天前。');

//ANMELDEN.php
tz_def('NICKNAME', '暱稱');
tz_def('EMAIL', '郵箱');
tz_def('PASSWORD', '密碼');
tz_def('NW', '西北');
tz_def('NE', '東北');
tz_def('SW', '西南');
tz_def('SE', '東南');
tz_def('RANDOM', '隨機');
tz_def('ACCEPT_RULES', ' 我接受遊戲規則和條約條款。');
tz_def('ONE_PER_SERVER', '每位玩家在一個伺服器上至多隻能擁有1個賬號。');
tz_def('BEFORE_REGISTER', '在註冊賬號前你應閱讀 Travian <a href="/anleitung.php" target="_blank">遊戲指南</a> 來了解三個種族各自的優勢和劣勢。');
tz_def('BUILDING_UPGRADING', '建造中:');
tz_def('HOURS', '小時');


//ATTACKS ETC.
tz_def('TROOP_MOVEMENTS', '行軍中:');
tz_def('ARRIVING_REINF_TROOPS', '到來的增援部隊');
tz_def('ARRIVING_ATTACKING_TROOPS', '到來的進攻部隊');
tz_def('ARRIVING_REINF_TROOPS_SHORT', '增援');
tz_def('OWN_ATTACKING_TROOPS', '己方進攻部隊');
tz_def('ATTACK', '進攻');
tz_def('OWN_REINFORCING_TROOPS', '己方增援部隊');
tz_def('NEWVILLAGE', '新村莊');
tz_def('FOUNDNEWVILLAGE', '建立新村莊');
tz_def('UNDERATTACK', '村莊遭受攻擊');
tz_def('OASISATTACK', '綠洲遭受攻擊');
tz_def('OASISATTACKS', '綠洲攻擊');
tz_def('RETURNFROM', '返回自');
tz_def('REINFORCEMENTFOR', '增援至');
tz_def('ATTACK_ON', '進攻至');
tz_def('RAID_ON', '掠奪至');
tz_def('SCOUTING', '偵查');
tz_def('PRISONERS', '俘虜');
tz_def('PRISONERSIN', '俘虜在');
tz_def('PRISONERSFROM', '俘虜從');
tz_def('TROOPS', '部隊');
tz_def('BOUNTY', '賞金');
tz_def('ARRIVAL', '抵達');
tz_def('CATAPULT_TARGET', '攻城器目標');
tz_def('INCOMING_TROOPS', '到來的部隊');
tz_def('TROOPS_ON_THEIR_WAY', '途中的部隊');
tz_def('OWN_TROOPS', '己方部隊');
tz_def('ON', '在');
tz_def('AT', '在');
tz_def('UPKEEP', '消耗');
tz_def('SEND_BACK', '送還');
tz_def('TROOPS_IN_THE_VILLAGE', '村莊中的部隊');
tz_def('TROOPS_IN_OTHER_VILLAGE', '其他村莊的部隊');
tz_def('TROOPS_IN_OASIS', '綠洲中的部隊');
tz_def('KILL', '擊殺');
tz_def('FROM', '從');
tz_def('SEND_TROOPS', '派遣部隊');
tz_def('TASKMASTER', '任務官');
tz_def('TO_THE_TASK', 'To the task');
tz_def('VILLAGE_OF_THE_ELDERS', 'village of the elders');
tz_def('VILLAGE_OF_THE_ELDERS_TROOPS', '舊部隊的村莊');

//SEND TROOP
tz_def('REINFORCE', '增援');
tz_def('NORMALATTACK', '強攻');
tz_def('RAID', '掠奪');
tz_def('OR', '或');
tz_def('SENDTROOP', '派遣部隊');
tz_def('NOTROOP', '無部隊');

//map
tz_def('DETAIL', '詳情');
tz_def('ABANDVALLEY', '荒地');
tz_def('OCCUPIED', '已被佔領的');
tz_def('UNOCCUPIED', '未被佔領的');
tz_def('UNOCCUOASIS', '未被佔領的綠洲');
tz_def('OCCUOASIS', '已被佔領的綠洲');
tz_def('THERENOINFO', '沒有<br>可用資訊。');
tz_def('LANDDIST', '資源田配比');
tz_def('TRIBE', '種族');
tz_def('ALLIANCE', '聯盟');
tz_def('POP', '人口');
tz_def('REPORT', '報告');
tz_def('OPTION', '選項');
tz_def('CENTREMAP', '以此為中心顯示地圖');
tz_def('FNEWVILLAGE', '建立新村莊');
tz_def('CULTUREPOINT', '文化點數');
tz_def('BUILDRALLY', '建造集結點');
tz_def('SETTLERSAVAIL', '可用拓荒者');
tz_def('BEGINPRO', '新手保護');
tz_def('SENDMERC', '派出商人');
tz_def('BAN', '玩家已被封禁');
tz_def('BUILDMARKET', '建造市場');
tz_def('PERHOUR', '每小時');
tz_def('BONUS', '激勵');
tz_def('MAP', '地圖');
tz_def('LARGE_MAP', 'Large Map');
tz_def('LARGE_MAP_DESC', 'Show the large map in an extra window');
tz_def('CROPFINDER', '找田工具');
tz_def('NORTH', '北');
tz_def('EAST', '東');
tz_def('SOUTH', '南');
tz_def('WEST', '西');
tz_def('CLOSE_MAP', 'Close Map');
tz_def('AND', 'and');

//other
tz_def('VILLAGE', '村莊');
tz_def('STATISTICS', 'Statistics');
tz_def('OASIS', '綠洲');
tz_def('NO_OASIS', '你尚未佔領綠洲。');
tz_def('NO_VILLAGES', '那裡沒有村莊。');
tz_def('PLAYER', '玩家');

//LOGIN.php
tz_def('COOKIES', '你必須啟用Cookies才能登入。如果你與他人共用此電腦，請在遊玩後登出。');
tz_def('NAME', '名稱');
tz_def('PW_FORGOTTEN', '忘記密碼?');
tz_def('PW_REQUEST', '你可以申請更換新密碼，相關資訊將傳送到你的郵箱。');
tz_def('PW_GENERATE', '生成新密碼。');
tz_def('EMAIL_NOT_VERIFIED', '郵箱地址尚未驗證!');
tz_def('EMAIL_FOLLOW', '透過此連結啟用你的賬戶。');
tz_def('VERIFY_EMAIL', '驗證郵箱。');
tz_def('SERVER_STARTS_IN', '伺服器將啟動於: ');
tz_def('START_NOW', '現在啟動');


//404.php
tz_def('NOTHING_HERE', '這兒什麼也沒有!');
tz_def('WE_LOOKED', '我們找了 404 次，但什麼都沒有發現');

//MASSMESSAGE.php
tz_def('MASS', '訊息內容');
tz_def('MASS_SUBJECT', '主題:');
tz_def('MASS_COLOR', '訊息顏色:');
tz_def('MASS_REQUIRED', '所有空白欄都需要內容');
tz_def('MASS_UNITS', '影象 (units):');
tz_def('MASS_SHOWHIDE', '顯示/隱藏');
tz_def('MASS_READ', '注意: Read this: after adding smilie, you have to add left or right after number otherwise image will won&#39;t work');
tz_def('MASS_CONFIRM', '確認');
tz_def('MASS_REALLY', '你確定要傳送全體 IGM 嗎?');
tz_def('MASS_ABORT', '現在中止');
tz_def('MASS_SENT', '全體 IGM 已送出');

//BUILDINGS
tz_def('WOODCUTTER', '伐木場');
tz_def('WOODCUTTER_DESC', '伐木場的工人們砍倒樹木，生產木材。伐木場的等級越高，木材的產能越高。');
tz_def('CLAYPIT', '黏土坑');
tz_def('CLAYPIT_DESC', '黏土坑生產黏土。黏土坑的等級越高，黏土的產能越高。');
tz_def('IRONMINE', '鐵礦場');
tz_def('IRONMINE_DESC', '在這裡，礦工們挖出寶貴的金屬。鐵礦場的等級越高，鐵礦的產能越高。');
tz_def('CROPLAND', '農田');
tz_def('CROPLAND_DESC', '你的人民和士兵的食物在這裡產出。農田的等級越高，糧食的產能越高。');

tz_def('SAWMILL', '鋸木廠');
tz_def('SAWMILL_DESC', '木材被送到這裡進一步處理。根據鋸木廠的等級，木材產量可以提升至多 25% 。');
tz_def('CURRENT_WOOD_BONUS', '當前木材產量加成:');
tz_def('WOOD_BONUS_LEVEL', '木材產量加成於等級');
tz_def('MAX_LEVEL', '建築已經到達最高等級');
tz_def('PERCENT', '%');

tz_def('BRICKYARD', '磚塊廠');
tz_def('CURRENT_CLAY_BONUS', '當前黏土產量加成:');
tz_def('CLAY_BONUS_LEVEL', '黏土產量加成於等級');
tz_def('BRICKYARD_DESC', '黏土被送到這裡進一步處理。根據磚塊廠的等級，黏土產量可以提升至多 25% 。');

tz_def('IRONFOUNDRY', '鑄鐵廠');
tz_def('CURRENT_IRON_BONUS', '當前鐵礦產量加成:');
tz_def('IRON_BONUS_LEVEL', '鐵礦產量加成於等級');
tz_def('IRONFOUNDRY_DESC', '鐵礦被送到這裡進一步處理。根據鑄鐵廠的等級，鐵礦產量可以提升至多 25% 。');

tz_def('GRAINMILL', '磨坊');
tz_def('CURRENT_CROP_BONUS', '當前糧食產量加成:');
tz_def('CROP_BONUS_LEVEL', '糧食產量加成於等級');
tz_def('GRAINMILL_DESC', '糧食被送到這裡進一步加工成麵粉。根據磨坊的等級，糧食產量可以提升至多 25% 。');

tz_def('BAKERY', '麵包房');
tz_def('BAKERY_DESC', '麵粉可以進一步烘烤成麵包。在磨坊的基礎之上，將糧食產量提升至多 50% 。');

tz_def('WAREHOUSE', '倉庫');
tz_def('CURRENT_CAPACITY', '當前容量:');
tz_def('CAPACITY_LEVEL', '容量在等級');
tz_def('RESOURCE_UNITS', '資源單位');
tz_def('WAREHOUSE_DESC', '木材、黏土和鐵礦儲存在倉庫中。倉庫的等級越高，儲存容量越高。');

tz_def('GRANARY', '糧倉');
tz_def('CROP_UNITS', '糧食單位');
tz_def('GRANARY_DESC', '糧食儲存在糧倉中。糧倉的等級越高，儲存容量越高。');

tz_def('BLACKSMITH', '鐵匠鋪');
tz_def('ACTION', '選項');
tz_def('UPGRADE', '升級');
tz_def('UPGRADE_IN_PROGRESS', '升級在<br>進行中');
tz_def('UPGRADE_BLACKSMITH', '升級<br>鐵匠鋪');
tz_def('UPGRADES_COMMENCE_BLACKSMITH', '鐵匠鋪建造完成後才能開始升級。');
tz_def('MAXIMUM_LEVEL', '最高<br>等級');
tz_def('EXPAND_WAREHOUSE', '擴建<br>倉庫');
tz_def('EXPAND_GRANARY', '擴建<br>糧倉');
tz_def('ENOUGH_RESOURCES', '足夠的資源');
tz_def('CROP_NEGATIVE ', '你的糧食產量為負，因此不可能抵達需求的糧食數目');
tz_def('TOO_FEW_RESOURCES', '缺少<br>資源');
tz_def('UPGRADING', '升級中');
tz_def('DURATION', '時長');
tz_def('COMPLETE', '完成');
tz_def('BLACKSMITH_DESC', '在鐵匠鋪的熔爐中，士兵們的武器得到強化。鐵匠鋪等級越高，士兵的攻擊力將能得到更高的強化。');

tz_def('ARMOURY', '盔甲廠');
tz_def('UPGRADE_ARMOURY', '升級<br>盔甲廠');
tz_def('UPGRADES_COMMENCE_ARMOURY', '盔甲廠建造完成後才能開始升級。');
tz_def('ARMOURY_DESC', '盔甲廠的工匠能生產更好的防具。盔甲廠等級越高，士兵的防禦力將能得到更高的強化。');

tz_def('TOURNAMENTSQUARE', '競技場');
tz_def('CURRENT_SPEED', '當前行軍速度加成:');
tz_def('SPEED_LEVEL', '行軍速度加成在等級');
tz_def('TOURNAMENTSQUARE_DESC', '在競技場，你的部隊日復一日地訓練，他們的耐力得到了提升。競技場等級越高，士兵進行 '.TS_THRESHOLD.' 格以上的行軍將更快。');

tz_def('MAINBUILDING', '村莊大樓');
tz_def('CURRENT_CONSTRUCTION_TIME', '當前建造速度:');
tz_def('CONSTRUCTION_TIME_LEVEL', '建造速度在等級');
tz_def('DEMOLITION_BUILDING', '拆除建築:</h2><p>如果你不再需要某個建築，你可以在這裡下令拆除。</p>');
tz_def('DEMOLISH', '拆除');
tz_def('DEMOLITION_OF', '拆除');
tz_def('MAINBUILDING_DESC', '村莊大樓是建築大師的住所。村莊大樓等級越高，建築的建造速度就越快。');

tz_def('RALLYPOINT', '集結點');
tz_def('RALLYPOINT_COMMENCE', '當 '.RALLYPOINT.' 建造完畢時，將顯示部隊動向');
tz_def('OVERVIEW', '概覽');
tz_def('REINFORCEMENT', '增援');
tz_def('EVASION_SETTINGS', '侵略設定');
tz_def('SEND_TROOPS_AWAY_MAX', 'Send troops away a maximum of');
tz_def('TIMES', 'times');
tz_def('PER_EVASION', 'per evasion');
tz_def('RALLYPOINT_DESC', '村莊的部隊在這裡集合。你可以在這裡派遣部隊去征服、掠奪、偵查或增援其他地方。');
tz_def('COMBAT_SIMULATOR', 'Combat Simulator');

tz_def('MARKETPLACE', '市場');
tz_def('MERCHANT', '商人');
tz_def('OR_', '或');
tz_def('GO', '出發');
tz_def('UNITS_OF_RESOURCE', '單位資源');
tz_def('MERCHANT_CARRY', '每個商人可以攜帶');
tz_def('MERCHANT_COMING', '到來的商人');
tz_def('TRANSPORT_FROM', '運送來自');
tz_def('ARRIVAL_IN', '抵達剩餘時間');
tz_def('NO_COORDINATES_SELECTED', '未輸入座標');
tz_def('CANNOT_SEND_RESOURCES', '你不能向本村運送資源');
tz_def('BANNED_CANNOT_SEND_RESOURCES', '玩家已被封禁，你不能向其運送資源。');
tz_def('RESOURCES_NO_SELECTED', '未輸入資源');
tz_def('ENTER_COORDINATES', '輸入座標或村莊名稱');
tz_def('TOO_FEW_MERCHANTS', '商人不足');
tz_def('OWN_MERCHANTS_ONWAY', '己方商人在途中');
tz_def('MERCHANTS_RETURNING', '商人返回中');
tz_def('TRANSPORT_TO', '運輸至');
tz_def('I_AN_SEARCHING', '我尋求');
tz_def('I_AN_OFFERING', '我提供');
tz_def('OFFERS_MARKETPLACE', '市場中的報價');
tz_def('NO_AVAILABLE_OFFERS', '市場中沒有報價');
tz_def('OFFERED_TO_ME', '提供<br>給我');
tz_def('WANTED_TO_ME', '我<br>提供');
tz_def('NOT_ENOUGH_MERCHANTS', '商人不足');
tz_def('ACCEP_OFFER', '接受報價');
tz_def('NO_AVALIBLE_OFFERS', '市場上沒有可用的報價');
tz_def('SEARCHING', '搜尋中');
tz_def('OFFERING', '發出報價');
tz_def('MAX_TIME_TRANSPORT', '運輸次數達上限');
tz_def('OWN_ALLIANCE_ONLY', '僅限聯盟');
tz_def('INVALID_OFFER', '報價不再可用');
tz_def('INVALID_MERCHANTS_REPETITION', '不可用的商人重複次數');
tz_def('USER_ON_VACATION', '使用者正在度假');
tz_def('VACATION_MODE', 'Vacation mode');
tz_def('VACATION_DESC', 'If you plan on being away for an extended period of time and do not wish to set a sitter, you can set your account to Holiday Mode. During this time your account will stop produceing resource, CP, research, trops, etc, and stop receiving attacks, reinforcements, raid, essentially freezing your account. Remember, this just freezes your Travian, not time. If you are a member of Gold Club it will run out during this time and if you have automatic renewal selected, the automatic renewal feature will be cancelled while in Holiday Mode. Please Note you must set min of 2 days vaction mode and NO MORE THEN 14 days');
tz_def('VACATION_DESC2', 'Use vacation mode to protect your villages during you are away.<br>During the vacation will be inactive next actions:');
tz_def('VAC_OP1', 'Send or receive troops');
tz_def('VAC_OP2', 'Start new construction order');
tz_def('VAC_OP3', 'Use market');
tz_def('VAC_OP4', 'Train new troops');
tz_def('VAC_OP5', 'Join to an alliance');
tz_def('VAC_OP6', 'Delete account');
tz_def('VAC_COND1', 'No troops in movement');
tz_def('VAC_COND2', 'No troops on way to other villages');
tz_def('VAC_COND3', 'No troops send to reinforcements other villages');
tz_def('VAC_COND4', 'No player have reinforcements on your villages');
tz_def('VAC_COND5', 'Do not have Wonder World');
tz_def('VAC_COND6', 'Do not have any artefacts');
tz_def('VAC_COND7', 'You are no longer in player protections');
tz_def('VAC_COND8', 'Do not have any troops in your traps');
tz_def('VAC_COND9', 'Your account is not in deletion process');
tz_def('NOT_ENOUGH_RESOURCES', '資源不足');
tz_def('OFFER', '報價');
tz_def('SEARCH', '搜尋');
tz_def('OWN_OFFERS', '我的報價');
tz_def('ALL', '所有');
tz_def('NPC_TRADE', '資源置換');
tz_def('SUM', '總計');
tz_def('REST', '餘下');
tz_def('TRADE_RESOURCES', '交易資源 (第二步');
tz_def('DISTRIBUTE_RESOURCES', '分配資源 (第一步)');
tz_def('OF', 'of');
tz_def('NPC_COMPLETED', '資源置換完成');
tz_def('BACK_BUILDING', '返回建築');
tz_def('YOU_CAN_NAT_NPC_WW', '在世界奇觀村莊中不能進行資源置換。');
tz_def('NPC_TRADING', '資源置換');
tz_def('SEND_RESOURCES', '運送資源');
tz_def('BUY', '購買');
tz_def('TRADE_ROUTES', '貿易路線');
tz_def('DESCRIPTION', '描述');
tz_def('G_DESCR', 'General description');
tz_def('TIME_LEFT', '剩餘時間');
tz_def('START', '開始');
tz_def('NO_TRADE_ROUTES', '沒有活躍的貿易路線');
tz_def('TRADE_ROUTE_TO', '貿易路線至');
tz_def('CHECKED', 'checked');
tz_def('DAYS', 'Days');
tz_def('EXTEND', 'Extend');
tz_def('EDIT', 'Edit');
tz_def('EXTEND_TRADE_ROUTES', 'Extend the trade route by <b>7</b> days for');
tz_def('CREATE_TRADE_ROUTES', 'Create new trade route');
tz_def('DELIVERIES', 'Deliveries');
tz_def('START_TIME_TRADE', 'Start time');
tz_def('CREATE_TRADE_ROUTE', 'Create trade route');
tz_def('TARGET_VILLAGE', 'Target village');
tz_def('EDIT_TRADE_ROUTES', 'Edit trade route');
tz_def('TRADE_ROUTES_DESC', 'Trade route allows you to set up routes for your merchant that he will walk every day at a certain hour. <br><br> Standard this holds on for <b>7</b> days, but you can extend it with <b>7</b> days for the cost of');
tz_def('NPC_TRADE_DESC', 'With the NPC merchant you can distribute the resources in your warehouse as you desire. <br><br> The first line shows the current stock. In the second line you can choose another distribution. The third line shows the difference between the old and new stock.');
tz_def('MARKETPLACE_DESC', 'At the Marketplace you can trade resources with other players. The higher its level, the more resources can be transported at the same time.');

tz_def('EMBASSY', '大使館');
tz_def('TAG', '標籤');
tz_def('TO_THE_ALLIANCE', '前往聯盟');
tz_def('JOIN_ALLIANCE', '加入聯盟');
tz_def('REFUSE', '拒絕');
tz_def('ACCEPT', '接受');
tz_def('NO_INVITATIONS', '沒有有效的邀請。');
tz_def('NO_CREATE_ALLIANCE', '被封禁的玩家不能建立聯盟。');
tz_def('FOUND_ALLIANCE', '建立聯盟');
tz_def('EMBASSY_DESC', '大使館是進行外交活動的場所。 The higher its level the more options the king gains.');

tz_def('BARRACKS', '兵營');
tz_def('QUANTITY', '數量');
tz_def('MAX', '最大');
tz_def('TRAINING', '訓練中');
tz_def('FINISHED', '完成');
tz_def('UNIT_FINISHED', '距離下一個單位訓練完成');
tz_def('AVAILABLE', '可用');
tz_def('TRAINING_COMMENCE_BARRACKS', '兵營建造完成後才能開始訓練。');
tz_def('BARRACKS_DESC', '所有的步兵都在兵營中訓練產生。兵營的等級越高，訓練步兵的速度越快。');

tz_def('STABLE', '馬廄');
tz_def('AVAILABLE_ACADEMY', '沒有可訓練單位。請先在學院研究。');
tz_def('TRAINING_COMMENCE_STABLE', '馬廄建造完成後才能開始訓練。');
tz_def('STABLE_DESC', '騎兵在馬廄中訓練。馬廄的等級越高，訓練騎兵的速度越快。');

tz_def('WORKSHOP', '攻城武器廠');
tz_def('TRAINING_COMMENCE_WORKSHOP', '攻城武器廠建造完成後才能開始生產攻城武器。');
tz_def('WORKSHOP_DESC', '諸如攻城錘、投石車等的攻城武器在攻城武器廠中生產。攻城武器廠等級越高，攻城武器的生產速度越快。');

tz_def('ACADEMY', '學院');
tz_def('RESEARCH_AVAILABLE', '當前沒有可研究的專案。');
tz_def('RESEARCH_COMMENCE_ACADEMY', '當學院建造完成後才能開始研究。');
tz_def('RESEARCH', '研究');
tz_def('EXPAND_WAREHOUSE1', '擴建倉庫');
tz_def('EXPAND_GRANARY1', '擴建糧倉');
tz_def('RESEARCH_IN_PROGRESS', '研究<br>進行中');
tz_def('RESEARCHING', '研究中');
tz_def('PREREQUISITES', '先決條件');
tz_def('SHOW_MORE', '顯示更多');
tz_def('HIDE_MORE', '隱藏更多');
tz_def('ACADEMY_DESC', '學院裡可以研究新的兵種。更好的兵種通常需要更高等級的學院來解鎖。');

tz_def('CRANNY', '山洞');
tz_def('CURRENT_HIDDEN_UNITS', '目前可以保護的各類資源:');
tz_def('HIDDEN_UNITS_LEVEL', '保護的資源數量在等級');
tz_def('UNITS', '單位');
tz_def('CRANNY_DESC', '在村莊被攻擊時，山洞隱藏的資源可以不被掠奪。');

tz_def('TOWNHALL', '市政廳');
tz_def('CELEBRATIONS_COMMENCE_TOWNHALL', '市政廳建造完成後才可以開始舉辦慶典。');
tz_def('GREAT_CELEBRATIONS', '大型慶典');
tz_def('CULTURE_POINTS', '文化點數');
tz_def('HOLD', '舉辦');
tz_def('CELEBRATIONS_IN_PROGRESS', '慶典<br>正在進行中');
tz_def('CELEBRATIONS', '慶典');
tz_def('TOWNHALL_DESC', '你可以在市政廳舉辦盛大的慶典，獲得大量文明點數。市政廳等級越高，舉辦慶典的時間越短。');

tz_def('RESIDENCE', '行宮');
tz_def('CAPITAL', '這裡是你的首都');
tz_def('RESIDENCE_TRAIN_DESC', '你需要10級或20級行宮和三個拓荒者來開闢新村莊。你需要10級或20級行宮和一個參議員、司令官或族長來征服其他村莊。');
tz_def('PRODUCTION_POINTS', '本村的生成速度:');
tz_def('PRODUCTION_ALL_POINTS', '所有村莊的生成速度:');
tz_def('POINTS_DAY', '文化點數每天');
tz_def('VILLAGES_PRODUCED', '你的村莊共計已經生成了');
tz_def('POINTS_NEED', '文化點數。為了開闢或征服新村莊，你需要');
tz_def('POINTS', '文化點數');
tz_def('INHABITANTS', '村民');
tz_def('COORDINATES', '座標');
tz_def('EXPANSION', '擴張');
tz_def('TRAIN', '訓練');
tz_def('DATE', '日期');
tz_def('CONQUERED_BY_VILLAGE', '由本村開闢或征服的村莊');
tz_def('NONE_CONQUERED_BY_VILLAGE', '本村還沒有建立或開闢村莊。');
tz_def('RESIDENCE_CULTURE_DESC', '你需要文化點數來擴張你的帝國。文化點數隨時間生成，你的建築物越多、等級越高，生成文化點數的速度就越快。');
tz_def('RESIDENCE_LOYALTY_DESC', '在強攻時，部隊中若有參議員、司令官或族長，被攻擊的村莊忠誠度就會降低。如果忠誠度降為 0 ，村莊就會加入攻擊者的國家。本村當前忠誠度為 ');
tz_def('RESIDENCE_DESC', '行宮是一座小型宮殿，供國王或王后在訪問村莊時居住。行宮可以防止敵人征服村莊。');

tz_def('PALACE', '皇宮');
tz_def('PALACE_CONSTRUCTION', '皇宮已在建造中');
tz_def('PALACE_TRAIN_DESC', '你需要10級、15級或20級皇宮和三個拓荒者來開闢新村莊。你需要10級、15級或20級皇宮和一個參議員、司令官或族長來征服其他村莊。');
tz_def('CHANGE_CAPITAL', '遷都');
tz_def('SECURITY_CHANGE_CAPITAL', '你確定要遷都嗎?<br><b>該操作不可撤銷!</b><br>為了安全起見，你必須輸入密碼來確認:<br>');
tz_def('PALACE_DESC', '帝國的國王或皇后居住在這座宮殿中。你的王國只能有一座皇宮。你需要皇宮來指定首都的所在。');

tz_def('TREASURY', '寶物庫');
tz_def('TREASURY_COMMENCE', '寶物庫建造完成後可以檢視寶物。');
tz_def('ARTEFACTS_AREA', '你附近的寶物');
tz_def('NO_ARTEFACTS_AREA', '你附近沒有寶物。');
tz_def('OWN_ARTEFACTS', '你的寶物');
tz_def('CONQUERED', '已征服');
tz_def('DISTANCE', '距離');
tz_def('EFFECT', '效果');
tz_def('ACCOUNT', '賬號');
tz_def('SMALL_ARTEFACTS', '小型寶物');
tz_def('LARGE_ARTEFACTS', '大型寶物');
tz_def('NO_ARTEFACTS', '沒有寶物。');
tz_def('ANY_ARTEFACTS', '你沒有任何寶物。');
tz_def('OWNER', '所有者');
tz_def('AREA_EFFECT', '作用範圍');
tz_def('VILLAGE_EFFECT', '村莊效果');
tz_def('ACCOUNT_EFFECT', '賬號效果');
tz_def('UNIQUE_EFFECT', '獨特效果');
tz_def('REQUIRED_LEVEL', '等級要求');
tz_def('TIME_CONQUER', '征服時間');
tz_def('TIME_ACTIVATION', '啟用時間');
tz_def('NEXT_EFFECT', ' 下一個效果');
tz_def('FORMER_OWNER', '曾經的所有者');
tz_def('BUILDING_STRONGER', 'Building stronger with');
tz_def('BUILDING_WEAKER', 'Building weaker with');
tz_def('TROOPS_FASTER', 'Makes troops faster with');
tz_def('TROOPS_SLOWEST', 'Makes troops slowest with');
tz_def('SPIES_INCREASE', 'Spies increase ability with');
tz_def('SPIES_DECRESE', 'Spies decrese ability with');
tz_def('CONSUME_LESS', 'All troops consume less with');
tz_def('CONSUME_HIGH', 'All troops consume high with');
tz_def('TROOPS_MAKE_FASTER', 'Troops make faster with');
tz_def('TROOPS_MAKE_SLOWEST', 'Troops make slowest with');
tz_def('YOU_CONSTRUCT', 'You can construct ');
tz_def('CRANNY_INCREASED', 'Cranny capacity is increased by');
tz_def('CRANNY_DECRESE', 'Cranny capacity is decrese by');
tz_def('WW_BUILDING_PLAN', 'You can build the Wonder of the World');
tz_def('NO_WW', 'There are no Wonders of the World');
tz_def('NO_PREVIOUS_OWNERS', 'There are no previous owners.');
tz_def('TREASURY_DESC', '帝國最珍貴的財富儲存在寶物庫中。寶物庫只能存下一件寶物。獲得寶物後需要存放一段時間才開始生效。After you have captured an artefact it takes 24 hours on a normal server or 12 hours on a thrice speed server to be effective.');

tz_def('TRADEOFFICE', '交易所');
tz_def('CURRENT_MERCHANT', '當前商人運載量:');
tz_def('MERCHANT_LEVEL', '商人運載量在等級');
tz_def('TRADEOFFICE_DESC', '商人在交易所可以獲得更大的馬車和更好的馬。交易所等級越高，你的商人可以運送的資源越多。');

tz_def('GREATBARRACKS', '大兵營');
tz_def('TRAINING_COMMENCE_GREATBARRACKS', '大兵營建造完成後才能開始訓練。');
tz_def('GREATBARRACKS_DESC', 'Foot soldiers are trained in the great barracks. The higher the level of the barracks, the faster the troops are trained.');

tz_def('GREATSTABLE', '大馬廄');
tz_def('TRAINING_COMMENCE_GREATSTABLE', '大馬廄建造完成後才能開始訓練。');
tz_def('GREATSTABLE_DESC', 'Cavalry can be trained in the great stable. The higher its level the faster the troops are trained.');

tz_def('CITYWALL', '城牆');
tz_def('DEFENCE_NOW', '當前防禦加成:');
tz_def('DEFENCE_LEVEL', '防禦加成在等級');
tz_def('CITYWALL_DESC', '建造城牆可以保護你的村莊，你計程車兵可以依託城牆更好地抵禦外敵。城牆等級越高，防禦加成越高。');

tz_def('EARTHWALL', '土牆');
tz_def('EARTHWALL_DESC', '建造土牆可以保護你的村莊，因為你計程車兵可以依託土牆更好地抵禦外敵。土牆等級越高，防禦加成越高。');

tz_def('PALISADE', '木柵欄');
tz_def('PALISADE_DESC', '建造木柵欄可以保護你的村莊，因為你計程車兵可以依託木柵欄更好地抵禦外敵。木柵欄等級越高，防禦加成越高。');

tz_def('STONEMASON', '石匠小屋');
tz_def('CURRENT_STABILITY', '當前耐久度加成:');
tz_def('STABILITY_LEVEL', '耐久度加成在等級');
tz_def('STONEMASON_DESC', '石匠是強化建築的大師。石匠小屋等級越高，村莊建築的耐久度越高。');

tz_def('BREWERY', '釀酒廠');
tz_def('CURRENT_BONUS', '當前加成:');
tz_def('BONUS_LEVEL', '加成在等級');
tz_def('BREWERY_DESC', '美味的蜂蜜酒……咕嘟咕嘟咕嘟……');

tz_def('TRAPPER', '陷阱機');
tz_def('CURRENT_TRAPS', '當前最大陷阱容量:');
tz_def('TRAPS_LEVEL', '最大陷阱容量在');
tz_def('TRAPS', '陷阱');
tz_def('TRAP', '陷阱');
tz_def('CURRENT_HAVE', '你目前擁有');
tz_def('WHICH_OCCUPIED', '被俘獲');
tz_def('TRAINING_COMMENCE_TRAPPER', '陷阱機建造完成後才能製作陷阱。');
tz_def('TRAPPER_DESC', '陷阱機透過隱藏的陷阱來保護你的村莊。被陷阱捕獲的敵人將無力攻擊你的村莊。');

tz_def('HEROSMANSION', '英雄園');
tz_def('HERO_READY', '距離英雄就緒 ');
tz_def('NAME_CHANGED', '英雄名稱已更改');
tz_def('NOT_UNITS', '不可用的單位');
tz_def('NOT', '不 ');
tz_def('TRAIN_HERO', '訓練新的英雄');
tz_def('REVIVE', '重生');
tz_def('OASES', '綠洲');
tz_def('DELETE', '刪除');
tz_def('RESOURCES', '資源');
tz_def('OFFENCE', '個體攻擊力');
tz_def('DEFENCE', '個體防禦力');
tz_def('OFF_BONUS', '全軍攻擊加成');
tz_def('DEF_BONUS', '全軍防禦加成');
tz_def('REGENERATION', '恢復速度');
tz_def('DAY', '天');
tz_def('EXPERIENCE', '經驗值');
tz_def('YOU_CAN', '你可以 ');
tz_def('RESET', '重置');
tz_def('YOUR_POINT_UNTIL', ' 你的點數，直到等級達到 ');
tz_def('OR_LOWER', ' !');
tz_def('YOUR_HERO_HAS', '你的英雄擁有 ');
tz_def('OF_HIT_POINTS', '點生命值');
tz_def('ERROR_NAME_SHORT', '錯誤: 名稱太短');
tz_def('HEROSMANSION_DESC', ' 在英雄園，你可以訓練你的英雄。英雄園等級到達10、15和20時分別可以多攻佔一片村莊附近的綠洲。');

tz_def('GREATWAREHOUSE', '大倉庫');
tz_def('GREATWAREHOUSE_DESC', 'Wood, clay and iron are stored in the warehouse. The great warehouse offers you more space and keeps your goods drier and safer than the normal one.');

tz_def('GREATGRANARY', '大糧倉');
tz_def('GREATGRANARY_DESC', 'Crop produced by your farms is stored in the granary. The great granary offers you more space and keeps your crops drier and safer than the normal one.');

tz_def('WONDER', '世界奇觀');
tz_def('WORLD_WONDER', '世界奇觀');
tz_def('WONDER_DESC', '世界奇觀是帝國強大和繁榮的豐碑，是贏得遊戲的目標。世界奇觀每提升一級都需要耗費不計其數的資源。');
tz_def('WORLD_WONDER_CHANGE_NAME', '你需要建造一級世界奇觀才能更改它的名稱');
tz_def('WORLD_WONDER_NAME', '世界奇觀名稱');
tz_def('WORLD_WONDER_NOTCHANGE_NAME', '世界奇觀10級之後不能再更改名稱');
tz_def('WORLD_WONDER_NAME_CHANGED', '名稱已更改');

tz_def('HORSEDRINKING', '飲馬槽');
tz_def('HORSEDRINKING_DESC', '飲馬槽是羅馬人加快騎兵訓練速度、降低騎兵糧耗的獨特技術。');

tz_def('GREATWORKSHOP', '大攻城武器廠');
tz_def('TRAINING_COMMENCE_GREATWORKSHOP', 'Training can commence when great workshop is completed.');
tz_def('GREATWORKSHOP_DESC', 'Siege engines like catapults and rams can be built in the great workshop. The higher its level the faster the units are produced.');

tz_def('BUILDING_MAX_LEVEL_UNDER', '建築正在升級至最高等級');
tz_def('BUILDING_BEING_DEMOLISHED', '建築正在被拆除');
tz_def('COSTS_UPGRADING_LEVEL', '消耗下列資源</b> 以升至等級');
tz_def('WORKERS_ALREADY_WORK', '工人已經在工作中。');
tz_def('CONSTRUCTING_MASTER_BUILDER', '令建築大師等待建造 ');
tz_def('COSTS', '消耗');
tz_def('WORKERS_ALREADY_WORK_WAITING', '工人已經在工作中。 (加入建造佇列)');
tz_def('ENOUGH_FOOD_EXPAND_CROPLAND', '糧食產量不足，請先擴建農田。');
tz_def('UPGRADE_WAREHOUSE', '升級倉庫');
tz_def('UPGRADE_GRANARY', '升級糧倉');
tz_def('YOUR_CROP_NEGATIVE', '你的糧食產量為負，你不可能達到所需的資源。');
tz_def('UPGRADE_LEVEL', '升至等級 ');
tz_def('WAITING', '(等待佇列)');
tz_def('NEED_WWCONSTRUCTION_PLAN', '需要世界奇觀藍圖');
tz_def('NEED_MORE_WWCONSTRUCTION_PLAN', '需要更多世界奇觀藍圖');
tz_def('CONSTRUCT_NEW_BUILDING', '建造新建築');
tz_def('SHOWSOON_AVAILABLE_BUILDINGS', '顯示即將可用的建築');
tz_def('HIDESOON_AVAILABLE_BUILDINGS', '隱藏即將可用的建築');

// gold plus
tz_def('GOLD_SHOP', 'Gold Shop');
tz_def('PACKAGE_A', 'Package A');
tz_def('PACKAGE_B', 'Package B');
tz_def('PACKAGE_C', 'Package C');
tz_def('PACKAGE_D', 'Package D');
tz_def('PACKAGE_E', 'Package E');
tz_def('PAYMENT_METHOD', 'Payment Method');
tz_def('PACKAGES_NOT_REFUND', 'None of the packages are refundable');
tz_def('PLUS_FUNC', 'Plus function');
tz_def('REMAINING', 'Remaining');
tz_def('MINS', 'mins');
tz_def('ACTIVATE', 'Activate');
tz_def('TOO_LITTLE_GOLD', 'Too little gold');
tz_def('GOLD_ON', 'On'); // "attack on" and "gold feature on" can be not the same in different languages
tz_def('PLUS_END', 'Your PLUS advantage has ended');
tz_def('NPC', 'NPC');
tz_def('NO_GOLD', 'You currently don&#39;t own gold');
tz_def('GOLD_CLUB', 'Gold Club');
tz_def('NOW', 'now');
tz_def('NPC_TRADE_GOLD', 'Trade with the NPC merchant');
tz_def('COMPLETE_CONSTRUCTION_R_GOLD', 'Complete construction orders and researches in this village now (does not work for Palace and Residence)');
tz_def('FOR_GAME_SERVER', 'Whole game round');
tz_def('HAVE_NO_INVITED', 'You have not brought in any new players yet');
tz_def('INVITE_FRIENDS_GOLD', 'Invite friends and receive free Gold');
tz_def('NEED_MORE_GOLD', 'You need more gold');
tz_def('ADD_PLUS_FAIL', 'Failed plus attempt');
tz_def('ADD_BONUS_LUMBER_FAIL', 'Failed lumber attempt');
tz_def('ADD_BONUS_CLAY_FAIL', 'Failed clay attempt');
tz_def('ADD_BONUS_IRON_FAIL', 'Failed iron attempt');
tz_def('ADD_BONUS_CROP_FAIL', 'Failed crop attempt');
tz_def('SELECT_GOLD_OPTION', 'Please select the option you wish to activate or extend');
tz_def('GET_NOW', 'Get Now');
tz_def('BUY_NOW', 'Buy Now');
tz_def('SELECT_REWARD', 'Select reward');
tz_def('VIP_ACCOUNT', 'VIP Account');
tz_def('USER_NOT_EXISTS', 'The account name you entered does not exist');
tz_def('STATUS_UPDATED', 'Your Status has been updated');

// profile
tz_def('PREFERENCES', 'Preferences');
tz_def('VACATION', 'Vacation');
tz_def('ACTIVATE_VACATION', 'Want to activate Vacation Mode');
tz_def('GRAPH_PACK', 'Graphic Pack');
tz_def('PLAYER_PROFILE', 'Player profile');
tz_def('CHANGE_PASSWORD', 'Change password');
tz_def('OLD_PASSWORD', 'Old password');
tz_def('NEW_PASSWORD', 'New password');
tz_def('CHANGE_EMAIL', 'Change email');
tz_def('CHANGE_EMAIL2', 'Please enter your old and your new e-mail addresses. You will then receive a code snippet at both e-mail addresses which you have to enter here');
tz_def('OLD_EMAIL', 'Old email');
tz_def('NEW_EMAIL', 'New email');
tz_def('ACCOUNT_SITTERS', 'Account sitters');
tz_def('ACCOUNT_SITTERS2', 'A sitter can log into your account by using your name and his/her password. You can have up to two sitters');
tz_def('SITTER_NAME', 'Name of the sitter');
tz_def('NO_SITTERS', 'You have no sitters');
tz_def('RM_SITTER', 'Remove sitter');
tz_def('YOU_ARE_SITTER', 'You have been entered as sitter on the following accounts. You can cancel this by clicking the red X');
tz_def('DELETE_ACCOUNT', 'Delete account');
tz_def('DELETE_ACCOUNT2', 'You can delete your account here. After starting the cancellation it will take three days to complete the cancellation of your account. You can cancel this process within the first 24 hours');
tz_def('YES', 'Yes');
tz_def('NO', 'No');
tz_def('CONFIRM_W_PASS', 'Confirm with password');
tz_def('MEDALS', 'Medals');
tz_def('PLAYER_HAS', 'This player has'); // bird 1
tz_def('HOURS_OF_BG_PROT', 'hours of beginners protection left'); // bird 1
tz_def('PLAYER_WAS_REG_ON', 'This player registered his account on'); // bird 2
tz_def('NATARS_ACC', 'Official Natar account'); // natars
tz_def('WW_V_M', 'Official World Wonder Village'); // WW Village
tz_def('ROMAN_T_M', 'The Romans : Because of its high level of social and technological development the Romans are masters at building and its coordination. Also, their troops are part of the elite in Travian. They are very balanced and useful in attacking and defending'); // roman tribe medal
tz_def('TEUTON_T_M', 'The Teutons : The Teutons are the most aggressive tribe. Their troops are notorious and feared for their rage and frenzy when they attack. They move around as a plundering horde, not even afraid of death'); // teuton tribe medal
tz_def('GAUL_T_M', 'The Gauls : The Gauls are the most peaceful of all three tribes in Travian. Their troops are trained for an excellent defence, but their ability to attack can still compete with the other two tribes. The Gauls are born riders and their horses are famous for their speed. This means that their riders can hit the enemy exactly where they can cause the most damage and swiftly take care of them'); // gaul tribe medal
tz_def('ADMIN_M', 'Official Server Administrator');
tz_def('MH_M', 'Official Server Global Multihunter');
tz_def('MH_M2', 'The Multihunter is an official Travian position mainly used for enforcement of Travian rules within a server. Multihunters all use the account named Multihunter with its only village located in (0|0). A Multihunter may not play on the server on which they are the Multihunter, but be an active player on other servers');
tz_def('NATURE_M2', 'Natures troops are the animals living in unoccupied oases. You can use the combat simulator to see whether you have enough troops to defeat the animals in an oasis you want to conquer, but remember that you can only raid oasis. Keep in mind that all the animals above Bear can kill its contemporary max tier travian troop in single combat');
tz_def('TASKMASTER_M', 'Taskmaster Account');
tz_def('VETERAN_P', 'Veteran Player');
tz_def('VETERAN_3_M', 'Medal achieved for playing 3 years of Travian');
tz_def('VETERAN_5_M', 'Medal achieved for playing 5 years of Travian');
tz_def('VETERAN_10_M', 'Medal achieved for playing 10 years of Travian');
tz_def('ATT_W_M', 'Attackers of the Week');
tz_def('DEF_W_M', 'Defenders of the Week');
tz_def('POP_W_M', 'Pop Climbers of the week');
tz_def('ROB_W_M', 'Robbers of the week');
tz_def('CLIMB_W_M', 'Rank Climbers of the week');
tz_def('ATT_DEF_10_W_M', 'Receiving this medal shows that you where in the top 10 of both Attackers and Defenders of the week');
tz_def('ATT_3_W_M', 'Receiving this medal shows that you were in the top 3 Attackers of the week');
tz_def('DEF_3_W_M', 'Receiving this medal shows that you were in the top 3 Defenders of the week');
tz_def('POP_3_W_M', 'Receiving this medal shows that you were in the top 3 Pop Climbers of the week');
tz_def('ROB_3_W_M', 'Receiving this medal shows that you were in the top 3 Robbers of the week');
tz_def('CLIMB_3_W_M', 'Receiving this medal shows that you were in the top 3 Rank Climbers of the week');
tz_def('ATT_10_W_M', 'Receiving this medal shows that you were in the top 10 Attackers of the week');
tz_def('DEF_10_W_M', 'Receiving this medal shows that you were in the top 10 Defenders of the week');
tz_def('POP_10_W_M', 'Receiving this medal shows that you were in the top 10 Pop Climbers of the week');
tz_def('ROB_10_W_M', 'Receiving this medal shows that you were in the top 10 Robbers of the week');
tz_def('CLIMB_10_W_M', 'Receiving this medal shows that you were in the top 10 Rank Climbers of the week');
tz_def('RECEIVED_IN_W', 'Received in week');
tz_def('POINTS_M', 'Points');
tz_def('RANKS', 'Ranks');
tz_def('WEEK', 'Week');
tz_def('CATEGORY', 'Category');
tz_def('RANK', 'Rank');
tz_def('BB_CODE', 'BB-Code');
tz_def('IN_ROW', 'in a row');
tz_def('ADMIN1', 'Administrator');
tz_def('MULTIH1', 'Multihunter');
tz_def('PLAYER_ADMIN', 'This player is Admin');
tz_def('PLAYER_MH', 'This player is Multihunter');
tz_def('PLAYER_BANNED', 'This player is BANNED');
tz_def('PLAYER_VACATION', 'This player is on VACATION');
tz_def('BANNED', 'Banned');
tz_def('GENDER', 'Gender');
tz_def('GENDER0', 'n/a');
tz_def('MALE0', 'm');
tz_def('MALE', 'Male');
tz_def('FEMALE0', 'f');
tz_def('FEMALE', 'Female');
tz_def('LOCATION', 'Location');
tz_def('DIRECT_LINKS', 'Direct links');
tz_def('NUMBER0', 'No');
tz_def('LINK_NAME', 'Link name');
tz_def('LINK_TARGET', 'Link target');
tz_def('AUTO_COMPL', 'Auto completion');
tz_def('AUTO_COMPL2', 'Used for rally point and marketplace');
tz_def('OWN_VILLAGES', 'own villages');
tz_def('VILLAGES_NEAR', 'villages of the surroundings');
tz_def('VILLAGES_ALLI_PLAYERS', 'villages from players of the alliance');
tz_def('REPORT_FILTER', 'Report filter');
tz_def('NO_REPORTS_TO_OWN', 'No reports for transfers to own villages');
tz_def('NO_REPORTS_TO_OTH', 'No reports for transfers to foreign villages');
tz_def('NO_REPORTS_FROM_OTH', 'No reports for transfers from foreign villages');
tz_def('CHANGE_PROFILE', 'Change profile');
tz_def('WRITE_MESSAGE', 'Write message');
tz_def('REPORT_PLAYER', 'Report Player');
tz_def('ARTEFACT1', 'Artefact');
tz_def('WoW1', 'WoW');
tz_def('VILLAGE_NAME', 'Village name');
tz_def('BDAY', 'Birthday');
tz_def('CONDITIONS', 'Conditions');
tz_def('TIME_PREF', 'Time preferences');
tz_def('TIME_ZONES_DESC', 'Here you can change Travian&#39;s displayed time to fit your time zone');
tz_def('TIME_ZONE_L1', 'Europe');
tz_def('TIME_ZONE_L2', 'UK');
tz_def('TIME_ZONE_L3', 'Turkey');
tz_def('TIME_ZONE_L4', 'Asia/Kolkata');
tz_def('TIME_ZONE_L5', 'Asia/Bangkok');
tz_def('TIME_ZONE_L6', 'USA/New York');
tz_def('TIME_ZONE_L7', 'USA/Chicago');
tz_def('TIME_ZONE_L8', 'New Zealand');
tz_def('MONTH1', 'Jan');
tz_def('MONTH2', 'Feb');
tz_def('MONTH3', 'Mar');
tz_def('MONTH4', 'Apr');
tz_def('MONTH5', 'May');
tz_def('MONTH6', 'June');
tz_def('MONTH7', 'July');
tz_def('MONTH8', 'Aug');
tz_def('MONTH9', 'Sep');
tz_def('MONTH10', 'Oct');
tz_def('MONTH11', 'Nov');
tz_def('MONTH12', 'Dec');

//artefact
tz_def('ARCHITECTS_DESC', 'All buildings in the area of effect are stronger. This means that you will need more catapults to damage buildings protected by this artefacts powers.');
tz_def('ARCHITECTS_SMALL', 'The architects slight secret');
tz_def('ARCHITECTS_SMALLVILLAGE', 'Diamond Chisel');
tz_def('ARCHITECTS_LARGE', 'The architects great secret');
tz_def('ARCHITECTS_LARGEVILLAGE', 'Giant Marble Hammer');
tz_def('ARCHITECTS_UNIQUE', 'The architects unique secret');
tz_def('ARCHITECTS_UNIQUEVILLAGE', 'Hemons Scrolls');
tz_def('HASTE_DESC', 'All troops in the area of effect move faster.');
tz_def('HASTE_SMALL', 'The slight titan boots');
tz_def('HASTE_SMALLVILLAGE', 'Opal Horseshoe');
tz_def('HASTE_LARGE', 'The great titan boots');
tz_def('HASTE_LARGEVILLAGE', 'Golden Chariot');
tz_def('HASTE_UNIQUE', 'The unique titan boots');
tz_def('HASTE_UNIQUEVILLAGE', 'Pheidippides Sandals');
tz_def('EYESIGHT_DESC', 'All spies (Scouts, Pathfinders, and Equites Legati) increase their spying ability. In addition, with all versions of this artefact you can see the incoming TYPE of troops but not how many there are.');
tz_def('EYESIGHT_SMALL', 'The eagles slight eyes');
tz_def('EYESIGHT_SMALLVILLAGE', 'Tale of a Rat');
tz_def('EYESIGHT_LARGE', 'The eagles great eyes');
tz_def('EYESIGHT_LARGEVILLAGE', 'Generals Letter');
tz_def('EYESIGHT_UNIQUE', 'The eagles unique eyes');
tz_def('EYESIGHT_UNIQUEVILLAGE', 'Diary of Sun Tzu');
tz_def('DIET_DESC', 'All troops in the artefacts range consume less wheat, making it possible to maintain a larger army.');
tz_def('DIET_SMALL', 'Slight diet control');
tz_def('DIET_SMALLVILLAGE', 'Silver Platter');
tz_def('DIET_LARGE', 'Great diet control');
tz_def('DIET_LARGEVILLAGE', 'Sacred Hunting Bow');
tz_def('DIET_UNIQUE', 'Unique diet control');
tz_def('DIET_UNIQUEVILLAGE', 'King Arthurs Chalice');
tz_def('ACADEMIC_DESC', 'Troops are built a certain percentage faster within the scope of the artefact.');
tz_def('ACADEMIC_SMALL', 'The trainers slight talent');
tz_def('ACADEMIC_SMALLVILLAGE', 'Scribed Soldiers Oath');
tz_def('ACADEMIC_LARGE', 'The trainers great talent');
tz_def('ACADEMIC_LARGEVILLAGE', 'Declaration of War');
tz_def('ACADEMIC_UNIQUE', 'The trainers unique talent');
tz_def('ACADEMIC_UNIQUEVILLAGE', 'Memoirs of Alexander the Great');
tz_def('STORAGE_DESC', 'With this building plan you are able to build the Great Granary or Great Warehouse in the Village with the artefact, or the whole account depending on the artefact. As long as you posses that artefact you are able to build and enlarge those buildings.');
tz_def('STORAGE_SMALL', 'Slight storage masterplan');
tz_def('STORAGE_SMALLVILLAGE', 'Builders Sketch');
tz_def('STORAGE_LARGE', 'Great storage masterplan');
tz_def('STORAGE_LARGEVILLAGE', 'Babylonian Tablet');
tz_def('CONFUSION_DESC', 'Cranny capacity is increased by a certain amount for each type of artefact. Catapults can only shoot random on villages within this artefacts power. Exceptions are the WW which can always be targeted and the treasure chamber which can always be targeted, except with the unique artefact. When aiming at a resource field only random resource fields can be hit, when aiming at a building only random buildings can be hit.');
tz_def('CONFUSION_SMALL', 'Rivals slight confusion');
tz_def('CONFUSION_SMALLVILLAGE', 'Map of the Hidden Caverns');
tz_def('CONFUSION_LARGE', 'Rivals great confusion');
tz_def('CONFUSION_LARGEVILLAGE', 'Bottomless Satchel');
tz_def('CONFUSION_UNIQUE', 'Rivals unique confusion');
tz_def('CONFUSION_UNIQUEVILLAGE', 'Trojan Horse');
tz_def('FOOL_DESC', 'Every 24 hours it gets a random effect, bonus, or penalty (all are possible with the exception of great warehouse, great granary and WW building plans). They change effect AND scope every 24 hours. The unique artefact will always take positive bonuses.');
tz_def('FOOL_SMALL', 'Artefact of the slight fool');
tz_def('FOOL_SMALLVILLAGE', 'Pendant of Mischief');
tz_def('FOOL_UNIQUE', 'Artefact of the unique fool');
tz_def('FOOL_UNIQUEVILLAGE', 'Forbidden Manuscript');
tz_def('WWVILLAGE', 'WW village');
tz_def('ARTEFACT', '<h1><b>Natars Artefacts</b></h1>

Whispering rumors echo through the villages, sharing legends told only by the best storytellers. It refers to NATARS, the most feared warrior of the TRAVIAN world. Their killing is the dream of any hero, the purpose of any fighter. No one knows how NATARS got to get such power, and their warriors so cruel. Determined to discover the source of the NATARS power, the fighters send a group of elite spies to spy them. I do not go through many hours and come back with fear in their eyes and balancing fantastic theories: it seems that the natural power comes from the mysterious objects they call artefacts that they stole from our ancestors. Try to steal the artefacts of her, and you can control their power.

<img src="/img/x.gif" class="ArtefactsAnnouncement">

The time has come for claiming artefacts. Collaborate with your alliance and bring your worriors to get these wanted objects. However, NATARS will not give up without war to the artefacts ... nor your enemies. If you are successful in retrieving artefacts and you will be able to reject enemies, you will be able to collect the rewards. Your buildings will become incredibly strong and mightest, and the troops will be much faster and will consume less food. Capture the artefacts, bring glory over your empire and become new legends for your followers.

To steal one, the following things must happen:

1. You must attack the village (NO Raid!)
2. WIN the Attack
3. Destroy the treasury
4. An empty treasury level 10 for SMALL ARTEFACTS and level 20 for LARGE ARTEFACT must be in the village where that attack came from
5. Have a hero in an attack

If not, the next attack on that village, winning with a hero and empty treasury will take the artefact.

To build a WW, you must own a plan yourself (you = the WW village owner) from lvl 0 to 50, from 51 to 100 you need an additional plan in your alliance! Two plans in the WW village account would not work!

The construction plans are conquerable immediately when they appear to the server. 

There will be a countdown in game, showing the exact time of the release, 5 days prior to the launch. ');

//WW Village Release Message
tz_def('WWVILLAGEMSG', '<h1><b>Wonder of the World Villages</b></h1>

Countless days have passed since the first battles upon the walls of the cursed villages of the Dread Natars, many armies of both the free ones and the Natarian empire struggled and died before the walls of the many strongholds from which the Natars had once ruled all creation. Now with the dust settled and a relative calm having settled in, armies began to count their losses and collect their dead, the stench of combat still lingering in the night air, a smell of a slaughter unforgettable in its extent and brutality yet soon to be dwarfed by yet others. The largest armies of the free ones and the Dread Natars were marshalling for yet another renewed assault upon the coveted former strongholds of the Natarian Empire.
Soon scouts arrived telling of a most awesome sight and a chilling reminder, a dread army of an unfathomable size had been spotted marshalling at the end of the world, the Natarian capital, a force so great and unstoppable that the dust from their march would choke off all light, a force so brutal and ruthless that it would crush all hope. The free people knew that they had to race now, race against time and the endless hordes of the Natarian Empire to raise a Wonder of the World to restore the world to peace and vanquish the Natarian threat.
But to raise such a great Wonder would be no easy task, one would need construction plans created in the distant past, plans of such an arcane nature that even the very wisest of sages knew not their contents or locations.
Tens of thousands of scouts roamed across all existence searching in vain for these mystical plans, looking in all places but the dreaded Natarian Capital, yet could not find them. Today however, they return bearing good news, they return baring the locations of the plans, hidden by the armies of the Natars inside secret strongholds constructed to be hidden from the eyes of man.
Now begins the final stretch, when the greatest armies of the Free people and the Natars will clash across the world for the fate of all that lies under heaven. This is the war that will echo across the eons, this is your war, and here you shall etch your name across history, here you shall become legend.

<img src="/img/x.gif" class="WWVillagesAnnouncement" title="'.WWVILLAGE.'" alt="'.WWVILLAGE.'">

To conquer one, the following things must happen:

1. You must attack the village (NO Raid!)
2. WIN the Attack
3. Destroy the RESIDENCE
4. You must decrease the loyalty to 0 with : SENATORS , CHIEF , CHIEFTAIN
5. You must have enough culture points to conquer the village

If not, the next attack on that village, winning with a SENATORS , CHIEF , CHIEFTAIN and empty slots in RESIDENCE/PALACE will take the village.

To build a WW, you must own a plan yourself (you = the WW village owner) from lvl 0 to 50, from 51 to 100 you need an additional plan in your alliance! Two plans in the WW village account would not work!

The construction plans are conquerable immediately when they appear to the server. 

There will be a countdown in game, showing the exact time of the release, '.(5 / SPEED).' days prior to the launch. ');

//Building Plans
tz_def('WILL_SPAWN_IN', 'will spawn in');
tz_def('PLAN', 'Ancient Construction Plan');
tz_def('PLANVILLAGE', 'WW Buildingplan');
tz_def('PLAN_DESC', 'With this ancient construction plan you will able to build World Wonder to level 50. to build further, your alliance must hold at least two plans.');
tz_def('PLAN_INFO', '<h1><b>World Wonder Construction Plans</b></h1>


Many moons ago the tribes of Travian were surprised by the unforeseen return of the Natars. This tribe from immemorial times surpassing all in wisdom, might and glory was about to trouble the free ones again. Thus they put all their efforts in preparing a last war against the Natars and vanquishing them forever. Many thought about the so-called &#39;Wonders of the World&#39;, a construction of many legends, as the only solution. It was told that it would render anyone invincible once completed. Ultimately making the constructors the rulers and conquerors of all known Travian. 

However, it was also told that one would need construction plans to construct such a building. Due to this fact, the architects devised cunning plans about how to store these safely. After a while, one could see temple-like buildings in many a city and metropolis - the Treasure Chambers (Treasuries). 

Sadly, no one - not even the wise and well versed - knew where to find these construction plans. The harder people tried to locate them, the more it seemed as if they where only legends. 

Today, however, this last secret will be revealed. Deprivations and endeavors of the past will not have been in vain, as today scouts of several tribes have successfully obtained the whereabouts of the construction plans. Well guarded by the Natars, they lie hidden in several oases to be found all over Travian. Only the most valiant heroes will be able to secure such a plan and bring it home safely so that the construction can begin. 

In the end, we will see whether the free tribes of Travian can once again outwit the Natars and vanquish them once and for all. Do not be so foolish as to assume that the Natars will leave without a fight, though!

<img src="/img/x.gif" class="WWBuildingPlansAnnouncement" title="'.PLAN.'" alt="'.PLAN.'">

To steal a set of Construction Plans from the Natars, the following things must happen:
- You must Attack the village (NOT Raid!)
- You must WIN the Attack
- You must DESTROY the Treasure Chamber (Treasury)
- Your Hero MUST be in that attack, as he is the only one who may carry the Construction Plans
- An empty level 10 Treasure Chamber (Treasury) MUST be in the village where that attack came from
NOTE: If the above criteria is not met during the attack, the next attack on that village which does meet the above criteria will take the Construction Plans.



To build a Treasure Chamber (Treasury), you will need a Main Building level 10 and the village MUST NOT be  contain a World Wonder.

To build a World Wonder, you must own the Construction Plans yourself (you = the World Wonder Village Owner) from level 0 to 50, and then from level 51 to 100 you will need an additional set of Construction Plans in your Alliance! Two sets of Construction Plans in the World Wonder Village Account will not work!');

//Admin setting - Admin/Templates/config.tpl & editServerSet.tpl
tz_def('EDIT_BACK', '返回');
tz_def('SERV_CONFIG', '伺服器配置');
tz_def('SERV_SETT', '伺服器設定');
tz_def('EDIT_SERV_SETT', '編輯伺服器設定');
tz_def('SERV_VARIABLE', '變數');
tz_def('SERV_VALUE', '值');
tz_def('CONF_SERV_NAME', 'Server Name');
tz_def('CONF_SERV_NAME_TOOLTIP', 'Name of the game server.');
tz_def('CONF_SERV_STARTED', 'Server Started');
tz_def('CONF_SERV_STARTED_TOOLTIP', 'Time when the game server was started. This parameter can not be changed on the installed game server.');
tz_def('CONF_SERV_TIMEZONE', 'Server Timezone');
tz_def('CONF_SERV_TIMEZONE_TOOLTIP', 'Timezone of the game server.');
tz_def('CONF_SERV_LANG', 'Language');
tz_def('CONF_SERV_LANG_TOOLTIP', 'The language that is used in the admin panel and for everyone on the game server by default.');
tz_def('CONF_SERV_SERVSPEED', 'Server Speed');
tz_def('CONF_SERV_SERVSPEED_TOOLTIP', 'The speed of the game server. The higher the speed of the game server, the faster all buildings are built, the studies and improvements in the smithies are carried out, the troops are quickly built and the productivity of all resources is increased.');
tz_def('CONF_SERV_TROOPSPEED', 'Troop Speed');
tz_def('CONF_SERV_TROOPSPEED_TOOLTIP', 'Speed of movement of troops on the game server. The higher this indicator, the faster the troops move across the map.');
tz_def('CONF_SERV_EVASIONSPEED', 'Evasion Speed');
tz_def('CONF_SERV_EVASIONSPEED_TOOLTIP', 'The evasion speed is the time that troops spend on the road to return home after evasion an attack.');
tz_def('CONF_SERV_STORMULTIPLER', 'Storage Multipler');
tz_def('CONF_SERV_STORMULTIPLER_TOOLTIP', 'A multiplier for the storage capacity warehouse and granary. The value 1 is equal to the capacity of 80,000 of each resource at the maximum level. If you set the value to 2, then the capacity at the maximum level will be 160,000 of each resource.<br><b>Note:</b> the amount of resources that will be generated by unoccupied oases for robbery depends on this value. The default is 800. If you set the value to 2, the maximum number for each resource being generated is 1600.');
tz_def('CONF_SERV_TRADCAPACITY', 'Trader Capacity');
tz_def('CONF_SERV_TRADCAPACITY_TOOLTIP', 'A multiplier for the capacity of resources that can be carried by one trader. The value of 1 equals 500 capacity for the Romans, 750 for the Gauls, 1000 for the Teutons. If you set the value to 2, then the capacity of the transferred resources will double accordingly, 1000, 1500, 2000.');
tz_def('CONF_SERV_CRANCAPACITY', 'Cranny Capacity');
tz_def('CONF_SERV_CRANCAPACITY_TOOLTIP', 'A multiplier for the capacity of resources in Cranny, which can be saved from robbery. The value of 1 is equal to 1000 for Romans and Teutons, 2000 for Gauls. If you set the value to 2, then the capacity of the Cranny will double to 2000 and 4000 respectively.');
tz_def('CONF_SERV_TRAPCAPACITY', 'Trapper Capacity');
tz_def('CONF_SERV_TRAPCAPACITY_TOOLTIP', 'A multiplier for the capacity of the trap of the Gauls, which can capture enemy soldiers even before attacking the village. The value of 1 is equal to the capacity of 400 at the 20 level of construction. If you set the value to 2, then the capacity will be 800.');
tz_def('CONF_SERV_NATUNITSMULTIPLIER', 'Natars Units Multiplier');
tz_def('CONF_SERV_NATUNITSMULTIPLIER_TOOLTIP', 'This parameter is responsible for the number of troops of Natars, on artefacts and WW villages.');
tz_def('CONF_SERV_NATARS_SPAWN_TIME', 'Natars Spawn');
tz_def('CONF_SERV_NATARS_SPAWN_TIME_TOOLTIP', 'After how long Natars and artefacts will spawn from the start date of the server, in days');
tz_def('CONF_SERV_NATARS_WW_SPAWN_TIME', 'World Wonders Spawn');
tz_def('CONF_SERV_NATARS_WW_SPAWN_TIME_TOOLTIP', 'After how long WW villages will spawn from the start date of the server, in days');
tz_def('CONF_SERV_NATARS_WW_BUILDING_PLAN_SPAWN_TIME', 'WW Building Plan Spawn');
tz_def('CONF_SERV_NATARS_WW_BUILDING_PLAN_SPAWN_TIME_TOOLTIP', 'After how long WW building plans will spawn from the start date of the server, in days');
tz_def('CONF_SERV_MAPSIZE', 'Map Size');
tz_def('CONF_SERV_MAPSIZE_TOOLTIP', 'The size of the map of the game world. Can not be changed on an already installed game server.');
tz_def('CONF_SERV_VILLEXPSPEED', 'Village Expanding Speed');
tz_def('CONF_SERV_VILLEXPSPEED_TOOLTIP', 'Speed, which affects the expansion of the empire. With a slow speed more culture points are needed to found new village, with a fast speed the required number of culture points is reduced.');
tz_def('CONF_SERV_BEGINPROTECT', 'Beginners Protection');
tz_def('CONF_SERV_BEGINPROTECT_TOOLTIP', 'Protection, which prohibits a certain time to attack the villages of new players.');
tz_def('CONF_SERV_REGOPEN', 'Register Open');
tz_def('CONF_SERV_REGOPEN_TOOLTIP', 'Allows to enable (True) or disable (False) the registration of players on the game server.');
tz_def('CONF_SERV_ACTIVMAIL', 'Activation Mail');
tz_def('CONF_SERV_ACTIVMAIL_TOOLTIP', 'If enabled (Yes), during registration it will be necessary to confirm email address. If disabled (No) does not require confirmation of e-mail.');
tz_def('CONF_SERV_QUEST', 'Quest');
tz_def('CONF_SERV_QUEST_TOOLTIP', 'Enable (Yes) or disable (No) the quest on the game server.');
tz_def('CONF_SERV_QTYPE', 'Quest Type');
tz_def('CONF_SERV_QTYPE_TOOLTIP', 'The quest type can be official which is a bit shorter, and extended which is longer.');
tz_def('CONF_SERV_DLR', 'Demolish - Level required');
tz_def('CONF_SERV_DLR_TOOLTIP', 'The required level of the main building, on which can carry out the demolition of buildings in the village.');
tz_def('CONF_SERV_WWSTATS', 'World Wonder - Statistics');
tz_def('CONF_SERV_WWSTATS_TOOLTIP', 'Enable (True) or disable (False) the display in the statistics of villages with a Wonder of the World.');
tz_def('CONF_SERV_NTRTIME', 'Nature Troops Regeneration Time');
tz_def('CONF_SERV_NTRTIME_TOOLTIP', 'Time through which the nature troops will be restored in oases.');
tz_def('CONF_SERV_OASIS_WOOD_PROD_MULT', 'Oasis Wood Production Multiplier');
tz_def('CONF_SERV_OASIS_WOOD_PROD_MULT_TOOLTIP', 'The base wood oasis production');
tz_def('CONF_SERV_OASIS_CLAY_PROD_MULT', 'Oasis Clay Production Multiplier');
tz_def('CONF_SERV_OASIS_CLAY_PROD_MULT_TOOLTIP', 'The base clay oasis production');
tz_def('CONF_SERV_OASIS_IRON_PROD_MULT', 'Oasis Iron Production Multiplier');
tz_def('CONF_SERV_OASIS_IRON_PROD_MULT_TOOLTIP', 'The base iron oasis production');
tz_def('CONF_SERV_OASIS_CROP_PROD_MULT', 'Oasis Crop Production Multiplier');
tz_def('CONF_SERV_OASIS_CROP_PROD_MULT_TOOLTIP', 'The base crop oasis production');
tz_def('CONF_SERV_MEDALINTERVAL', 'Medal Interval');
tz_def('CONF_SERV_MEDALINTERVAL_TOOLTIP', 'The time interval for issuing medals for the top players and alliances. If this parameter is changed on the installed server, the time interval changes after the subsequent issuance of the medals.');
tz_def('CONF_SERV_TOURNTHRES', 'Tourn Threshold');
tz_def('CONF_SERV_TOURNTHRES_TOOLTIP', 'The number of squares on the game map, after which Tournament Square will start working.');
tz_def('CONF_SERV_GWORKSHOP', 'Great Workshop');
tz_def('CONF_SERV_GWORKSHOP_TOOLTIP', 'Enable (True) or disable (False) the use of a Great Workshop in the game.');
tz_def('CONF_SERV_NATARSTAT', 'Show Natars in Statistics');
tz_def('CONF_SERV_NATARSTAT_TOOLTIP', 'Enable (True) or disable (False) the display of the Natars account in statistics.');
tz_def('CONF_SERV_PEACESYST', 'Peace system');
tz_def('CONF_SERV_PEACESYST_TOOLTIP', 'Enable or disable the Peace system. When the peace system is activated, players will be able to attack each other but instead of any actions in the reports there will be a congratulatory inscription. The troops will not die of hunger.');
tz_def('CONF_SERV_GRAPHICPACK', 'Graphic Pack');
tz_def('CONF_SERV_GRAPHICPACK_TOOLTIP', 'Enable (Yes) or disable (No) the ability to use the graphics package.');
tz_def('CONF_SERV_ERRORREPORT', 'Error Reporting');
tz_def('CONF_SERV_ERRORREPORT_TOOLTIP', 'Enable (Yes) or disable (No) the display of error reports on the game server.');

//Admin setting - Admin/Templates/config.tpl & editPlusSet.tpl
tz_def('PLUS_LOGO', '<b><font color="#71D000">P</font><font color="#FF6F0F">l</font><font color="#71D000">u</font><font color="#FF6F0F">s</font></b>');
tz_def('PLUS_CONFIGURATION', PLUS_LOGO.' Configuration');
tz_def('PLUS_SETT', PLUS_LOGO.' Settings');
tz_def('EDIT_PLUS_SETT', 'Edit '.PLUS_LOGO.' Setting');
tz_def('EDIT_PLUS_SETT1', 'Edit PLUS Setting');
tz_def('CONF_PLUS_PAYPALEMAIL', '<a href="https://www.paypal.com" target="_blank">PayPal</a> E-Mail Address');
tz_def('CONF_PLUS_PAYPALEMAIL_TOOLTIP', 'The E-Mail Address specified at registration on PayPal.<br><font color="red"><b>Must be Business or Premier account!</b></font>');
tz_def('CONF_PLUS_CURRENCY', 'Payment Currency');
tz_def('CONF_PLUS_CURRENCY_TOOLTIP', 'The currency to be used for payment.');
tz_def('CONF_PLUS_PACKAGEGOLDA', 'Package &#34;A&#34; Amount of Gold');
tz_def('CONF_PLUS_PACKAGEGOLDA_TOOLTIP', 'The amount of gold issued for the payment of the package &#34;A&#34;.');
tz_def('CONF_PLUS_PACKAGEPRICEA', 'Package &#34;A&#34; Amount of Price');
tz_def('CONF_PLUS_PACKAGEPRICEA_TOOLTIP', 'The amount necessary to pay the cost of package &#34;A&#34;.');
tz_def('CONF_PLUS_PACKAGEGOLDB', 'Package &#34;B&#34; Amount of Gold');
tz_def('CONF_PLUS_PACKAGEGOLDB_TOOLTIP', 'The amount of gold issued for the payment of the package &#34;B&#34;.');
tz_def('CONF_PLUS_PACKAGEPRICEB', 'Package &#34;B&#34; Amount of Price');
tz_def('CONF_PLUS_PACKAGEPRICEB_TOOLTIP', 'The amount necessary to pay the cost of package &#34;B&#34;.');
tz_def('CONF_PLUS_PACKAGEGOLDC', 'Package &#34;C&#34; Amount of Gold');
tz_def('CONF_PLUS_PACKAGEGOLDC_TOOLTIP', 'The amount of gold issued for the payment of the package &#34;C&#34;.');
tz_def('CONF_PLUS_PACKAGEPRICEC', 'Package &#34;C&#34; Amount of Price');
tz_def('CONF_PLUS_PACKAGEPRICEC_TOOLTIP', 'The amount necessary to pay the cost of package &#34;C&#34;.');
tz_def('CONF_PLUS_PACKAGEGOLDD', 'Package &#34;D&#34; Amount of Gold');
tz_def('CONF_PLUS_PACKAGEGOLDD_TOOLTIP', 'The amount of gold issued for the payment of the package &#34;D&#34;.');
tz_def('CONF_PLUS_PACKAGEPRICED', 'Package &#34;D&#34; Amount of Price');
tz_def('CONF_PLUS_PACKAGEPRICED_TOOLTIP', 'The amount necessary to pay the cost of package &#34;D&#34;.');
tz_def('CONF_PLUS_PACKAGEGOLDE', 'Package &#34;E&#34; Amount of Gold');
tz_def('CONF_PLUS_PACKAGEGOLDE_TOOLTIP', 'The amount of gold issued for the payment of the package &#34;E&#34;.');
tz_def('CONF_PLUS_PACKAGEPRICEE', 'Package &#34;E&#34; Amount of Price');
tz_def('CONF_PLUS_PACKAGEPRICEE_TOOLTIP', 'The amount necessary to pay the cost of package &#34;E&#34;.');
tz_def('CONF_PLUS_ACCDURATION', PLUS_LOGO.' account duration');
tz_def('CONF_PLUS_ACCDURATION_TOOLTIP', 'The duration of the game function '.PLUS_LOGO.' for the account at the time of activation by the player.');
tz_def('CONF_PLUS_PRODUCTDURATION', '+25% production duration');
tz_def('CONF_PLUS_PRODUCTDURATION_TOOLTIP', 'The duration of the game function +25% production duration for the account at the time of activation by the player.');

//Admin setting - Admin/Templates/config.tpl & editLogSet.tpl
tz_def('LOG_SETT', 'Log Settings');
tz_def('EDIT_LOG_SETT', 'Edit Log Setting');
tz_def('CONF_LOG_BUILD', 'Log Build');
tz_def('CONF_LOG_BUILD_TOOLTIP', 'Enable (Yes) or disable (No) the display of logs for the construction of buildings in the village.');
tz_def('CONF_LOG_TECHNOLOGY', 'Log Technology');
tz_def('CONF_LOG_TECHNOLOGY_TOOLTIP', 'Enable (Yes) or disable (No) display logs to improve troops in Blacksmith and Armoury.');
tz_def('CONF_LOG_LOGIN', 'Log Login');
tz_def('CONF_LOG_LOGIN_TOOLTIP', 'Enable (Yes) or disable (No) the display logs players login the game.');
tz_def('CONF_LOG_GOLD', 'Log Gold');
tz_def('CONF_LOG_GOLD_TOOLTIP', 'Enable (Yes) or disable (No) the display of gold use logs in-game by players.');
tz_def('CONF_LOG_ADMIN', 'Log Admin');
tz_def('CONF_LOG_ADMIN_TOOLTIP', 'Enable (Yes) or disable (No) the display of logs for administrator actions in the control panel.');
tz_def('CONF_LOG_WAR', 'Log War');
tz_def('CONF_LOG_WAR_TOOLTIP', 'Enable (Yes) or disable (No) the display of logs attacks on players in the game.');
tz_def('CONF_LOG_MARKET', 'Log Market');
tz_def('CONF_LOG_MARKET_TOOLTIP', 'Enable (Yes) or disable (No) the display of the logs of the use of the market in the game by the players.');
tz_def('CONF_LOG_ILLEGAL', 'Log Illegal');
tz_def('CONF_LOG_ILLEGAL_TOOLTIP', 'Enable (Yes) or disable (No) the display of illegal logs. (I do not know exactly what it is)');

//Admin setting - Admin/Templates/config.tpl & editNewsboxSet.tpl
tz_def('NEWSBOX_SETT', 'Newsbox Settings');
tz_def('EDIT_NEWSBOX_SETT', 'Edit Newsbox Setting');
tz_def('EDIT_NEWSBOX1', 'Newsbox 1');
tz_def('EDIT_NEWSBOX1_TOOLTIP', 'Enable or disable the display of the Newsbox 1. Displayed on the authorization page and on the game pages.');
tz_def('EDIT_NEWSBOX2', 'Newsbox 2');
tz_def('EDIT_NEWSBOX2_TOOLTIP', 'Enable or disable the display of the Newsbox 2. Displayed on the authorization page and on the game pages.');
tz_def('EDIT_NEWSBOX3', 'Newsbox 3');
tz_def('EDIT_NEWSBOX3_TOOLTIP', 'Enable or disable the display of the Newsbox 3. Displayed on the authorization page and on the game pages.');

//Admin setting - Admin/Templates/config.tpl SQL Settings
tz_def('SQL_SETTINGS', 'SQL Settings');
tz_def('CONF_SQL_HOSTNAME', 'Hostname');
tz_def('CONF_SQL_HOSTNAME_TOOLTIP', 'The name of the server where MySQL is started (by default is: localhost).');
tz_def('CONF_SQL_PORT', 'Port');
tz_def('CONF_SQL_PORT_TOOLTIP', 'MySQL port for remote connection. The standard port for connecting is: 3306.');
tz_def('CONF_SQL_DBUSER', 'DB Username');
tz_def('CONF_SQL_DBUSER_TOOLTIP', 'The user name to connect to the database.');
tz_def('CONF_SQL_DBPASS', 'DB Password');
tz_def('CONF_SQL_DBPASS_TOOLTIP', 'Password from the user to connect to the database.');
tz_def('CONF_SQL_DBNAME', 'DB Name');
tz_def('CONF_SQL_DBNAME_TOOLTIP', 'Name of the database to which you are connecting.');
tz_def('CONF_SQL_TBPREFIX', 'Table Prefix');
tz_def('CONF_SQL_TBPREFIX_TOOLTIP', 'The prefix used for the database tables.');
tz_def('CONF_SQL_DBTYPE', 'DB Type');
tz_def('CONF_SQL_DBTYPE_TOOLTIP', 'The type of database used.');

//Admin setting - Admin/Templates/config.tpl & editExtraSet.tpl
tz_def('EXTRA_SETT', 'Extra Settings');
tz_def('EDIT_EXTRA_SETT', 'Edit Extra Settings');
tz_def('CONF_EXTRA_LIMITMAIL', 'Limit Mailbox');
tz_def('CONF_EXTRA_LIMITMAIL_TOOLTIP', 'Enable (Yes) or disable (No) the mailbox limit.');
tz_def('CONF_EXTRA_MAXMAIL', 'Max number of mails');
tz_def('CONF_EXTRA_MAXMAIL_TOOLTIP', 'The maximum number of messages that can fit in the mailbox.');

//Admin setting - Admin/Templates/config.tpl & editAdminInfo.tpl
tz_def('ADMIN_INFO', 'Admin Information');
tz_def('EDIT_ADMIN_INFO', 'Edit Admin Information');
tz_def('CONF_ADMIN_NAME', 'Admin Name');
tz_def('CONF_ADMIN_NAME_TOOLTIP', 'Name for the administrator account.');
tz_def('CONF_ADMIN_EMAIL', 'Admin E-Mail');
tz_def('CONF_ADMIN_EMAIL_TOOLTIP', 'The email address for the administrator account.');
tz_def('CONF_ADMIN_SHOWSTATS', 'Include Admin in Stats');
tz_def('CONF_ADMIN_SHOWSTATS_TOOLTIP', 'Enable (True) or disable (False) the display of the administrator account in the general statistics of players.');
tz_def('CONF_ADMIN_SUPPMESS', 'Include Support Messages');
tz_def('CONF_ADMIN_SUPPMESS_TOOLTIP', 'Enable (True) or disable (False) the sending of messages to the mailbox of the administrator addressed to Support.');
tz_def('CONF_ADMIN_RAIDATT', 'Allow Raided and Attacked');
tz_def('CONF_ADMIN_RAIDATT_TOOLTIP', 'Enable (True) or disable (False) the ability to Raided and Attacked an administrator.');

/*
|--------------------------------------------------------------------------
|   Index
|--------------------------------------------------------------------------
*/

$lang['index'][0][1] = '歡迎來到 '.SERVER_NAME;
$lang['index'][0][2] = '手冊';
$lang['index'][0][3] = '現在就能免費遊玩!';
$lang['index'][0][4] = '什麼是 '.SERVER_NAME;
$lang['index'][0][5] = 'Travian曾是風靡全球的網頁遊戲，此版本是由開源社群開發者貢獻的經典T3.6版本TravianZ，詳見GitHub。漢化文字由Muchen Fan完成。本伺服器僅供測試、交流、學習之用。請不要使用遊戲內的充值介面。'.SERVER_NAME.' is a <b>browser game</b> featuring an engaging ancient world with thousands of other real players.</p><p>It&#39;s <strong>free to play</strong> and requires <strong>no downloads</strong>.';
$lang['index'][0][6] = '點選此處即刻開始遊玩 '.SERVER_NAME;
$lang['index'][0][7] = '玩家總數';
$lang['index'][0][8] = '活躍玩家';
$lang['index'][0][9] = '線上玩家';
$lang['index'][0][10] = '關於遊戲';
$lang['index'][0][11] = '你將從一個小村莊的頭領開始，譜寫英雄的故事。';
$lang['index'][0][12] = '建立村莊，發動戰爭，與鄰居建立貿易路線。';
$lang['index'][0][13] = '與其他真實玩家或對抗、或合作，征服Travian遊戲世界。';
$lang['index'][0][14] = '新聞';
$lang['index'][0][15] = 'FAQ';
$lang['index'][0][16] = '截圖';
$lang['forum'] = '論壇';
$lang['register'] = '註冊';
$lang['login'] = '登入';
$lang['screenshots']['title1'] = '村莊';
$lang['screenshots']['desc1'] = '村莊建築';
$lang['screenshots']['title2'] = '資源';
$lang['screenshots']['desc2'] = '村莊資源分為木材、黏土、鐵礦和糧食';
$lang['screenshots']['title3'] = '地圖';
$lang['screenshots']['desc3'] = '你的村莊在地圖上的位置';
$lang['screenshots']['title4'] = '建造建築';
$lang['screenshots']['desc4'] = '建造建築和提升等級的方式';
$lang['screenshots']['title5'] = '報告';
$lang['screenshots']['desc5'] = '你的攻擊報告';
$lang['screenshots']['title6'] = '統計';
$lang['screenshots']['desc6'] = '在統計中檢視你的排名';
$lang['screenshots']['title7'] = '狼或羊';
$lang['screenshots']['desc7'] = '你可以選擇發展軍事或是發展經濟、或是兩者齊頭並進';

// ===== i18n nouvelles constantes (etape 2) =====
tz_def('TZ_ACTIVATION_AVAILBLE_IN', '可啟用時間：');
tz_def('TZ_ACTIVATION_CODE', '啟用碼：');
tz_def('TZ_ADD', '新增');
tz_def('TZ_ADD_2', '新增');
tz_def('TZ_ALLIANCE_ID', '聯盟 ID');
tz_def('TZ_ARRIVED', '到達：');
tz_def('TZ_ASSIGN_TO_POSITION', '分配到職位');
tz_def('TZ_AS_SOON_AS_A_PLAYER_YOU_INVITED_FO', '您邀請的玩家一旦建立其');
tz_def('TZ_ATTACKS', '攻擊');
tz_def('TZ_BOLD', '粗體');
tz_def('TZ_BUILDING', '建築');
tz_def('TZ_CATAPULT_TARGET', '投石車目標');
tz_def('TZ_CLICK_TO_COPY', '點選複製');
tz_def('TZ_CLIMBERS_OF_THE_WEEK', '本週上升榜');
tz_def('TZ_CLOCK', '時鐘');
tz_def('TZ_CONTINUE_WITH_THE_NEXT_TASK', '繼續下一個任務。');
tz_def('TZ_CREATE', '建立');
tz_def('TZ_CREATE_A_NEW_LIST', '建立新列表');
tz_def('TZ_DESTINATION', '目的地：');
tz_def('TZ_DOES_NOT_EXIST', '不存在。');
tz_def('TZ_DOWNLOAD', '下載');
tz_def('TZ_EVENT', '事件');
tz_def('TZ_FEATURES_OF_TRAVIAN', 'Travian 的功能');
tz_def('TZ_FORUM_NAME', '論壇名稱');
tz_def('TZ_FORWARD', '下一頁');
tz_def('TZ_GOLD', '金幣。');
tz_def('TZ_HERO_DEF_BONUS', '英雄（防禦加成）');
tz_def('TZ_HERO_FIGHTING_STRENGTH', '英雄（戰鬥力）');
tz_def('TZ_HERO_OFF_BONUS', '英雄（進攻加成）');
tz_def('TZ_HOUR', '小時');
tz_def('TZ_HOW_IS_IT_DONE', '如何操作？');
tz_def('TZ_HRS', '小時');
tz_def('TZ_HRS_2', '小時');
tz_def('TZ_IF_YOU_GET_NEW_PLAYERS_TO_OPEN_AN', '如果您帶來的新玩家開設賬戶並建立第二個村莊，您將獲得');
tz_def('TZ_IN_YOUR_POST_BECAUSE_IT_CAN_CAUSE', '因為它可能導致 BBCode 系統出現問題。');
tz_def('TZ_ITALIC', '斜體');
tz_def('TZ_LAST_TARGETS', '最近的目標：');
tz_def('TZ_LIST_NAME', '列表名稱：');
tz_def('TZ_LOOK_FOR_YOUR_RANK_IN_THE_STATISTI', '在統計中查詢您的排名並在此輸入。');
tz_def('TZ_MACEMAN', '棍棒兵');
tz_def('TZ_MEMBERS', '成員');
tz_def('TZ_MEMBER_SINCE', '加入時間');
tz_def('TZ_NAME', '名稱：');
tz_def('TZ_NO', '編號');
tz_def('TZ_NOT_CODED_YET', '（尚未實現）');
tz_def('TZ_NO_EMAIL_RECEIVED', '沒有收到電子郵件？');
tz_def('TZ_N_15_GOLD', '15 金幣');
tz_def('TZ_N_1_INVITE_YOUR_FRIENDS_VIA_EMAIL', '1) 透過電子郵件邀請好友');
tz_def('TZ_N_20_GOLD', '20 金幣');
tz_def('TZ_N_2_COPY_YOUR_PERSONAL_REF_LINK_AN', '2) 複製您的個人推薦連結並分享！');
tz_def('TZ_N_50_GOLD', '50 金幣');
tz_def('TZ_OK_2', '確定');
tz_def('TZ_OPEN_FORUM_FOR_THE_FOLLOWING_PLAYE', '向以下玩家開放論壇');
tz_def('TZ_OPEN_FOR_MORE_ALLIANCES', '向更多聯盟開放');
tz_def('TZ_ORDER', '順序：');
tz_def('TZ_OTHER', '其他');
tz_def('TZ_OWNER', '擁有者：');
tz_def('TZ_PAY_SECURELY_WITH_PAYPAL', '使用 PayPal 安全付款。');
tz_def('TZ_PLAYERS_BROUGHT_IN', '已帶來的玩家');
tz_def('TZ_POST_NEW_THREAD', '釋出新主題');
tz_def('TZ_PREVIEW', '預覽');
tz_def('TZ_PREVIEW_2', '預覽');
tz_def('TZ_PROGRESS_OF_YOUR_INVITED_FRIENDS', '您邀請的好友的進度');
tz_def('TZ_QUIT_ALLIANCE', '退出聯盟');
tz_def('TZ_REGISTER_FOR_THE_GAME', '註冊遊戲');
tz_def('TZ_REGISTRATION', '註冊');
tz_def('TZ_SENT', '已傳送：');
tz_def('TZ_SMILIES', '表情');
tz_def('TZ_SMILIES_2', '表情');
tz_def('TZ_STONEMASON_S_LODGE', '石匠鋪');
tz_def('TZ_TAG', '標籤：');
tz_def('TZ_TARGET_VILLAGE', '目標村莊：');
tz_def('TZ_TASK_10_CRANNY', '任務 10：藏匿處');
tz_def('TZ_TASK_11_TO_TWO', '任務 11：升至二級。');
tz_def('TZ_TASK_12_INSTRUCTIONS', '任務 12：說明');
tz_def('TZ_TASK_13_MAIN_BUILDING', '任務 13：主建築');
tz_def('TZ_TASK_14_ADVANCED', '任務 14：進階！');
tz_def('TZ_TASK_16_ECONOMY', '任務 16：經濟');
tz_def('TZ_TASK_16_MILITARY', '任務 16：軍事');
tz_def('TZ_TASK_17_BARRACKS', '任務 17：兵營');
tz_def('TZ_TASK_17_WAREHOUSE', '任務 17：倉庫');
tz_def('TZ_TASK_18_MARKETPLACE', '任務 18：市場。');
tz_def('TZ_TASK_18_TRAIN', '任務 18：訓練。');
tz_def('TZ_TASK_19_EVERYTHING_TO_2', '任務 19：全部升至 2 級。');
tz_def('TZ_TASK_20_ALLIANCE', '任務 20：聯盟。');
tz_def('TZ_TASK_21_MAIN_BUILDING_TO_LEVEL_5', '任務 21：主建築升至 5 級');
tz_def('TZ_TASK_22_GRANARY_TO_LEVEL_3', '任務 22：糧倉升至 3 級。');
tz_def('TZ_TASK_23_WAREHOUSE_TO_LEVEL_7', '任務 23：倉庫升至 7 級。');
tz_def('TZ_TASK_24_ALL_TO_FIVE', '任務 24：全部升至五級！');
tz_def('TZ_TASK_25_PALACE_OR_RESIDENCE', '任務 25：宮殿還是官邸？');
tz_def('TZ_TASK_26_3_SETTLERS', '任務 26：3 個殖民者。');
tz_def('TZ_TASK_27_NEW_VILLAGE', '任務 27：新村莊。');
tz_def('TZ_TASK_3_YOUR_VILLAGE_S_NAME', '任務 3：您的村莊名稱');
tz_def('TZ_TASK_9_DOVE_OF_PEACE', '任務 9：和平鴿');
tz_def('TZ_TERMS', '條款');
tz_def('TZ_THE_ALLIANCE', '該聯盟');
tz_def('TZ_THE_LARGEST_ALLIANCES', '最大的聯盟');
tz_def('TZ_THE_USER', '該使用者');
tz_def('TZ_THREAD', '主題');
tz_def('TZ_TOP_10', '前 10 名');
tz_def('TZ_TOTAL', '總計');
tz_def('TZ_TOWNHALL', '市政廳');
tz_def('TZ_TRAVIAN', 'Travian');
tz_def('TZ_TRAVIANX', 'TravianX');
tz_def('TZ_TRAVIANZ', 'TravianZ');
tz_def('TZ_TRAVIAN_GAMES', 'Travian Games');
tz_def('TZ_UNDERLINE', '下劃線');
tz_def('TZ_UNDERLINED', '下劃線');
tz_def('TZ_UNKNOWN', '未知');
tz_def('TZ_UNTIL_THE_NEXT_LEVEL', '直到下一級');
tz_def('TZ_USER_ID', '使用者 ID');
tz_def('TZ_VILLAGE', '村莊：');
tz_def('TZ_VILLAGE_OVERVIEW', '村莊概覽');
tz_def('TZ_WAIT_INSTANT', '等待：即時');
tz_def('TZ_WARNING', '警告：');
tz_def('TZ_WOOD', '木材');
tz_def('TZ_YOUR_PERSONAL_REF_LINK', '您的個人推薦連結：');
tz_def('TZ_YOU_CAN_T_USE_THE_VALUES', '您不能使用這些值');
tz_def('TZ_YOU_HAVE_NOT_BROUGHT_IN_ANY_NEW_PL', '您還沒有帶來任何新玩家。');

// ===== i18n etape 2 (lot suivant) =====
tz_def('TZ_ACCOUNT_IS_ADMIN_OR_MH', '賬戶為管理員或多獵手');
tz_def('TZ_ACCOUNT_IS_NOT_SCHEDULED_FOR_DELET', '賬戶未安排刪除');
tz_def('TZ_ACCOUNT_STATEMENT', '賬戶對賬單');
tz_def('TZ_ACTIVATE_VACATION_MODE', '啟用度假模式');
tz_def('TZ_ADD_RAID', '新增掠奪');
tz_def('TZ_ADD_SLOT', '新增槽位');
tz_def('TZ_ADVANTAGES', '優勢');
tz_def('TZ_AFTER_PAYMENT_YOU_WILL_BE_CREDITED', '付款後將自動到賬。');
tz_def('TZ_AGRESOR', '進攻方');
tz_def('TZ_ALLIANCE_DIPLOMACY', '聯盟外交');
tz_def('TZ_ALLIANCE_EVENTS', '聯盟事件');
tz_def('TZ_ALLIANCE_FORUM', '聯盟論壇');
tz_def('TZ_ALLIANCE_MEMBERS', '聯盟成員。');
tz_def('TZ_ALLY_CHAT', '聯盟聊天');
tz_def('TZ_AM', '上午');
tz_def('TZ_AND_LATER_YOUR_VILLAGE_COULD_LOOK', '……稍後您的村莊可能會變成那樣。');
tz_def('TZ_AND_QUIT_THE_ALLIANCE_AFTERWARDS', '之後退出聯盟。');
tz_def('TZ_ASSIGN_RIGHTS', '分配許可權');
tz_def('TZ_ATTENTION_USE_ONLY_TRUSTWORTHY_GRA', '注意！只使用可信的圖形包');
tz_def('TZ_AUTHOR', '作者');
tz_def('TZ_BEGINNERS_PROT', '新手保護');
tz_def('TZ_BEST_PLAYER', '最佳玩家');
tz_def('TZ_BUILDING_SITE', '建築空地');
tz_def('TZ_BUILD_A_PALACE_OR_RESIDENCE_TO_LEV', '將宮殿或官邸建至 10 級。');
tz_def('TZ_BUILD_CROPPER', '建造高產糧村');
tz_def('TZ_BUY_IT_IN_THE_GOLD_SHOP', '在金幣商店購買');
tz_def('TZ_CELEBRATION_STILL_NEEDS', '慶典還需要：');
tz_def('TZ_CENTRE', '中心：');
tz_def('TZ_CHANGE_NAME', '更改名稱');
tz_def('TZ_CHANGE_YOUR_VILLAGE_S_NAME_TO_SOME', '給您的村莊起個好聽的名字。');
tz_def('TZ_CHINESE', '簡體中文');
tz_def('TZ_CHINESE_TW', '繁體中文');
tz_def('TZ_CLAY_25_5_GOLD', '黏土 +25%（5 金幣）');
tz_def('TZ_CLOSED_FORUM', '封閉論壇');
tz_def('TZ_CLOSE_ADRESSBOOK', '關閉通訊錄');
tz_def('TZ_COMBAT_SIMULATOR', '戰鬥模擬器');
tz_def('TZ_COMPLETE_DEMOLITION_10', '完全拆除（10');
tz_def('TZ_CONFEDERATION_FORUM', '聯邦論壇');
tz_def('TZ_CONFIRM_WITH_PASSWORD', '用密碼確認：');
tz_def('TZ_CONSTRUCT_A_CRANNY', '建造藏匿處。');
tz_def('TZ_CONSTRUCT_A_GRANARY', '建造糧倉。');
tz_def('TZ_CONSTRUCT_A_RALLY_POINT', '建造集結點。');
tz_def('TZ_CONSTRUCT_A_WOODCUTTER', '建造伐木場。');
tz_def('TZ_CONSTRUCT_BARRACKS', '建造兵營。');
tz_def('TZ_CONSTRUCT_WAREHOUSE', '建造倉庫。');
tz_def('TZ_CP_DAY', '文化點/天');
tz_def('TZ_CROP_25_5_GOLD', '糧食 +25%（5 金幣）');
tz_def('TZ_DATE_AND_TIME', '日期和時間');
tz_def('TZ_DECLARE_WAR', '宣戰');
tz_def('TZ_DEFAULT', '預設：');
tz_def('TZ_DELETE_ACCOUNT', '刪除賬戶？');
tz_def('TZ_DIFFERENT_EMAIL_ADDRESS', '其他電子郵件地址');
tz_def('TZ_DOWNLOAD_FROM', '下載自');
tz_def('TZ_DO_I_NEED_PLUS_TO_USE_OTHER_FEATUR', '我需要 Plus 才能使用其他功能嗎？');
tz_def('TZ_EARN_GOLD', '賺取金幣');
tz_def('TZ_EDIT_ANSWER', '編輯回答');
tz_def('TZ_EDIT_ANSWER_2', '編輯回答');
tz_def('TZ_EDIT_FORUM', '編輯論壇');
tz_def('TZ_EDIT_SLOT', '編輯槽位');
tz_def('TZ_EDIT_TOPIC', '編輯主題');
tz_def('TZ_ENDS_ON', '結束於');
tz_def('TZ_ENGLISH', '英語');
tz_def('TZ_ENTER_HOW_MUCH_LUMBER_THE_BARRACKS', '輸入兵營消耗的木材數量');
tz_def('TZ_EU_DD_MM_YY_24H', '歐盟 (dd.mm.yy 24h)');
tz_def('TZ_EXAMPLE', '示例：');
tz_def('TZ_EXISTING_RELATIONSHIPS', '現有關係');
tz_def('TZ_EXTEND_ALL_RESOURCE_TILES_TO_LEVEL', '將所有資源田升至 1 級。');
tz_def('TZ_EXTEND_ALL_RESOURCE_TILES_TO_LEVEL_2', '將所有資源田升至 2 級。');
tz_def('TZ_EXTEND_ONE_CLAY_PIT', '升級一塊黏土坑。');
tz_def('TZ_EXTEND_ONE_CROPLAND', '升級一塊農田。');
tz_def('TZ_EXTEND_ONE_IRON_MINE', '升級一座鐵礦。');
tz_def('TZ_EXTEND_ONE_OF_EACH_RESOURCE_TILE_T', '將每種資源田各一塊升至 2 級。');
tz_def('TZ_EXTEND_YOUR_MAIN_BUILDING_TO_LEVEL', '將主建築升至 3 級。');
tz_def('TZ_FINISH', '完成');
tz_def('TZ_FOLLOWING_CAUSES_ARE_POSSIBLE', '可能的原因如下：');
tz_def('TZ_FOLLOW_THIS_LINK_TO', '點選此連結以');
tz_def('TZ_FOREIGN_OFFERS', '外部報價');
tz_def('TZ_FORUM_TYPE', '論壇型別');
tz_def('TZ_FOUND_A_NEW_VILLAGE', '建立一個新村莊。');
tz_def('TZ_FREE', '免費！');
tz_def('TZ_FRENCH', '法語');
tz_def('TZ_FRIEND_EMAIL_COM', 'friend@email.com');
tz_def('TZ_GAME_LANGUAGE', '遊戲語言');
tz_def('TZ_GITHUB', 'Github');
tz_def('TZ_GRAPHIC_PACK_FOUND', '已找到圖形包。');
tz_def('TZ_GRAPHIC_PACK_SETTINGS', '圖形包設定');
tz_def('TZ_GREAT_STABLES', '大馬廄');
tz_def('TZ_HERE', '這裡');
tz_def('TZ_HERE_YOU_CAN_KICK_THE_PLAYERS_FROM', '您可以在此踢出聯盟中的玩家。');
tz_def('TZ_HERE_YOU_FIND_YOUR_RESOURCE_FIELDS', '您可以在此找到您的資源田');
tz_def('TZ_HINT', '提示');
tz_def('TZ_HOW_DO_I_GET_GOLD', '如何獲得金幣？');
tz_def('TZ_INACTIVE_DURING_VACATION', '度假期間不活躍');
tz_def('TZ_INFORMATION_ON_HAPPENINGS_IN_YOUR', '您村莊中發生事件的資訊');
tz_def('TZ_INITIATE_PAYMENT_BY_PAYPAL', '透過 PayPal 發起付款');
tz_def('TZ_INVITATIONS', '邀請：');
tz_def('TZ_INVITE_A_PLAYER_INTO_THE_ALLIANCE', '邀請玩家加入聯盟');
tz_def('TZ_INVITE_BY_E_MAIL_OR_SHARE_YOUR_REF', '透過電子郵件邀請或分享您的推薦連結。');
tz_def('TZ_IN_DESCRIPTION', '在描述中。');
tz_def('TZ_IN_THE_VILLAGE_YOU_CAN_BUILD_BUILD', '在村莊中您可以建造建築');
tz_def('TZ_IRON_25_5_GOLD', '鐵 +25%（5 金幣）');
tz_def('TZ_ISO_YY_MM_DD_24H', 'ISO (yy/mm/dd 24h)');
tz_def('TZ_ITALIAN', '義大利語');
tz_def('TZ_SPANISH', '西班牙語');
tz_def('TZ_I_ACTIVATED_PLUS_BUT_PRODUCTION_DI', '我啟用了 Plus，但產量沒有增加。');
tz_def('TZ_JOIN_AN_ALLIANCE', '加入聯盟');
tz_def('TZ_JOIN_AN_ALLIANCE_OR_FOUND_ONE_ON_Y', '加入聯盟或自己建立一個。');
tz_def('TZ_JUL', '7月');
tz_def('TZ_JUN', '6月');
tz_def('TZ_KICK_ALL_MEMBERS', '踢出所有成員');
tz_def('TZ_KICK_PLAYER', '踢出玩家：');
tz_def('TZ_LANGUAGE_SETTINGS', '語言設定');
tz_def('TZ_LAST_POST', '最新帖子');
tz_def('TZ_LAST_RAID', '最近掠奪');
tz_def('TZ_LINKS', '連結：');
tz_def('TZ_LINK_TO_THE_FORUM', '論壇連結');
tz_def('TZ_LOG_IN', '登入');
tz_def('TZ_LUMBER_25_5_GOLD', '木材 +25%（5 金幣）');
tz_def('TZ_MAINTENANCE_OFF', '維護已關閉');
tz_def('TZ_MAINTENANCE_ON', '維護已開啟');
tz_def('TZ_MAJOR_CHANGES', '主要更改：');
tz_def('TZ_MAP_2', '地圖：');
tz_def('TZ_MAXIMUM_VACATION', '最長度假：');
tz_def('TZ_MESSAGES', '訊息：');
tz_def('TZ_MESSAGE_3', '訊息');
tz_def('TZ_MILITARY_EVENTS', '軍事事件');
tz_def('TZ_MINIMUM_VACATION', '最短度假：');
tz_def('TZ_MINOR_CHANGES', '次要更改：');
tz_def('TZ_MISCELLANEOUS', '雜項');
tz_def('TZ_MORE_GRAPHIC_PACKS', '更多圖形包');
tz_def('TZ_MORE_INFO', '更多資訊：');
tz_def('TZ_MOVE_TOPIC', '移動主題');
tz_def('TZ_MULTIHUNTER', '多獵手：');
tz_def('TZ_NEW_FORUM', '新論壇');
tz_def('TZ_NONE_OF_THE_PACKAGES_ARE_REFUNDABL', '所有套餐均不可退款！');
tz_def('TZ_NOT_ENOUGH_RESOURCE', '資源不足');
tz_def('TZ_NO_MARKETPLACE_ACTIVITY', '無市場活動');
tz_def('TZ_NO_OWNERSHIP_OF_AN_ARTIFACT_VILLAG', '未擁有神器村莊');
tz_def('TZ_NO_OWNERSHIP_OF_A_WONDER_OF_THE_WO', '未擁有世界奇蹟村莊');
tz_def('TZ_NO_REINFORCING_TROOPS_SENT_RECEIVE', '無增援部隊派出/接收');
tz_def('TZ_NO_REPORTS_FOR_TRANSFERS_FROM_FORE', '無來自外部村莊轉移的報告。');
tz_def('TZ_NO_REPORTS_FOR_TRANSFERS_TO_FOREIG', '無發往外部村莊轉移的報告。');
tz_def('TZ_NO_REPORTS_FOR_TRANSFERS_TO_OWN_VI', '無發往自己村莊轉移的報告。');
tz_def('TZ_N_14_DAYS', '14 天');
tz_def('TZ_N_1_1_TRADE_WITH_THE_NPC_MERCHANT', '與 NPC 商人 1:1 交易');
tz_def('TZ_N_1_5_YOUR_VILLAGE', '(1/5) 您的村莊');
tz_def('TZ_N_1_CHOOSE_A_RESOURCE_FIELD', '1. 選擇一塊資源田');
tz_def('TZ_N_1_CHOOSE_BUILDING_SITE', '1. 選擇建築空地');
tz_def('TZ_N_2_5_RESOURCES', '(2/5) 資源');
tz_def('TZ_N_2_CONSTRUCT_A_BUILDING', '2. 建造一座建築');
tz_def('TZ_N_2_DAYS', '2 天');
tz_def('TZ_N_2_EXTEND_THE_RESOURCE_FIELD', '2. 升級資源田');
tz_def('TZ_N_3_5_BUILDINGS', '(3/5) 建築');
tz_def('TZ_N_4_5_NEIGHBOURS', '(4/5) 鄰居');
tz_def('TZ_N_5_5_NAVIGATION', '(5/5) 導航');
tz_def('TZ_OFFER_A_CONFEDERATION', '提議結成聯邦');
tz_def('TZ_OFFER_NON_AGGRESSION_PACT', '提議互不侵犯條約');
tz_def('TZ_OK_3', '確定');
tz_def('TZ_ONLINE_USERS', '線上使用者');
tz_def('TZ_OPTION_1', '選項 1：');
tz_def('TZ_OPTION_2', '選項 2：');
tz_def('TZ_OPTION_3', '選項 3：');
tz_def('TZ_OPTION_4', '選項 4：');
tz_def('TZ_OPTION_5', '選項 5：');
tz_def('TZ_OPTION_6', '選項 6：');
tz_def('TZ_OPTION_7', '選項 7：');
tz_def('TZ_OPTION_8', '選項 8：');
tz_def('TZ_ORDERED_PACKAGE', '已訂購套餐');
tz_def('TZ_OR_ASK_THE_SERVER_OWNER', '或詢問伺服器所有者。');
tz_def('TZ_OVERVIEW', '概覽：');
tz_def('TZ_OWN_TEXT', '自定義文字：');
tz_def('TZ_PALACE_RESIDENCE', '宮殿/官邸');
tz_def('TZ_PASSWORD', '密碼：');
tz_def('TZ_PAYMENT_ACCOUNT', '付款賬戶');
tz_def('TZ_PAYPAL', 'PayPal');
tz_def('TZ_PAYPAL_PACKAGE_A', 'PayPal – 套餐 A');
tz_def('TZ_PAYPAL_PACKAGE_B', 'PayPal – 套餐 B');
tz_def('TZ_PAYPAL_PACKAGE_C', 'PayPal – 套餐 C');
tz_def('TZ_PAYPAL_PACKAGE_D', 'PayPal – 套餐 D');
tz_def('TZ_PAYPAL_PACKAGE_E', 'PayPal – 套餐 E');
tz_def('TZ_PLAY_NO_TASKS', '不進行任務。');
tz_def('TZ_PLEASE_BUILD_A_MARKETPLACE', '請建造一座市場。');
tz_def('TZ_PLUS_FUNCTIONS', 'Plus 功能');
tz_def('TZ_PM', '下午');
tz_def('TZ_POP', '人口');
tz_def('TZ_POSITION', '職位：');
tz_def('TZ_PRODUCTION_CLAY', '產量：黏土');
tz_def('TZ_PRODUCTION_CROP', '產量：糧食');
tz_def('TZ_PRODUCTION_IRON', '產量：鐵');
tz_def('TZ_PRODUCTION_LUMBER', '產量：木材');
tz_def('TZ_PUBLIC_FORUM', '公開論壇');
tz_def('TZ_RAGEZONE_COM', 'RageZone.com');
tz_def('TZ_RANKING_OF_ALL_PLAYERS', '所有玩家排名');
tz_def('TZ_RATIO', '比率');
tz_def('TZ_READ_YOUR_NEW_MESSAGE', '閱讀您的新訊息。');
tz_def('TZ_REGISTERED', '已註冊');
tz_def('TZ_REGISTERED_PLAYERS', '已註冊玩家');
tz_def('TZ_RELEASED_BY_TRAVIANZ_TEAM', '釋出者：TravianZ 團隊');
tz_def('TZ_RELEASE_BY_TRAVIANZ', '[釋出者：TravianZ]');
tz_def('TZ_REPLIES', '回覆');
tz_def('TZ_REPORTS', '報告：');
tz_def('TZ_REQUIREMENTS', '要求');
tz_def('TZ_ROMANIAN', '羅馬尼亞語');
tz_def('TZ_SCOUT_DEFENCES_AND_TROOPS', '偵察防禦和部隊');
tz_def('TZ_SCOUT_RESOURCES_AND_TROOPS', '偵察資源和部隊');
tz_def('TZ_SCRIPT_PRICE', '指令碼價格：');
tz_def('TZ_SELECT_ALL', '全選');
tz_def('TZ_SELECT_REWARD', '選擇獎勵……');
tz_def('TZ_SELECT_REWARD_2', '選擇獎勵：');
tz_def('TZ_SEND_200_CROP_TO_THE_TASKMASTER', '向任務主管傳送 200 糧食。');
tz_def('TZ_SEND_AND_RECEIVE_MESSAGES', '傳送和接收訊息');
tz_def('TZ_SEND_UNITS_BACK', '撤回部隊');
tz_def('TZ_SERVER_START', '伺服器開始');
tz_def('TZ_SHOW_THE_LARGE_MAP_IN_AN_EXTRA_WIN', '在額外視窗中顯示大地圖。');
tz_def('TZ_SIZE_IN_MB', '大小（MB）');
tz_def('TZ_SLOTS', '槽位');
tz_def('TZ_START_RAID', '開始掠奪');
tz_def('TZ_STATISTICS', '統計：');
tz_def('TZ_SUPPORT', '支援：');
tz_def('TZ_SUPPORT_AND_MULTIHUNTER', '支援與多獵手');
tz_def('TZ_SURVEY', '調查');
tz_def('TZ_TARIFFS', '資費');
tz_def('TZ_TASK_7_HUGE_ARMY', '任務 7：龐大軍隊！');
tz_def('TZ_TASK_8_EVERYTHING_TO_1', '任務 8：全部升至 1 級。');
tz_def('TZ_THANK_YOU_FOR_USING_OUR_VERSION', '感謝您使用我們的版本！');
tz_def('TZ_THERE_ARE_NO_INCOMING_TROOPS', '沒有正在到達的部隊');
tz_def('TZ_THERE_ARE_NO_OUTGOING_TROOPS', '沒有正在派出的部隊');
tz_def('TZ_THE_BEST_ALLIANCES_DEF', '最佳聯盟（防禦）');
tz_def('TZ_THE_BEST_ALLIANCES_OFF', '最佳聯盟（進攻）');
tz_def('TZ_THE_BUILDING_WAS_COMPLETELY_DEMOLI', '該建築已花費 10 金幣完全拆除！');
tz_def('TZ_THE_EMAIL_ACCOUNT_S_STORAGE_LIMIT', '電子郵件賬戶的儲存上限已滿');
tz_def('TZ_THE_EMAIL_HAS_BEEN_MOVED_TO_THE_SP', '電子郵件已被移至垃圾郵件資料夾');
tz_def('TZ_THE_EMAIL_WILL_BE_SENT_TO_FOLLOWIN', '電子郵件將傳送至以下地址：');
tz_def('TZ_THE_E_MAIL_ADDRESS_OF_THE_NEW_OWNE', '新所有者的電子郵件地址。');
tz_def('TZ_THE_GAME_WORLD_ON_WHICH_THE_ACCOUN', '賬戶所在的遊戲世界');
tz_def('TZ_THE_HERO', '英雄');
tz_def('TZ_THE_LARGEST_GAULS', '最強高盧人');
tz_def('TZ_THE_LARGEST_PLAYERS', '最強玩家');
tz_def('TZ_THE_LARGEST_ROMANS', '最強羅馬人');
tz_def('TZ_THE_LARGEST_TEUTONS', '最強條頓人');
tz_def('TZ_THE_LARGEST_VILLAGES', '最大的村莊');
tz_def('TZ_THE_MOST_EXPERIENCED_HEROES', '最有經驗的英雄');
tz_def('TZ_THE_MOST_SUCCESSFUL_ATTACKERS', '最成功的進攻者');
tz_def('TZ_THE_MOST_SUCCESSFUL_DEFENDERS', '最成功的防禦者');
tz_def('TZ_THE_MULTIHUNTERS_ARE_RESPONSIBLE_F', '多獵手負責監督遵守');
tz_def('TZ_THE_NAVIGATION_BAR', '導航欄');
tz_def('TZ_THE_NICKNAME_OF_THE_ACCOUNT', '賬戶的暱稱');
tz_def('TZ_THE_PATH', '路徑');
tz_def('TZ_THE_VILLAGE', '村莊');
tz_def('TZ_THIS_FEATURE_IS_NOT_INCLUDED_IN_TH', '此功能不包含在金幣俱樂部中！');
tz_def('TZ_THIS_IS_HOW_YOU_START', '您可以這樣開始……');
tz_def('TZ_THREADS', '主題');
tz_def('TZ_TIME_PREFERENCE', '時間偏好');
tz_def('TZ_TIME_ZONES', '時區');
tz_def('TZ_TIP', '提示');
tz_def('TZ_TOP_10_ALLIANCES', '聯盟前 10 名');
tz_def('TZ_TOP_10_PLAYERS', '玩家前 10 名');
tz_def('TZ_TOTAL_POPULATION', '總人口');
tz_def('TZ_TOTAL_VILLAGES', '村莊總數');
tz_def('TZ_TO_THE_FIRST_TASK', '前往第一個任務。');
tz_def('TZ_TO_THE_REGISTRATION', '前往註冊');
tz_def('TZ_TRAIN_3_SETTLERS', '訓練 3 個殖民者。');
tz_def('TZ_TRAVIAN_DEFAULT', 'Travian Default');
tz_def('TZ_TRAVIAN_GOLD_CLUB', 'Travian Gold Club');
tz_def('TZ_TRAVIAN_T4_STYLE', 'Travian T4 Style');
tz_def('TZ_TRIBES', '部族');
tz_def('TZ_TYPOS_IN_THE_EMAIL_ADDRESS', '電子郵件地址有拼寫錯誤');
tz_def('TZ_UK_DD_MM_YY_12H', '英國 (dd/mm/yy 12h)');
tz_def('TZ_UPGRADE_ALL_RESOURCES_TILES_TO_LEV', '將所有資源田升至 5 級。');
tz_def('TZ_UPGRADE_YOUR_GRANARY_TO_LEVEL_3', '將糧倉升至 3 級。');
tz_def('TZ_UPGRADE_YOUR_MAIN_BUILDING_TO_LEVE', '將主建築升至 5 級。');
tz_def('TZ_UPGRADE_YOUR_WAREHOUSE_TO_LEVEL_7', '將倉庫升至 7 級。');
tz_def('TZ_USE', '使用');
tz_def('TZ_USED_FOR_RALLY_POINT_AND_MARKETPLA', '用於集結點和市場：');
tz_def('TZ_USERNAME', '使用者名稱');
tz_def('TZ_USER_DEFINED_GRAPHIC_PACK', '自定義圖形包');
tz_def('TZ_USE_IT_FOR_PLUS_OR_ANY_ADVANTAGE', '。可用於 Plus 或任何優勢。');
tz_def('TZ_US_MM_DD_YY_12H', '美國 (mm/dd/yy 12h)');
tz_def('TZ_UTC_1', 'UTC+1');
tz_def('TZ_UTC_10', 'UTC+10');
tz_def('TZ_UTC_10_2', 'UTC-10');
tz_def('TZ_UTC_11', 'UTC+11');
tz_def('TZ_UTC_11_2', 'UTC-11');
tz_def('TZ_UTC_12', 'UTC+12');
tz_def('TZ_UTC_1_2', 'UTC-1');
tz_def('TZ_UTC_2', 'UTC+2');
tz_def('TZ_UTC_2_2', 'UTC-2');
tz_def('TZ_UTC_3', 'UTC+3');
tz_def('TZ_UTC_3_2', 'UTC-3');
tz_def('TZ_UTC_4', 'UTC+4');
tz_def('TZ_UTC_4_2', 'UTC-4');
tz_def('TZ_UTC_5', 'UTC+5');
tz_def('TZ_UTC_5_2', 'UTC-5');
tz_def('TZ_UTC_6', 'UTC+6');
tz_def('TZ_UTC_6_2', 'UTC-6');
tz_def('TZ_UTC_7', 'UTC+7');
tz_def('TZ_UTC_7_2', 'UTC-7');
tz_def('TZ_UTC_8', 'UTC+8');
tz_def('TZ_UTC_8_2', 'UTC-8');
tz_def('TZ_UTC_9', 'UTC+9');
tz_def('TZ_UTC_9_2', 'UTC-9');
tz_def('TZ_VERSION', '版本：');
tz_def('TZ_VILLAGE_EXP', '村莊擴張');
tz_def('TZ_VILLAGE_YOU_GET', '村莊，您將獲得');
tz_def('TZ_VILLAGE_YOU_WILL_BE_CREDITED_WITH', '村莊，您將獲得');
tz_def('TZ_VIP_ACCOUNT_10_GOLD_7_DAYS', 'VIP 賬戶（10 金幣 – 7 天）');
tz_def('TZ_VISIT', '訪問：');
tz_def('TZ_VOTE', '投票');
tz_def('TZ_WAIT_24H', '等待：24 小時');
tz_def('TZ_WAIT_INSTANT_AFTER_IPN', '等待：IPN 後即時');
tz_def('TZ_WARNING_CATAPULT_WILL', '警告：投石車將');
tz_def('TZ_WE_STRIVE_TO_ENSURE_SPEEDY_PROCESS', '我們力求快速處理！');
tz_def('TZ_WHY_CAN_T_I_FINISH_SOME_BUILDINGS', '為什麼有些建築不能用金幣完成？');
tz_def('TZ_WILL_BE_ATTACKED_BY_CATAPULT_S', '（將被投石車攻擊）');
tz_def('TZ_WILL_SPAWN_IN', '將出現於：');
tz_def('TZ_WOODCUTTER_INSTANTLY_COMPLETED', '伐木場已立即完成。');
tz_def('TZ_WORLD_STATS', '世界統計');
tz_def('TZ_WRITE_THE_CODE', '輸入程式碼');
tz_def('TZ_WRONG_DOMAIN_THERE_IS_E_G_NO_AOL_D', '域名錯誤：例如沒有 @aol.de，只有 @aol.com');
tz_def('TZ_YOUR_ACCOUNT_HAS_BEEN_SUCCESSFULLY', '您的賬戶已成功啟用。');
tz_def('TZ_YOUR_VILLAGE_AND_YOUR_NEIGHBOURS', '您的村莊和鄰居');
tz_def('TZ_YOU_CAN_UNDO_THE_REGISTRATION_AND', '您可以撤銷註冊並使用以下方式重新註冊');
tz_def('TZ_YOU_CAN_USE_THIS_GOLD_FOR_PLUS_OR', '。您可以將此金幣用於 Plus 或任何金幣優勢。');

// ===== i18n etape 2 (lot suivant) =====
tz_def('TZ_ACCOUNT_OR_INCREASE_YOUR_RESOURCE', '-賬戶或提高您的資源產量。為此請點選');
tz_def('TZ_ADDITIONALLY_THE_TRAVIAN_TEAM_WILL', '此外，Travian 團隊不會向賬戶所有者以外的任何人提供有關封禁的資訊。');
tz_def('TZ_ADVERTISEMENT_OF_ANY_KIND_THAT_HAS', '未經 Travian 團隊許可的任何形式廣告均不允許。');
tz_def('TZ_AFTERWARDS_BOTH_PARTIES_MUST_REQUE', '之後，雙方必須透過密碼找回功能申請其新賬戶的密碼。');
tz_def('TZ_AFTER_TAKING_CARE_OF_YOUR_RESOURCE', '在保證資源供應後，您可以開始擴張您的村莊。');
tz_def('TZ_ANY_SALES_OR_PURCHASES_CONCERNING', '任何涉及真實貨幣、關於賬戶、單位、村莊、資源、服務或 Travian 任何其他方面的買賣均不允許。出售 Travian 賬戶以及與拍賣網站或其他金錢交易相關的任何間接轉讓（即使作為禮物）均不允許。');
tz_def('TZ_AS_A_LEADER_YOU_CAN_ONLY_CHANGE_YO', '作為領袖，您只能更改您的頭銜。您的許可權保持最高。');
tz_def('TZ_A_SITTER_CAN_LOG_INTO_YOUR_ACCOUNT', '代理人可以使用您的名字和他/她的密碼登入您的賬戶。您最多可以有兩名代理人。');
tz_def('TZ_A_WAREHOUSE_AND_A_GRANARY_ENABLE_Y', '倉庫和糧倉讓您能儲存更多資源。藏匿處可保護您的資源不被敵方掠奪者偷走。');
tz_def('TZ_BECAUSE_YOU_ARE_THE_ALLIANCE_FOUND', '由於您是聯盟創始人，離開前需要選擇一位接替的創始人。');
tz_def('TZ_BEFORE_YOU_EXPAND_YOUR_VILLAGE_S_B', '在擴建村莊建築之前，您應該開發一些資源田以增加資源供應。');
tz_def('TZ_BLACKMAILING_PLAYERS_IN_A_WAY_THAT', '以違反 Travian 任何規則（依據一般條款與條件）的方式勒索玩家。');
tz_def('TZ_COMPLETE_CONSTRUCTION_ORDERS_AND_R', '立即完成此村莊的建造訂單和研究');
tz_def('TZ_DISPLAYING_BATTLE_REPORTS_OR_MESSA', '未經雙方同意公開展示戰報或訊息。');
tz_def('TZ_EACH_PLAYER_MAY_ONLY_OWN_AND_PLAY', '每位玩家每個伺服器只能擁有並使用一個賬戶。');
tz_def('TZ_ENGLISH_IS_THE_ONLY_LANGUAGE_TOLER', '訊息和描述中只允許使用英語。');
tz_def('TZ_FOLLOWING_BEHAVIOR_IS_PUNISHABLE_A', '以下行為將受到處罰，適用於所有描述、賬戶名、聯盟名、村莊名和訊息：');
tz_def('TZ_HERE_YOU_CAN_CHANGE_TRAVIAN_S_DISP', '您可以在此更改 Travian 顯示的時間以符合您的時區。');
tz_def('TZ_HERE_YOU_CAN_HAVE_A_LOOK_AT_YOUR_V', '您可以在此檢視您村莊的周邊區域和鄰居');
tz_def('TZ_HOWEVER_IT_IS_PERMISSIBLE_TO_TRANS', '但是，允許將賬戶密碼轉交給在不同遊戲世界遊玩（或完全不遊玩）的一人或多人，以便共同使用一個賬戶。');
tz_def('TZ_IF_INDIVIDUAL_REGULATIONS_OF_THIS', '如果本規則中的個別條款被證明在任何方面無效，不影響本規則其餘條款的有效性。管理員承諾儘快用新條款替換無效條款。');
tz_def('TZ_IF_THERE_IS_AN_OFFENCE_AGAINST_THE', '如果違反這些遊戲規則，多獵手以及必要時管理員將封禁相關賬戶並決定適當的處罰。處罰總是會超過違反規則所得的收益。');
tz_def('TZ_IF_YOUR_ALLIANCE_WANTS_TO_USE_AN_E', '如果您的聯盟想使用外部論壇，可以在此輸入網址。');
tz_def('TZ_IMPERSONATING_OFFICIALS_OR_OFFICIA', '以任何方式假冒官方人員或官方職位均屬違法。');
tz_def('TZ_INCITING_MANIPULATING_ENCOURAGING', '煽動、操縱、鼓勵、協助或與他人串通違反任何 Travian 規則均不允許。這些規則無一例外地適用於將要刪除或正在刪除賬戶的玩家。');
tz_def('TZ_INTO_YOUR_PROFILE_BY_ADDING_IT_TO', '新增到兩個描述欄之一，即可加入您的個人資料。');
tz_def('TZ_IN_ORDER_TO_ACTIVATE_YOUR_ACCOUNT', '要啟用您的賬戶，請輸入程式碼或點選電子郵件中的連結。');
tz_def('TZ_IN_ORDER_TO_PLAY_TRAVIAN_YOU_NEED', '要遊玩 Travian，您需要一個有效的電子郵件地址以接收啟用碼。在特殊情況下，此郵件可能無法送達。');
tz_def('TZ_IN_ORDER_TO_QUIT_THE_ALLIANCE_YOU', '出於安全原因，退出聯盟時您必須再次輸入密碼。');
tz_def('TZ_IN_ORDER_TO_SWITCH_AN_ACCOUNT_WITH', '若要在同一遊戲世界與他人互換賬戶，雙方必須從該賬戶當前註冊的電子郵件地址向 admin@travian.com 傳送電子郵件。郵件須包含以下資訊：');
tz_def('TZ_IN_THE_BEGINNING_YOUR_SMALL_VILLAG', '一開始，您的小村莊只有一座建築。');
tz_def('TZ_IN_TRAVIAN_YOU_ARE_NOT_ALONE_YOU_I', '在 Travian 中您並不孤單；您會與 Travian 世界中成千上萬的其他玩家互動。');
tz_def('TZ_IT_S_PART_OF_DIPLOMATIC_ETIQUETTE', '在傳送提議之前先與另一個聯盟溝通是外交禮節的一部分。');
tz_def('TZ_MULTIACCOUNTS_ON_THE_SPEED_SERVER', '極速伺服器上的多賬戶以及人口少於 100 的多賬戶可被立即刪除，恕不預先警告。');
tz_def('TZ_NOW_YOU_HAVE_FULFILLED_ALL_PREREQU', '現在您已滿足建造市場所需的所有前置條件。');
tz_def('TZ_NOW_YOU_KNOW_EVERYTHING_IMPORTANT', '現在您已瞭解關於 Travian 的所有重要內容。註冊後即可開始遊戲！');
tz_def('TZ_NO_EVERY_GOLD_FEATURE_WORKS_STANDA', '不需要。只要您有足夠的金幣，每項金幣功能都可獨立使用。');
tz_def('TZ_NO_REAL_WORLD_POLITICS_ARE_ALLOWED', '名稱、訊息和描述中不允許出現現實世界政治內容。');
tz_def('TZ_PARTICIPATION_IN_ABUSIVE_DEFAMATOR', '參與辱罵、誹謗、性別歧視、種族主義或褻瀆性言語；貶低任何宗教、種族、國家、性別、年齡群體或性取向；以現實生活中的行為威脅他人。');
tz_def('TZ_PLAYERS_MAY_TALK_TO_THE_MULTIHUNTE', '玩家可透過遊戲內訊息（IGM）或電子郵件與封禁他們的多獵手或管理員溝通。封禁、處罰或刪除不得在公開場合（如聊天或論壇）討論。申訴必須用英語書寫。');
tz_def('TZ_PLEASE_ENTER_YOUR_OLD_AND_YOUR_NEW', '請輸入您的舊電子郵件地址和新電子郵件地址。然後您將在兩個地址收到一段程式碼，需在此處輸入。');
tz_def('TZ_PLUS_DOES_NOT_INCLUDE_PRODUCTION_B', 'Plus 不包含產量加成。您必須分別為每種資源購買 +25%，在');
tz_def('TZ_PROGRAM_ERRORS_ALSO_CALLED_BUGS_MA', '程式錯誤（也稱 bug）不得用於謀取私利。濫用可能導致賬戶受罰。');
tz_def('TZ_RESIDENCE_PALACE_AND_WORLD_WONDER', '出於遊戲性原因，官邸、宮殿和世界奇蹟村莊被排除在外。');
tz_def('TZ_RESOURCES_BUILDINGS_VILLAGES_OR_TR', '暫停期間損失的資源、建築、村莊或部隊不計為處罰，且不會由 Travian 團隊補償。任何玩家無權就因暫停而損失的 Plus/金幣時間索要賠付或補償。');
tz_def('TZ_SHOOT_WITH_A_NORMAL_ATTACK_THEY_DO', '在普通攻擊時射擊（掠奪時不射擊！）');
tz_def('TZ_SOMETIMES_THE_EMAIL_IS_MOVED_TO_TH', '有時電子郵件會被移至垃圾郵件資料夾。如需進一步幫助請點選');
tz_def('TZ_THERE_ARE_FOUR_DIFFERENT_TYPES_OF', 'Travian 中有四種不同的資源：木材、黏土、鐵和糧食。');
tz_def('TZ_THERE_IS_NO_COMPENSATION_FOR_DAMAG', '對於代理人造成的損害不予補償。賬戶所有者對其賬戶所選代理人的行為負全部責任。如果賬戶代理人不遵守這些規則及 Travian 的一般條款與條件，賬戶所有者和代理人均可能被追責並受罰。');
tz_def('TZ_THERE_IS_NO_COMPENSATION_FOR_DAMAG_2', '對於知曉賬戶密碼者造成的損害不予補償。獲得密碼的人須遵守 Travian 規則及一般條款與條件。');
tz_def('TZ_THERE_IS_NO_SPECIAL_TREATMENT_FOR', '在遊戲規則方面，對 Travian Plus/金幣使用者沒有特殊待遇，無論是處理案件所需時間還是處罰。');
tz_def('TZ_THE_E_MAIL_ADDRESS_USED_FOR_THE_RE', '用於註冊賬戶的電子郵件地址必須由註冊該賬戶的人員個人獨佔控制。無論存在任何其他個人或聯盟協議，擁有該賬戶當前註冊電子郵件地址的人被視為賬戶所有者。賬戶所有者對該賬戶的所有行為負全部責任。');
tz_def('TZ_THE_FOLLOWING_SET_OF_RULES_ARE_IN', '以下規則與 Travian 的一般條款與條件相結合。您應熟悉一般條款與條件，以確認哪些被允許、哪些被禁止，尤其是在賬戶因違反規則被封禁的情況下。');
tz_def('TZ_THE_GAME_MUST_BE_PLAYED_WITH_AN_UN', '遊戲必須使用未經修改的網路瀏覽器遊玩。使用使賬戶操作自動化的指令碼或機器人違反規則。');
tz_def('TZ_THE_OWNER_OF_AN_ACCOUNT_MAY_NOT_TR', '賬戶所有者不得將賬戶密碼轉交給在同一遊戲世界（伺服器）遊玩的任何人。此外，故意在同一遊戲世界選擇與他人相同的密碼屬違法；任何此類行為均被視為多賬戶，如本規則所定義。');
tz_def('TZ_THE_PLAYERS_IN_YOUR_SURROUNDING_AR', '您周邊區域的玩家對您最為重要。藉助地圖，您可以很好地瞭解他們是誰。');
tz_def('TZ_THE_REGISTRATION_WAS_SUCCESSFUL_IN', '註冊成功。接下來幾分鐘內您將收到一封含訪問資訊的電子郵件。');
tz_def('TZ_THE_SUPPORT_IS_A_GROUP_OF_EXPERIEN', '客服是一群經驗豐富的玩家，他們將樂意回答您的問題。');
tz_def('TZ_THE_TRAVIAN_TEAM_RESERVES_THE_RIGH', 'Travian 團隊保留隨時更改規則的權利。');
tz_def('TZ_TO_BRING_IN_NEW_PLAYERS_INVITE_THE', '要帶來新玩家，請透過電子郵件邀請他們或分享您的推薦連結。');
tz_def('TZ_VACATION_MODE_CANNOT_BE_ACTIVATED', '無法啟用度假模式 – 未滿足條件');
tz_def('TZ_WE_WILL_SHOW_YOU_HOW_TO_EXPAND_YOU', '我們將在下一頁向您展示如何擴張您的村莊，使其成為一座強大而繁榮的城市。');
tz_def('TZ_YOU_CAN_DELETE_YOUR_ACCOUNT_HERE_A', '您可以在此刪除您的賬戶。開始登出後，需三天才能完成賬戶登出。您可在最初 24 小時內取消此流程。');
tz_def('TZ_YOU_DON_T_HAVE_ENOUGH_GOLD_YOU_NEE', '您的金幣不足。即時拆除需要 10 金幣。');
tz_def('TZ_YOU_HAVE_BEEN_ENTERED_AS_SITTER_ON', '您已被設為以下賬戶的代理人。您可以點選紅色 X 取消。');

// ===== i18n composites (Simulateur) =====
tz_def('TZ_NUMBER', '數量');
tz_def('TZ_LVL', '等級');

// ===== i18n reliquat multi-lignes =====
tz_def('TZ_ML_LEADER_DEMOLITION_EMBASSY', '由於您是聯盟的領袖，您當前大使館的拆除無法開始，因為它仍保有您所有的');
tz_def('TZ_ML_CHANGELOG_120BUGS', '修復超過 120 個 bug，神器完全修復，投石車和衝車完全修復，自動化納塔/神器/世界奇蹟村莊/世界奇蹟建築圖紙，新戰鬥公式（比舊的更精確），神器自動啟用，重寫了大量程式碼。詳見 readme 檔案！');
tz_def('TZ_ML_CHANGELOG_NEWFORUM', '全新論壇系統，Travian 式陷阱公式，修復總管，使用 Plus 時鐵匠鋪和兵工廠雙研究佇列');
tz_def('TZ_ML_GOLD_RESERVE', '基本上，我們會在付款後立即預留所訂購的金幣數量。如有任何問題，請傳送電子郵件至我們的');
tz_def('TZ_ML_GPACK_NOTFOUND', '未找到圖形包。可能由以下原因導致：');
tz_def('TZ_ML_GPACK_ALLOWED_SAVE', '顯示允許的圖形包。儲存您的選擇以啟用它。');
tz_def('TZ_ML_GPACK_ALTER_APPEARANCE', '使用圖形包，您可以改變 Travian 的外觀。您可以從列表中選擇一個，或提供自定義路徑。');
tz_def('TZ_ML_QUESTIONS_MULTIHUNTER', '。如果您有疑問或想舉報違規行為，可以給多獵手發訊息。');
tz_def('TZ_ML_AWAY_NO_SITTER', '如果您打算長時間離開且不想設定代理人，可以啟用');
tz_def('TZ_ML_ACCOUNT_FROZEN', '。在此期間，您的賬戶基本處於凍結狀態。資源、部隊或研究都不會推進，您的村莊也不會被攻擊。請記住，這隻凍結您的 Travian，而非時間。');
tz_def('TZ_ML_ACTIVATION_RESENT', '。然後將重新傳送啟用碼');
tz_def('TZ_ML_TWO_SITTERS_RIGHT', '每位玩家有權指定兩名代理人，在所有者不在時代為操作賬戶。代理人必須以賬戶的最大利益操作其所代管的賬戶。濫用此功能將受到處罰。');
tz_def('TZ_ML_SAME_COMPUTER_SITTER', '使用同一臺電腦並希望訪問彼此賬戶的玩家必須使用代理人功能。');
tz_def('TZ_ML_POLITE_TONE', '所有人都必須以禮貌、友好的語氣交流。多獵手可不經警告更改不當的個人資料和村莊名稱。');
tz_def('TZ_ML_MATERIAL_UNDERAGE', '釋出或傳播任何不適合未成年人的內容。');

// ===== i18n reliquat final =====
tz_def('TZ_NO_BEGINNER_PROT2', '無新手保護');
tz_def('TZ_SERVER_RUNNING_ON', '▶ 伺服器執行於');

// ===== task A: re-wired reverted templates =====
tz_def('TZ_HERO', "英雄");
tz_def('TZ_SEND_UNITS_BACK_TO', "將部隊遣返至");
tz_def('TZ_CONFIRM_DEMOLISH_COMPLETE_1', "你確定要徹底拆除 ");
tz_def('TZ_CONFIRM_DEMOLISH_COMPLETE_2', " 嗎？需花費 10 金幣。\n該建築將瞬間消失，且無法撤銷。");
tz_def('TZ_CONFIRM_LAST_EMBASSY_L3', "警告！\n\n你即將拆除最後一座 3 級大使館！\n\n由於你是聯盟領袖且沒有其他成員，拆除完成後聯盟將被解散。");
tz_def('TZ_CONFIRM_LAST_EMBASSY_L1', "警告！\n\n你即將拆除你最後一座大使館！\n\n由於你身處聯盟中，拆除完成後你將自動退出該聯盟。");
tz_def('TZ_TRADE', "貿易");

// ===== reports section (noticeClass tooltips) =====
tz_def('TZ_RPT_SCOUT', "偵察報告");
tz_def('TZ_RPT_WON_ATK_NOLOSS', "作為攻擊方獲勝且無損失");
tz_def('TZ_RPT_WON_ATK_LOSS', "作為攻擊方獲勝但有損失");
tz_def('TZ_RPT_LOST_ATK_LOSS', "作為攻擊方失敗且有損失");
tz_def('TZ_RPT_WON_DEF_NOLOSS', "作為防禦方獲勝且無損失");
tz_def('TZ_RPT_WON_DEF_LOSS', "作為防禦方獲勝但有損失");
tz_def('TZ_RPT_LOST_DEF_LOSS', "作為防禦方失敗且有損失");
tz_def('TZ_RPT_LOST_DEF_NOLOSS', "作為防禦方失敗且無損失");
tz_def('TZ_RPT_REINF_ARRIVED', "增援已抵達");
tz_def('TZ_RPT_WOOD_DELIVERED', "木材已送達");
tz_def('TZ_RPT_CLAY_DELIVERED', "黏土已送達");
tz_def('TZ_RPT_IRON_DELIVERED', "鐵礦已送達");
tz_def('TZ_RPT_CROP_DELIVERED', "糧食已送達");
tz_def('TZ_RPT_WON_SCOUT_ATK', "作為攻擊方偵察成功");
tz_def('TZ_RPT_LOST_SCOUT_ATK', "作為攻擊方偵察失敗");
tz_def('TZ_RPT_WON_SCOUT_DEF', "作為防禦方偵察成功");
tz_def('TZ_RPT_LOST_SCOUT_DEF', "作為防禦方偵察失敗");

// ===== report topic connectors (display-time localization) =====
tz_def('TZ_RT_ATTACKS', "攻擊");
tz_def('TZ_RT_REINFORCEMENT', "增援");
tz_def('TZ_RT_SCOUTS', "偵察");
tz_def('TZ_RT_SEND_RES_TO', "運送資源至");
tz_def('TZ_RT_WAS_ATTACKED', "遭到攻擊");
tz_def('TZ_RT_REINF_IN', "增援於");
tz_def('TZ_RT_ELDERS_REINF', "長老村增援");
tz_def('TZ_RT_UNOCC_OASIS', "無人佔領的綠洲");
tz_def('TZ_RT_NEW_VILLAGE', "已建立新村莊");
tz_def('TZ_RT_VALLEY_OCCUPIED', "拓殖失敗（山谷已被佔領）");
tz_def('TZ_NEW_VILLAGE_MSG', "你已建立一個新村莊：");
tz_def('TZ_VALLEY_OCCUPIED_MSG', "你的拓荒者無法在此定居——該山谷已被其他玩家佔領。他們正在返回途中。");

// ===== 玩家資料頁 (#189) =====
tz_def('AGE', '年齡');
tz_def('CAPITAL_TAG', '首都');
tz_def('WRITE_MESSAGE_UNAVAILABLE', '無法傳送訊息');
tz_def('PROFILE_FLAG_ADMIN', '該玩家是管理員。');
tz_def('PROFILE_FLAG_MULTIHUNTER', '該玩家是多賬號獵人。');
tz_def('PROFILE_FLAG_BANNED', '該玩家已被封禁。');
tz_def('PROFILE_FLAG_VACATION', '該玩家處於度假模式。');

// ===== 遊戲內手冊首頁 (#189) =====
tz_def('BUILDINGS', '建築');
tz_def('INFRASTRUCTURE', '基礎設施');
tz_def('FORWARD', '下一頁');
tz_def('NEW_FEATURES', '新功能');
tz_def('NEW_WINDOW', '新視窗');
tz_def('MANUAL_INTRO', '此遊戲內幫助讓你隨時查閱重要資訊。');
tz_def('MANUAL_NEW_FEATURES_DESC', '這些是你在原版 Travian T3.6 遊戲中找不到的新功能。你可以在此詳細瞭解所有新功能。');
tz_def('MANUAL_FAQ', 'Travian 常見問題');
tz_def('MANUAL_FAQ_DESC', '此遊戲內幫助僅提供簡要資訊。更多資訊請訪問');
tz_def('ADM_SPANISH', '西班牙語');
tz_def('ADM_CHINESE', '簡體中文');
tz_def('ADM_CHINESE_TW', '繁體中文');
