<?php


$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;


###@armof####
###@message###
$name = $update->message->from->first_name;
#####التحويلات#####
if($text == "/start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
اهلابك* $name
البوت يقوم بتحميل الفديوهاات من تكتوك 
وبدون علامة مائية فقط ارسل الرابط ♡.
———————","parse_mode"=>"markdown","disable_web_page_preview"=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>'CH ♡','url'=>"t.me/ccc_xxc"]]]
])
]);
}
if($text !="/start"){
	$api = json_decode(file_get_contents("https://hostarmof4.ml/Tiktok.php?armofiix=".$text),1);
	$vid = $api["link"];
	$x = curl_file_create($vid);
	bot('sendvideo',[
	'chat_id'=>$chat_id,
	'video'=>$x,
'caption'=>"done mp4 : ✅",
]);
bot('sendvoice',[
	'chat_id'=>$chat_id,
	'voice'=>$x,
'caption'=>"done ogg : ✅",
]);
bot('sendaudio',[
	'chat_id'=>$chat_id,
	'audio'=>$x,
'preform'=>"x",
'caption'=>"done mp3 : ✅",'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"شارك البوت ♡",'switch_inline_query'=>"shere"]]]
])
]);
}
if($ev[0] == "2"){
bot('deleteMessage',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
]);
$ev = explode("#",$data);
$rf = explode("&",$ev[1]);
$rg = file_get_contents("https://hostarmof3.ml/YouTube/Yt.php?vid=https://www.youtube.com/watch?v=$rf[0]");
$a = json_decode($rg,true);
$vid = $a["url"];
$title = $a["title"];
$MB = $a["MB"];
$quality = $a["quality"];
$img = $a["img"];
$str = str_replace(["video","audio","voice"],["mp4","mp3","ogg"],$rf[1]);
$x = curl_file_create($a["url"],"type","$na.$str");
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$update->callback_query->message->message_id-1,
]);
bot('send'.$rf[1],[
'chat_id'=>$chat_id2,
$rf[1]=>$x,
'caption'=>"- [".$title."](t.me/yotsbot)
• $MB ~ $quality",'parse_mode'=>"MarkDown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"back 🔚",'callback_data'=>"home"]],
]
])
]);
}

if($text != "/start"){
bot('sendmessage', [
'chat_id'=>$chat_id,
'text'=>"$text",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🎧 audio ","callback_data"=>"1#$text&audio"],['text'=>"• video 🎬","callback_data"=>"1#$text&video"]],
[['text'=>"• voice 🎙","callback_data"=>"1#$text&voice"]]
]
])
]);
}
$data     = $update->callback_query->data;
$inline   = $update->inline_query->query;
$id       = $update->inline_query->from->id;
$msg_id   = $update->inline_query->inline_message_id;
$username = $update->inline_query->from->username;
$cuser    = $update->callback_query->from->username;
$cid      = $update->callback_query->from->id;
if ($inline == "shere") {
    bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'article',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"اضغط هنا للمشاركة ✅",
             
'input_message_content'=>['parse_mode'=>'markdown','message_text'=>"
بوت tiktok
البوت يقوم بتحميل الفديوهاات من تك توك 
وبدون علامة مائية فقط ارسل الرابط ♡.
———————

"],
            'reply_markup'=>['inline_keyboard'=>[
                [
                ['text'=>'دخول للبوت ♡','url'=>"t.me/ti1ktbot"]
                ],
             ]]
          ]])
        ]);
}
