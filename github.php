/*
تم كتابه هذا الملف بواسطه المبرمج جاك جميع الحقوق محفوظه له
https://t.me/V_P_E
https://t.me/J_F_A_I
https://t.me/TH1BS
غير حقوقي (@V_P_E) تثبت فشلك
*/
<?php
$jackk0 = readline("Enter Token: ");
define( API_KEY ,"$jackk0");
function bot($jackk1,$jackk2=[]){ $jackk3 = http_build_query($jackk2);  $jackk4 = "https://api.telegram.org/bot".API_KEY."/".$jackk1."?$jackk3";  $jackk5 = file_get_contents($jackk4);return json_decode($jackk5);}$jackk6 = json_decode(file_get_contents('php://input'));$jackk7 = $jackk6->message;$jackk8 = $jackk7->from->id;$jackk9 = $jackk7->message_id;$jackk10 = $jackk7->chat->id;$jackk11 = $jackk7->text;$jackk12     = $jackk6->data;$jack13 = $jackk6->from->username;   $jack14 = $jackk7->from->first_name;
if(isset($jackk6->callback_query)){  $jackk11 = $jackk6->callback_query->message->text;  $jack14 = $jackk6->callback_query->from->first_name; $jackk10 = $jackk6->callback_query->message->chat->id;  $jackk9 = $jackk6->callback_query->message->message_id;  $jackk12     = $jackk6->callback_query->data;$jack13 = $jackk6->callback_query->from->username; 
$jackk8 = $jackk6->callback_query->message->from->id;}$api0 =file_get_contents("https://egy-jack.ml/api0.php");
if (isset($jackk7->text)) { $jackk11 = $jackk7->text;
if ($jackk11 == "/start") {bot("sendMessage", ["chat_id" => $jackk10,"text" => "- اهلا بك ؛ $jack14 \n ـ في بوت التحميل من جيتهاب \n ـ كل ما عليك ارسال رابط المستودع مثل `jack1eljoker1/BLACK0` \n ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,"reply_markup"=>json_encode(["inline_keyboard"=>[[['text'=>'𝑱𝑨𝑪𝑲','url'=>'t.me/V_P_E']],]])]);}
if ($jackk11 != "/start") { bot('sendDocument', [  'chat_id' => $jackk10,  'document' => "https://github.com/".$jackk11."/archive/master.zip",  'caption' => '*تم تحميل https://github.com/'.$jackk11.' بنجاح*','parse_mode'=>"markdown",'disable_web_page_preview'=>true,"reply_markup"=>json_encode(["inline_keyboard"=>[[['text'=>'𖡼ᴜʀʟ ғɪʟᴇ𖡼','url'=>'https://github.com/'.$jackk11]],]])]);}}
/*
تم كتابه هذا الملف بواسطه المبرمج جاك جميع الحقوق محفوظه له
https://t.me/V_P_E
https://t.me/J_F_A_I
https://t.me/TH1BS
غير حقوقي (@V_P_E) تثبت فشلك 
*/

