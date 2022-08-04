<?php
error_reporting(0);
function RandomString($n)
    {
      $characters = '0123456789'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
$Token = readline("Enter Token: ");
define('API_KEY',"$Token");
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $res = curl_exec($ch);
    curl_close($ch);
    return json_decode($res);
}
function getupdates($up_id){
  $get = bot('getupdates',[
    'offset'=>$up_id
  ]);
  return end($get->result);
}
function run($update){
$message = $update->message;
$text = $message->text; 
$data = $update->callback_query->data; 
$user = $update->message->from->username; 
$user2 = $update->callback_query->from->username; 
$name = $update->message->from->first_name; 
$name2 = $update->callback_query->from->first_name; 
$message_id = $message->message_id;
$message_id2 = $update->callback_query->message->message_id; 
$chat_id = $message->chat->id; 
$chat_id2 = $update->callback_query->message->chat->id; 
$from_id = $message->from->id;
$from_id2 = $update->callback_query->message->from->id; 
$type = $update->message->chat->type;
if($text == "/start"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
اهلا بك في بوت صنع كومبو فيزات 👋🏼

BY @ZEDTOOL (+) @KHAFEER
",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"• صنع كومبو 💳"]],
], 'resize_keyboard'=>true
])
]);
}
if($text == "• صنع كومبو 💳"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$chat_id,
'text'=>"
اختر عدد الفيزات
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"100",'callback_data'=>'cc#100'],['text'=>"200",'callback_data'=>'cc#200']],
[['text'=>"300",'callback_data'=>'cc#300'],['text'=>"400",'callback_data'=>'cc#400']],
[['text'=>"500",'callback_data'=>'cc#500'],['text'=>"600",'callback_data'=>'cc#600']],
[['text'=>"700",'callback_data'=>'cc#700'],['text'=>"800",'callback_data'=>'cc#800']],
[['text'=>"900",'callback_data'=>'cc#900'],['text'=>"1000",'callback_data'=>'cc#1000']],
[['text'=>'رجوع','callback_data'=>'back']],
]
])
]);
}
if($data == "back"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
اهلا بك في بوت صنع كومبو فيزات
",
]);
unlink($chat_id2.".txt");
}
$count = explode("#",$data);
if($count[0] == "cc"){
file_put_contents($chat_id2.".txt",$count[1]);
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
- ارسل البن المكون من 6 ارقام 🛰️
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>'back']],
]
])
]);
}
if($text != "/start" and $text != "• صنع فيزات 💳"){
$com = file_get_contents("$chat_id.txt");
$bin = $text;
if($com == '100'){
for($x2=0;$x2<100; $x2++){
$rand = RandomString("10");
$rand2 = RandomString("3");
$rand3 = ["01","02","03","04","05","06","07","08","09","10","11","12"];
$rand4 = ["2022","2023","2024","2025","2026","2027","2028","2029"];
$ary = array_rand($rand3,1);
$ary2 = array_rand($rand4,1);
$ccv = "$bin$rand|$rand3[$ary]|$rand4[$ary2]|$rand2";
file_put_contents("cc.txt",$ccv."\n",FILE_APPEND);
$ex = explode("\n",file_get_contents("cc.txt"));
$ex1 = count($ex)-1;
}
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("cc.txt"),
'caption'=>"تم صنع كومبو فيزات 100",
]);
unlink('cc.txt');
unlink($chat_id.".txt");
}
if($com == '200'){
for($x2=0;$x2<200; $x2++){
$rand = RandomString("10");
$rand2 = RandomString("3");
$rand3 = ["01","02","03","04","05","06","07","08","09","10","11","12"];
$rand4 = ["2022","2023","2024","2025","2026","2027","2028","2029"];
$ary = array_rand($rand3,1);
$ary2 = array_rand($rand4,1);
$ccv = "$bin$rand|$rand3[$ary]|$rand4[$ary2]|$rand2";
file_put_contents("cc.txt",$ccv."\n",FILE_APPEND);
$ex = explode("\n",file_get_contents("cc.txt"));
$ex1 = count($ex)-1;
}
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("cc.txt"),
'caption'=>"تم صنع كومبو فيزات 200",
]);
unlink('cc.txt');
unlink($chat_id.".txt");
}
if($com == '300'){
for($x2=0;$x2<300; $x2++){
$rand = RandomString("10");
$rand2 = RandomString("3");
$rand3 = ["01","02","03","04","05","06","07","08","09","10","11","12"];
$rand4 = ["2022","2023","2024","2025","2026","2027","2028","2029"];
$ary = array_rand($rand3,1);
$ary2 = array_rand($rand4,1);
$ccv = "$bin$rand|$rand3[$ary]|$rand4[$ary2]|$rand2";
file_put_contents("cc.txt",$ccv."\n",FILE_APPEND);
$ex = explode("\n",file_get_contents("cc.txt"));
$ex1 = count($ex)-1;
}
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("cc.txt"),
'caption'=>"تم صنع كومبو فيزات 300",
]);
unlink('cc.txt');
unlink($chat_id.".txt");
}
if($com == '400'){
for($x2=0;$x2<400; $x2++){
$rand = RandomString("10");
$rand2 = RandomString("3");
$rand3 = ["01","02","03","04","05","06","07","08","09","10","11","12"];
$rand4 = ["2022","2023","2024","2025","2026","2027","2028","2029"];
$ary = array_rand($rand3,1);
$ary2 = array_rand($rand4,1);
$ccv = "$bin$rand|$rand3[$ary]|$rand4[$ary2]|$rand2";
file_put_contents("cc.txt",$ccv."\n",FILE_APPEND);
$ex = explode("\n",file_get_contents("cc.txt"));
$ex1 = count($ex)-1;
}
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("cc.txt"),
'caption'=>"تم صنع كومبو فيزات 400",
]);
unlink('cc.txt');
unlink($chat_id.".txt");
}
if($com == '500'){
for($x2=0;$x2<500; $x2++){
$rand = RandomString("10");
$rand2 = RandomString("3");
$rand3 = ["01","02","03","04","05","06","07","08","09","10","11","12"];
$rand4 = ["2022","2023","2024","2025","2026","2027","2028","2029"];
$ary = array_rand($rand3,1);
$ary2 = array_rand($rand4,1);
$ccv = "$bin$rand|$rand3[$ary]|$rand4[$ary2]|$rand2";
file_put_contents("cc.txt",$ccv."\n",FILE_APPEND);
$ex = explode("\n",file_get_contents("cc.txt"));
$ex1 = count($ex)-1;
}
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("cc.txt"),
'caption'=>"تم صنع كومبو فيزات 500",
]);
unlink('cc.txt');
unlink($chat_id.".txt");
}
if($com == '600'){
for($x2=0;$x2<600; $x2++){
$rand = RandomString("10");
$rand2 = RandomString("3");
$rand3 = ["01","02","03","04","05","06","07","08","09","10","11","12"];
$rand4 = ["2022","2023","2024","2025","2026","2027","2028","2029"];
$ary = array_rand($rand3,1);
$ary2 = array_rand($rand4,1);
$ccv = "$bin$rand|$rand3[$ary]|$rand4[$ary2]|$rand2";
file_put_contents("cc.txt",$ccv."\n",FILE_APPEND);
$ex = explode("\n",file_get_contents("cc.txt"));
$ex1 = count($ex)-1;
}
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("cc.txt"),
'caption'=>"تم صنع كومبو فيزات 600",
]);
unlink('cc.txt');
unlink($chat_id.".txt");
}
if($com == '700'){
for($x2=0;$x2<700; $x2++){
$rand = RandomString("10");
$rand2 = RandomString("3");
$rand3 = ["01","02","03","04","05","06","07","08","09","10","11","12"];
$rand4 = ["2022","2023","2024","2025","2026","2027","2028","2029"];
$ary = array_rand($rand3,1);
$ary2 = array_rand($rand4,1);
$ccv = "$bin$rand|$rand3[$ary]|$rand4[$ary2]|$rand2";
file_put_contents("cc.txt",$ccv."\n",FILE_APPEND);
$ex = explode("\n",file_get_contents("cc.txt"));
$ex1 = count($ex)-1;
}
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("cc.txt"),
'caption'=>"تم صنع كومبو فيزات 700",
]);
unlink('cc.txt');
unlink($chat_id.".txt");
}
if($com == '800'){
for($x2=0;$x2<800; $x2++){
$rand = RandomString("10");
$rand2 = RandomString("3");
$rand3 = ["01","02","03","04","05","06","07","08","09","10","11","12"];
$rand4 = ["2022","2023","2024","2025","2026","2027","2028","2029"];
$ary = array_rand($rand3,1);
$ary2 = array_rand($rand4,1);
$ccv = "$bin$rand|$rand3[$ary]|$rand4[$ary2]|$rand2";
file_put_contents("cc.txt",$ccv."\n",FILE_APPEND);
$ex = explode("\n",file_get_contents("cc.txt"));
$ex1 = count($ex)-1;
}
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("cc.txt"),
'caption'=>"تم صنع كومبو فيزات 800",
]);
unlink('cc.txt');
unlink($chat_id.".txt");
}
if($com == '900'){
for($x2=0;$x2<900; $x2++){
$rand = RandomString("10");
$rand2 = RandomString("3");
$rand3 = ["01","02","03","04","05","06","07","08","09","10","11","12"];
$rand4 = ["2022","2023","2024","2025","2026","2027","2028","2029"];
$ary = array_rand($rand3,1);
$ary2 = array_rand($rand4,1);
$ccv = "$bin$rand|$rand3[$ary]|$rand4[$ary2]|$rand2";
file_put_contents("cc.txt",$ccv."\n",FILE_APPEND);
$ex = explode("\n",file_get_contents("cc.txt"));
$ex1 = count($ex)-1;
}
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("cc.txt"),
'caption'=>"تم صنع كومبو فيزات 900",
]);
unlink('cc.txt');
unlink($chat_id.".txt");
}
if($com == '1000'){
for($x2=0;$x2<1000; $x2++){
$rand = RandomString("10");
$rand2 = RandomString("3");
$rand3 = ["01","02","03","04","05","06","07","08","09","10","11","12"];
$rand4 = ["2022","2023","2024","2025","2026","2027","2028","2029"];
$ary = array_rand($rand3,1);
$ary2 = array_rand($rand4,1);
$ccv = "$bin$rand|$rand3[$ary]|$rand4[$ary2]|$rand2";
file_put_contents("cc.txt",$ccv."\n",FILE_APPEND);
$ex = explode("\n",file_get_contents("cc.txt"));
$ex1 = count($ex)-1;
}
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("cc.txt"),
'caption'=>"تم صنع كومبو فيزات 1000",
]);
unlink('cc.txt');
unlink($chat_id.".txt");
}
}
}
while(true){
  $last_up = $last_up??0;
  $get_up = getupdates($last_up+1);
  $last_up = $get_up->update_id;
  run($get_up);
  sleep(1);
}