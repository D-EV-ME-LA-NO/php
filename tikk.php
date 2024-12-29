<?php
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
$down = json_decode(file_get_contents("tiktok.txt"),1);
 $ev = explode("#",$data);
if($ev[0] == "1"){
$down = json_decode(file_get_contents("tiktok.txt"),1);
bot('deleteMessage',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
]);
$rf = $ev[1];
$api = json_decode(file_get_contents("https://hostarmof4.ml/Tiktok.php?armofiix=".$down["$from_id2"]),1);
$vid = $api["link"];
$str = str_replace(["video","audio","voice"],["mp4","mp3","ogg"],$ev[1]);
$x = curl_file_create($api["link"],"type","ArMoF.$str");
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$update->callback_query->message->message_id-1,
]);
bot('send'.$rf,[
'chat_id'=>$chat_id2,
$rf=>$x,
'caption'=>"*• تم الانتهاء من التحميل 🔰*",'parse_mode'=>"MarkDown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"شارك البوت ♡",'switch_inline_query'=>"shere"]]]
])
]);
}
if(preg_match("/\(.*?)tiktok(.*?)/\",$text)){
$rf = $ev[1];
$api = json_decode(file_get_contents("https://hostarmof4.ml/Tiktok.php?armofiix=".$text),1);
$vid = $api["link"];
bot('sendvideo', [
'chat_id'=>$chat_id,'video'=>$vid,
'caption'=>"بوت تحميل من تيك توك:
• اهلا بك تم تحميل الفيديو  ⚙

chose the type of media that you want to get 

                                —————
#او اختر صيغة اخرى 👇
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🎧 فيديو بدون حقوق ","callback_data"=>"1#video"]],
[['text'=>"🎧 audio ","callback_data"=>"1#audio"],['text'=>"• voice 🎙","callback_data"=>"1#voice"]],
[['text'=>"شارك البوت ♡",'switch_inline_query'=>"shere"]],
]
])
]);
$down["$from_id"] = $text;
file_put_contents("tiktok.txt",json_encode($down,128|34|256));
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
———————"],
            'reply_markup'=>['inline_keyboard'=>[
                [
                ['text'=>'دخول للبوت ♡','url'=>"t.me/ti1ktbot"]
                ],
             ]]
          ]])
        ]);
}