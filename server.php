<?php 
#ملف اوامر السيرفر 
#الملف مهم للي ميعرفون يستخدمو السيرفر
#كتابتيي @vhhhhh
#جميع الاكواد منقوله من قناة  @f222j 
ob_start();
$API_KEY = 'to'; #توكن بوتك
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){$vhhhhh = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$vhhhhh";
$marcus8 = file_get_contents($url); 
return json_decode($marcus8);
}
$update   = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id    = $message->from->id;
if($text == "/start"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>
"اهلا بك صديقي في بوت تعليمي للسيرفرات
استخدم الكيبورد اسفل من فضلك ",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'اوامر بوت فاذر']],
[['text'=>'كود ليقاف البوت']],
[['text'=>'كود حذف التنصيب²'],['text'=>'كود حذف التنصيب']],
[['text'=>'حذف يوزر'],['text'=>'انشاء يوزر']],
[['text'=>'اليوزرات الموجوده بالروت']],
[['text'=>'تغيير رمز الروت او اليوزر']],
[['text'=>'كود فتح السكرين'],['text'=>'السكرينات المفتوحه']],
[['text'=>'اكلت بي']],
[['text'=>'ايقاف كل السكرينات'],['text'=>' كود ترسيت السيرفر']],
[['text'=>'حل مشاكل السيرفر']],
],
"resize_keyboard"=>true,
])
]);
} 
if($text == "〽️رجوع"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>
"اهلا بك صديقي في بوت تعليمي للسيرفرات
استخدم الكيبورد اسفل من فضلك ",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'اوامر بوت فاذر']],
[['text'=>'كود ليقاف البوت']],
[['text'=>'كود حذف التنصيب²'],['text'=>'كود حذف التنصيب']],
[['text'=>'حذف يوزر'],['text'=>'انشاء يوزر']],
[['text'=>'اليوزرات الموجوده بالروت']],
[['text'=>'تغيير رمز الروت او اليوزر']],
[['text'=>'كود فتح السكرين'],['text'=>'السكرينات المفتوحه']],
[['text'=>'اكلت بي']],
[['text'=>'ايقاف كل السكرينات'],['text'=>' كود ترسيت السيرفر']],
[['text'=>'حل مشاكل السيرفر']],
],
"resize_keyboard"=>true,
])
]);
} 
if($text == "اوامر بوت فاذر"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>"
💯┇اوامر بوت فاذر فقط اضغط ونسخ الامر ورسله البوت فاذر  ⚜، 

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ 

📛 | كود حذف البوت : `/deletebot`

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ 

📛 | كود تغير اسم البوت: `/setname`

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ 

📛 | كود تغيروصف: `/setabouttext`

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ 

📛 | كِوَد انشاء بوت  : `/newbot`

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ 

📛 | كود تغيير صوره : `/setuserpic`

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ 

📛 | كود ستخراج التوكن : `/token`

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ ┉

📛 | كود تغيير توكن  : `/revoke`

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉
⚜ | الاوامر لـ بوت فاذر ☜ @BotFather
",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'〽️رجوع']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "كود ليقاف البوت"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>"
`killall screen`
",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'〽️رجوع']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "كود حذف التنصيب"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
`rm -rf * && cd #HOME && rm -rf *`
",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'〽️رجوع']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "كود حذف التنصيب²"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
 
`killall screen;rm -fr $HOME/*`

*يسد السكرينات + يحذف تنصيبات*
",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'〽️رجوع']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "انشاء يوزر"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
 كيفيه انشاء يوزر م̷ـــِْن الروت او ((سيرفر)) 

`adduser` + اسم اليوزر
ونتر
نوب خلي رمز ونتر 
ومره لخ رمز ونتر
نوب دوس انتر خمس مرات لحد ميطلعلك y/n اختار Y

نوب
`adduser` + اسم اليوزر + `sudo`
",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'〽️رجوع']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "حذف يوزر"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
`deluser` اسم اليوزر 
وانتر
`cd /home && rm -fr`+ اسم اليوزر 
وانتر
",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'〽️رجوع']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "اليوزرات الموجوده بالروت"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
 كود معرفه اليوزرات الموجوده بالروت
 
`ls /home`
",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'〽️رجوع']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "تغيير رمز الروت او اليوزر"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
 كيفيه تغيير رمز اليوزر او الروت

1- تغير رمز الروت (( السيرفر ))
`passwd `
ونتر
راح يطلب الباسورد الجديد 
واها يكلك اكتب الباسورد م̷ـــِْن جديد
وهاكذا تم تغير رمز الروت
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎ٴ

2 ــ اذا تريد تغير رمز اليوزر من السيرفر دزله امر 
`passwd` + اسم اليوزر 
وراح يطلب منك رمز مرتين 

﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎ٴ
3 ــ اذا تغير من اليوزر دزله 
`passwd `
ويطلب رمز القديم نوب خلي ونتر نوب رمز جديد ونتر نوب الجديد ونتر مره ثانيه وهيج تغير الرمز مال يوزر

",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'〽️رجوع']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "كود فتح السكرين"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
  
`screen -x+` رقم السكرين
",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'〽️رجوع']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "السكرينات المفتوحه"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
 كود معرفه السكرينات المفتوحه باليوزر

`screen -ls`
",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'〽️رجوع']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "ايقاف كل السكرينات"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
 لايقاف كل سكرينات البوت 

`killall screen`

لايقاف سكرين معين

`kill screen` + رقم السكرين

🔥رقم السكرين طلعه من هذة الكود

`screen -ls`
",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'〽️رجوع']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == " كود ترسيت السيرفر"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
 كود ترسيت السيرفر
 
`redis-server`

",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'〽️رجوع']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "اكلت بي"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
 اكلت بي لـ استقرار السيرفر 

 افتح السيرفر دز ⇐ `reboot`

وانتضر دقيقة بعد الدقيقة وروح سوي رن لليوزرات المسخرجها من السيرفر 

 او لـ السيرفر اذا ماعندك يوزرات مستخرجها من السيرفر

",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'〽️رجوع']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "حل مشاكل السيرفر"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
1- `sudo  wget https://luarocks.org/releases/luarocks-2.4.3.tar.gz`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
2- `sudo  tar zxpf luarocks-2.4.3.tar.gz
cd luarocks-2.4.3
./configure; sudo make bootstrap`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
3- `sudo luarocks install luasocket`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
4- `sudo luarocks install luasec`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
5- `sudo luarocks install luautf8`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
6- `sudo luarocks install redis-lua`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
7- `sudo  luarocks remove lua-cjson2`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
8- `sudo  luarocks remove lua-cjson`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
9- `sudo  apt-get install lua-cjson`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
10- `sudo luarocks install Lua-cURL
cd ..`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

اكواد لـ حل مشاكل السيرفر كلها ⇊

طريقة الاستعمال

- فتح السيرفر وراها ارسل الكود الاول واضغط انتر وارسل الكود الثاني واضغط انتر لحد كود رقم 10 تسوي هاي الطريقة

- بعد ماتكمل اطلع من سيرفر وانتضر دقيقة

- وهيج راح تنحل جميع مشاكل السيرفر مالك وراح يكون سريع وقوي ويقلل من سعة التخزين
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'〽️رجوع']],],
"resize_keyboard"=>true,
])
]);
} 