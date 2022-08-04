<?php
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
while(true){
  $last_up = $last_up??0;
  $get_up = getupdates($last_up+1);
  $last_up = $get_up->update_id;
  run($get_up);
  sleep(1);
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
if($text == '/start'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"اهلاً بك {*$name*} 🗿 \n في بوت الصور 🛹",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"شرح البوت",'callback_data'=>'edit']],
]
])
]);
}
if($data == 'edit'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"الاستعمال جدا سهل 🛹 \n فقط قم ب ارسال المعرف من دون [@]",
]);
}
if($text != '/start'){
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/".$text,
]);
}
}
