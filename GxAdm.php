<?php

#فكشن الاتصال + الملف كامل برمجتي
#برمجه @pvpppp قناتي @Sero_Bots 
error_reporting(0);
ob_start();
header("Content-Type: application/json; charset=UTF-8");
ob_start();
date_default_timezone_set('Asia/Baghdad');
$API_KEY = "5175389868:AAFkC42aJqgcQ3EUWqbE1dIbvbYHJuVhQIQ" ;
define('API_KEY',$API_KEY);
define("IDBot", explode(":", $API_KEY)[0]);


function bot($method, $datas = []) {
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $options = [
        'http' => [
            'method'  => 'POST',
            'content' => http_build_query($datas),
            'header'  => 'Content-Type: application/x-www-form-urlencoded\r\n',
        ],
    ];
    $context  = stream_context_create($options);
    $res = file_get_contents($url, false, $context);

    if ($res === FALSE) {
        return json_encode(['error' => 'Request failed']);
    } else {
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $update->message->from->first_name;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$getMe = file_get_contents("https://api.telegram.org/bot".API_KEY."/getMe");
$getMeNOTE = json_decode($getMe);
$getMeusername = $getMeNOTE->result->username;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $message->from->id;
$text = $message->text;
$chat_id = $message->chat->id;
$user = $message->from->username;
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $update->message->from->first_name;
$from_id = $update->message->from->id;
$ARMOF = json_decode(file_get_contents("ArMoFF.json"),true);
$set = json_decode(file_get_contents("set.json"),1);
$Df = 1342680269; # ايديك
if(!$ARMOF['sudo']){
$iidsod = $Df;
}elseif($ARMOF['sudo']){
$iidsod = $ARMOF['sudo'];
}

$admin = $iidsod;
$ARMOF = json_decode(file_get_contents("ArMoFF.json"),true);
$suodo = $ARMOF['sudoarr'];
$al = $ARMOF['addmessage'];
$ab = $ARMOF['messagee'];
$all = $al + $ab;

$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 =  $update->callback_query->message->message_id;
$name = $message->from->first_name;
$username = $message->from->username;
$from_id = $message->from->id;
$ARMOF = json_decode(file_get_contents("ArMoFF.json"),true);
$user = file_get_contents("user.txt");
$userr = explode("\n",$user);
$SAll = count($userr)-1;
if ($message && !in_array($from_id,$userr)){
file_put_contents("user.txt",$from_id."\n",FILE_APPEND);
}
if($update->my_chat_member->new_chat_member->status=="kicked"){
file_put_contents("user.txt",str_replace($update->my_chat_member->from->id."\n","",file_get_contents("user.txt")));
}
$text_ch = $update->channel_post->text;
$ch_id = $update->channel_post->chat->id;
$cchcc = explode("\n",file_get_contents("ArMoFFCH.txt"));
$alllch = count($cchcc)-1;
if($text_ch and !in_array($ch_id,$cchcc)){
file_put_contents("ArMoFFCH.txt",$ch_id."\n",FILE_APPEND);
}
$d = date('D');
$day = explode("\n",file_get_contents($d.".txt"));
$todayuser = count($day);

if(!$ARMOF['bot']){
$ARMOF['bot'] = "✅";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}

$ARMOF = json_decode(file_get_contents("ArMoFF.json"),true);
if($message and $ARMOF['bot'] == "❎" and $from_id != $admin){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*
A‼️: البوت معطل ❎
 — — — — — — — — —
*",'parse_mode'=>'markdown',
]);return false;
}
if($message and in_array($from_id,$ARMOF['band'])){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>'
A🏷:انت محظور من البوت 
 — — — — — — — — —
',
]);return false;
}
$ch11 = $ARMOF['ch1'];
$ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ch11."&user_id=".$from_id);
if($message && (strpos($ch1,'"status":"left"') or strpos($ch1,'"Bad Request: USER_ID_INVALID"') or strpos($ch1,'"status":"kicked"'))!== false){
$a = str_replace("@","",$ARMOF['ch1']);
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$ARMOF['ch1']); 
$js = json_decode($get); 
$res = $js->result;
$namech = $res->title; 
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
⚠️  عذراً عزيزي 
⚙  يجب عليك الاشتراك في قنوات البوت أولا
📮  اشترك ثم ارسل /start ⬇️
[https://t.me/$a]
 — — — — — — — — —"
,"parse_mode"=>"MarkDown","disable_web_page_preview"=>true,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"اشتراك : ✅",'url'=>"https://t.me/$a"]]]
])
]);return false;
}
$ch22 = $ARMOF['ch2'];
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ch22."&user_id=".$from_id);
if($message && (strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$ARMOF['ch2']); 
$js = json_decode($get); 
$res = $js->result;
$namech = $res->title; 
$a = str_replace("@","",$ARMOF['ch2']);
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
⚠️  عذراً عزيزي 
⚙  يجب عليك الاشتراك في القناة الثانية للبوت أولا
📮  اشترك ثم ارسل /start ⬇️
[https://t.me/$a]
 — — — — — — — — —"
,"parse_mode"=>"MarkDown","disable_web_page_preview"=>true,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"اشتراك : ✅",'url'=>"https://t.me/$a"]]]
])
]);return false;
}
$ch111 = $ARMOF['ch1p'];
$ch222 = $ARMOF['ch2p'];
$chp = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ch111."&user_id=".$from_id);
$ch2p = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ch222."&user_id=".$from_id);
if($message && (strpos($chp,'"status":"left"') or strpos($chp,'"status":"kicked"') or strpos($chp,'"Bad Request: USER_ID_INVALID"'))!== false){
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$ARMOF['ch1p']); 
$js = json_decode($get); 
$res = $js->result;

$namech = $res->title; 
$chi = $ARMOF['ch1pp'];
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
⚠️  عذراً عزيزي 
⚙  يجب عليك الاشتراك في قنوات البوت أولا
📮  اشترك ثم ارسل /start ⬇️
[$namech](t.me/$chi)
 — — — — — — — — —
",
'parse_mode'=>"MarkDown",
"disable_web_page_preview"=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"اشتراك ⚠️",'url'=>$ARMOF['ch1pp']]]]
])
]);return false;
}
if($message && (strpos($ch2p,'"status":"kicked"') or strpos($ch2p,'"status":"left"') or strpos($ch2p,'"Bad Request: USER_ID_INVALID"') or strpos($ch2p,'"status":"kicked"'))!== false){
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$ARMOF['ch2p']); 
$js = json_decode($get); 
$res = $js->result;
$chi = $ARMOF['ch2pp'];
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
⚠️  عذراً عزيزي 
⚙  يجب عليك الاشتراك في قنوات البوت أولا
📮  اشترك ثم ارسل /start ⬇️
[$namech](t.me/$chi)
 — — — — — — — — —
"
,"parse_mode"=>"MarkDown","disable_web_page_preview"=>true,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"اشتراك ⚠️",'url'=>$ARMOF['ch2pp']]]]
])
]);return false;
}
if($text == "/start"){
if($from_id == $admin or in_array($from_id,$suodo)){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"،🖇:اهلا بك عزيزي .
،🖇:في لوحه الاوامر ألخاصه بالمطور الاساسي .",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'،🖇:الاشتراك الاجباري' ,'callback_data'=>"All Ch"]],
[['text'=>"،🖇:المشتركين {".$SAll."}",'callback_data'=>"mem"]],
[['text'=>'،🖇:تفعيل التنبيه' ,'callback_data'=>"ch1"],['text'=>'،🖇:تعطيل التنبيه' ,'callback_data'=>"ch2"]],
[['text'=>'،🖇:تفعيل التوجيه' ,'callback_data'=>"ON"],['text'=>'،🖇:تعطيل التوجيه' ,'callback_data'=>"Of"]],
[['text'=>"📮:نقل ملكيه" ,'callback_data'=>"AddAdmin"]],
[['text'=>"رفع ادمن ‼" ,'callback_data'=>"addsod"],['text'=>"تنزيل ادمن ⚙" ,'callback_data'=>"downsod"]],
[['text'=>'‼️:جلب نسخه احتياطيه' ,'callback_data'=>"geet"]],
[['text'=>'• رساله قنوات توجيه ، ' ,'callback_data'=>"ArMoFFch"],['text'=>'• رساله قنوات نصية ، ' ,'callback_data'=>"ArMoFFchtx"]],
[['text'=>'• رساله خاص توجيه ، ' ,'callback_data'=>"SendQ1"],['text'=>'• رسالة خاص نصيه، ' ,'callback_data'=>"SendQ2"]],
[['text'=>'- عدد القنوات 📊، ' ,'callback_data'=>"ArMoFF77"]],
[['text'=>'• تعيين الستارت ، ✅' ,'callback_data'=>"setstart"],['text'=>'• حذف الستارت ، ❎' ,'callback_data'=>"unset start"]],
[['text'=>'- عرض الستارت ، ⚙' ,'callback_data'=>"startsho"]],
[['text'=>'🗑:مسح المحظورين' ,'callback_data'=>"delc"],['text'=>'📋:عرض المحظورين' ,'callback_data'=>"ALAA"]],
[['text'=>"حظر شخص",'callback_data'=>"k"],['text'=>"الغاء حظر شخص",'callback_data'=>"unk"]],
[['text'=>"عمل البوت :".$ARMOF['bot'],'callback_data'=>"bots"],['text'=>"الاحصائيات 📊",'callback_data'=>"pannel"]],
[['text'=>"رفع نسخه" ,'callback_data'=>"upload"]]
]])
]);
}}
if($data == "bots"){
if($ARMOF['bot']!="✅"){
$iu = "✅";
}else{
$iu ="❎";}
$ARMOF['bot'] = $iu;
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
"text"=>"عمل البوت ⚙",
 'parse_mode'=>"MarkDown",'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"عمل البوت :".$ARMOF['bot'],'callback_data'=>"bots"]],
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])]);}
if($data == "ArMoFF" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
"text"=>"،🖇:اهلا بك عزيزي .
،🖇:في لوحه الاوامر ألخاصه بالمطور الاساسي .",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'،🖇:الاشتراك الاجباري' ,'callback_data'=>"All Ch"]],
[['text'=>"،🖇:المشتركين {".$SAll."}",'callback_data'=>"mem"]],
[['text'=>'،🖇:تفعيل التنبيه' ,'callback_data'=>"ch1"],['text'=>'،🖇:تعطيل التنبيه' ,'callback_data'=>"ch2"]],
[['text'=>'،🖇:تفعيل التوجيه' ,'callback_data'=>"ON"],['text'=>'،🖇:تعطيل التوجيه' ,'callback_data'=>"Of"]],
[['text'=>"📮:نقل ملكيه" ,'callback_data'=>"AddAdmin"]],
[['text'=>"رفع ادمن ‼" ,'callback_data'=>"addsod"],['text'=>"تنزيل ادمن ⚙" ,'callback_data'=>"downsod"]],
[['text'=>'‼️:جلب نسخه احتياطيه' ,'callback_data'=>"geet"]],
[['text'=>'• رساله قنوات توجيه ، ' ,'callback_data'=>"ArMoFFch"],['text'=>'• رساله قنوات نصية ، ' ,'callback_data'=>"ArMoFFchtx"]],
[['text'=>'• رساله خاص توجيه ، ' ,'callback_data'=>"SendQ1"],['text'=>'• رسالة خاص نصيه، ' ,'callback_data'=>"SendQ2"]],
[['text'=>'- عدد القنوات ،📊 ' ,'callback_data'=>"ArMoFF77"]],
[['text'=>'• تعيين الستارت ،✅ ' ,'callback_data'=>"setstart"],['text'=>'• حذف الستارت ، ❎' ,'callback_data'=>"unset start"]],
[['text'=>'- عرض الستارت ، ⚙' ,'callback_data'=>"startsho"]],
[['text'=>'🗑:مسح المحظورين' ,'callback_data'=>"delc"],['text'=>'📋:عرض المحظورين' ,'callback_data'=>"ALAA"]],
[['text'=>"حظر شخص",'callback_data'=>"k"],['text'=>"الغاء حظر شخص",'callback_data'=>"unk"]],
[['text'=>"عمل البوت :".$ARMOF['bot'],'callback_data'=>"bots"],['text'=>"الاحصائيات 📊",'callback_data'=>"pannel"]],
[['text'=>"رفع نسخه" ,'callback_data'=>"upload"]]
]])
]);
unset($ARMOF['data']);
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}


if($data == "upload"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"،ارسل ملف الاعضاء لطفا ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
unlink("user.txt");
$ARMOF['data'] = "upload";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($message->document and $ARMOF['data'] == "upload"){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->document->file_id])->result->file_path;
 file_put_contents("user.txt",file_get_contents($file));
bot('senddocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("user.txt"),
'caption'=>"تم الرفع والجلب رجوع /start",
]);
$ARMOF['data'] = "done";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($data =="pannel"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*اهلا بك في قسم الاحصائيات 📊
--------------------------
👥 عدد اعضاء بوتك : $SAll
📨 المتفاعلين اليوم  : $todayuser
💌 عدد الرسائل المرسله : ".$ARMOF['addmessage']."
📧 عدد الرسائل المستلمه : ".$ARMOF['messagee']."
📮 مجموع الرسائل : $all
--------------------------
👁 اخر خمس مشتركين :
▫️ 1- ".$userr[count($userr)-2]."
▫️ 2- ️".$userr[count($userr)-3]."
▫️ 3- ️".$userr[count($userr)-4]."
▫️ 4- ️".$userr[count($userr)-5]."
▫️ 5- ️".$userr[count($userr)-6]."
--------------------------*",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
}
if($data =="ALAA"){
for($i=0;$i<count($ARMOF["band"]);$i++){
$admi = $admi.$ARMOF["band"][$i]."\n";
}
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اهلا بك في قائمة المحظورين :📋
$admi",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
}
if($data == "geet"){
bot('senddocument',[
'chat_id'=>$chat_id2,
'document'=>new CURLFile("user.txt"),
'caption'=>"
〽️ الاعضاء $SAll
‼️ رجوع /start",
]);
bot('senddocument',[
'chat_id'=>$chat_id2,
'document'=>new CURLFile("ArMoFF.json"),
'caption'=>"
〽️ الاعدادات 
‼️ رجوع /start",
]);
bot('senddocument',[
'chat_id'=>$chat_id2,
'document'=>new CURLFile("ArMoFFCH.txt"),
'caption'=>"
〽️ القنوات $alllch
‼️ رجوع /start",
]);
}
if($data == "downsod" and $chat_id2 == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📮 ارسل ايدي الادمن ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['data'] = "downsod";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($text and $ARMOF['data'] == "downsod" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"✔ تم تنزيل الادمن ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
bot("sendmessage",[
"chat_id"=>$text,
"text"=>"✔تم تنزيلك من الادمنيه ",
]);
$key = array_search($text,$ARMOF["sudoarr"]);
unset($ARMOF["sudoarr"][$key]);
$ARMOF["sudoarr"] = array_values($ARMOF["sudoarr"]); 
unset($ARMOF['data']);
$ARMOF = json_encode($ARMOF,32|128|265,true);
file_put_contents("ArMoFF.json",$ARMOF);
}
if($data == "AddAdmin" and $chat_id2 == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"‼ ارسل الان ايدي المطور الجديد ✅",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['data'] = "Addadmin";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($text and $ARMOF['data'] == "Addadmin" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"تم رفع الادمن وتم التنزيل ✅",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
bot("sendmessage",[
"chat_id"=>$text,
"text"=>"✔تم رفعك ادمن بالبوت",
]);
$ARMOF['sudo'] = "$text";
unset($ARMOF['data']);
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($data == "addsod" and $chat_id2 == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📮 ارسل ايدي الادمن ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['data'] = "addsod";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($text and $ARMOF['data'] == "addsod" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"✔تم رفع الادمن ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
bot("sendmessage",[
"chat_id"=>$text,
"text"=>"✔تم رفعك ادمن بالبوت",
]);
$ARMOF['sudoarr'][] = "$text";
unset($ARMOF['data']);
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($data == "Sender"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'،🖇:اهلا بك في قسم الاذاعه',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اذاعه توجيه' ,'callback_data'=>"SendQ1"],['text'=>'اذاعه رساله' ,'callback_data'=>"SendQ2"]],
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
}
if($data == "All Ch"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'،🖇:اهلا بك في قسم الاشتراك الاجباري ',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اضف قناة اولى' ,'callback_data'=>"AddCh1"],['text'=>'حذف القناة الولى' ,'callback_data'=>"DelCh1"]],
[['text'=>'اضف قناة ثانيه' ,'callback_data'=>"AddCh2"],['text'=>'حذف القناة الثانيه' ,'callback_data'=>"DelCh2"]],
[['text'=>' عرض قنوات الاشتراك العامة' ,'callback_data'=>"ALLCH"]],
[['text'=>'⬆️ اعدادات القنوات العامة ⚙' ,'callback_data'=>"."]],
[['text'=>'⬇️ اعدادات القنوات الخاصة ⚙' ,'callback_data'=>"."]],
[['text'=>'اضف قناة اولى ' ,'callback_data'=>"AddCh1p"],['text'=>'حذف القناة الاولى ' ,'callback_data'=>"DelCh1p"]],
[['text'=>'اضف قناة ثانية' ,'callback_data'=>"AddCh2p"],['text'=>'حذف القناة الثانية' ,'callback_data'=>"DelCh2p"]],
[['text'=>'عرض قنوات الاشتراك الخاصه' ,'callback_data'=>"ALLCHp"]],
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
}
if($data == "AddCh1p"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'،(،🖇:ارسل ايدي القناة -100)',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['data'] = "okch1p";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($text and $ARMOF['data'] == "addp1" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"،🖇:تم اضافه القناة 
،🖇:قم برفع البوت مشرف",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['ch1pp'] = "$text";
$ARMOF['data'] = "stop";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($text and $ARMOF['data'] == "okch1p" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"،🖇:تم اضافه القناة
،🖇:قم بأرسال رابط القناة الخاصة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['ch1p'] = "$text";
$ARMOF['data'] = "addp1";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($data == "DelCh1p"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'،🖇:هل أنت متأكد من أنك تريد حذف القناة ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء', 'callback_data'=>'ArMoFF'],['text'=>'تأكيد','callback_data'=>'OKDelCh1p']],
]])
]);
}
if($data == "OKDelCh1p"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'،🖇:تم حذف القناة الاولى من الإشتراك الإجباري',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
unset($ARMOF['ch1p']);
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($data == "AddCh2p"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'(،🖇:ارسل ايدي القناة -100)',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['data'] = "okch2p";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($text and $ARMOF['data'] == "setaddp" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"،🖇:تم اضافه القناة
،🖇:قم برفع البوت مشرف",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['ch2pp'] = "$text";
$ARMOF['data'] = "stop";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($text and $ARMOF['data'] == "okch2p" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"،🖇:تم اضافه القناة 
،🖇:قم بأرسال رابط القناة الخاصة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['ch2p'] = "$text";
$ARMOF['data'] = "setaddp";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($data == "DelCh2p"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'،🖇:هل أنت متأكد من أنك تريد حذف القناة ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء', 'callback_data'=>'ArMoFF'],['text'=>'تأكيد','callback_data'=>'OKDelCh2p']],
]])
]);
}
if($data == "OKDelCh2p"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'،🖇:تم حذف القناة الاولى من الإشتراك الإجباري',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
unset($ARMOF['ch2p']);
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($data == "ALLCHp"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"،🖇:هذه قائمة القنوات الأشتراك الاجباري 
،🖇:القناة الاولى ".$ARMOF['ch1p']."
،🖇:القناة الثانية  ".$ARMOF['ch2p'],
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
}
if($data == "AddCh1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'،🖇 ارسل معرف قناتك مع @',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['data'] = "okch1";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($text and $ARMOF['data'] == "okch1" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"،🖇:تم اضافه القناة [$text]
،🖇:قم برفع البوت ادمن في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['ch1'] = "$text";
$ARMOF['data'] = "stop";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($data == "DelCh1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'،🖇:هل أنت متأكد من أنك تريد حذف القناة ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء', 'callback_data'=>'ArMoFF'],['text'=>'تاكيد','callback_data'=>'OKDelCh1']],
]])
]);
}
if($data == "OKDelCh1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'،🖇:تم حذف القناة الاولى من الإشتراك الإجباري',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
unset($ARMOF['ch1']);
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($data == "AddCh2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'،🖇 ارسل معرف قناتك مع @',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['data'] = "okch2";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($text and $ARMOF['data'] == "okch2" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"،🖇:تم اضافه القناة [$text]
،🖇:قم برفع البوت ادمن في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['ch2'] = "$text";
$ARMOF['data'] = "stop";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($data == "DelCh2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'،🖇:هل أنت متأكد من أنك تريد حذف القناة ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء', 'callback_data'=>'ArMoFF'],['text'=>'تاكيد','callback_data'=>'OKDelCh2']],
]])
]);
}
if($data == "OKDelCh2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'،🖇:تم حذف القناة الاولى من الإشتراك الإجباري',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
unset($ARMOF['ch2']);
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($data == "ALLCH"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"،🖇:هذه قائمة القنوات الأشتراك الاجباري 
،🖇:القناة الاولى ".$ARMOF['ch1']."
،🖇:القناة الثانية  ".$ARMOF['ch2'],
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
}
if($data == "SendQ1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"،🖇:ارسل رسالتك وسيتم توجيهها لـ [ $SAll ] ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$set['ok'] = 0;
$set['start'] = 100;
file_put_contents("set.json",json_encode($set));
$ARMOF['ok'] = "on";
$ARMOF['data'] = "okoo";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
##
if($data == "SendQ2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"،🖇:ارسل رسالتك وسيتم ارسالها  [ $SAll ] مشترك",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$set['ok'] = 0;
$set['start'] = 100;
file_put_contents("set.json",json_encode($set));
$ARMOF['ok'] = "on";
$ARMOF['data'] = "oksend";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
#####@#@@####@@#
if($data == "mem"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"،🖇:عدد مشتركين البوت  [ $SAll ]",
 'reply_markup'=>json_encode([ 
 'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
}
if($data == "ch1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'،🖇:تم تفعيل الاشعارات',
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['come'] = "welcome";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($text == "/start" and $ARMOF['come'] == "welcome" and $from_id != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"
،🖇:عضو جديد قام بالدخول الى البوت 
،🖇:الاسم : [$name](tg://user?id=$from_id) 
،🖇:المعرف : [@$username](tg://user?id=$from_id)  
،🖇:الايدي:  [$from_id](tg://user?id=$from_id)  
،🖇:عدد المشتركين : { $SAll }  ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($data == "ch2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'،🖇:تم تعطيل الاشعارات ',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['come'] = "nowelcome";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($data == "ON"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'،🖇:تم تفعيل التوجيه',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['message'] = "textwelcome";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($message and $ARMOF['message'] == "textwelcome" and $from_id != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
}
if($message and $ARMOF['message'] == "textwelcome" and $from_id == $admin){
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,
]);
}
if($data == "Of"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'،🖇:تم تعطيل التوجيه',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['message'] = "nowellcome";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}

####توجيه قناة ###
if($data == "ArMoFFch"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $alllch ] قناة ، 🐙 ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$set['ok'] = 0;
$set['start'] = 100;
file_put_contents("set.json",json_encode($set));
$ARMOF['ok'] = "on";
$ARMOF['data'] = "armofch";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($data == "ArMoFFchtx"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $alllch ] قناة ، 🐠",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$set['ok'] = 0;
$set['start'] = 100;
file_put_contents("set.json",json_encode($set));
$ARMOF['ok'] = "on";
$ARMOF['data'] = "ArMoFFoch";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($data == "ArMoFF77"){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
'text'=>"- عدد قنوات البوت  [ $alllch ] مشترك ، ",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
}
if($data =="unk"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ارسل ايدي الحيوان لاقوم بالغاء حظره",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['data'] = "un";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($text and $ARMOF['data'] == "un"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم الغاء حظره $text",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$key = array_search($text,$ARMOF['band']);
unset($ARMOF['data']);
unset($ARMOF['band'][$key]);
$ARMOF['band']= array_values($ARMOF['band']);
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265,true));
}
if($data =="delc"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تم حذف المحظورين",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
unset($ARMOF['band']);
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($data =="k"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ارسل ايدي الحيوان لاقوم بحظره",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['data'] = "ok";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($text and $ARMOF['data'] == "ok"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم حظره $text",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['band'][] = $text;
unset($ARMOF['data']);
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($data == "startsho" and $chat_id2 == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⬇️رسالة الستارت هيه\n---------------\n ".$ARMOF['start'],
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
}
if($data == "unset start" and $chat_id2 == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تم حذف ال ستارت ✅",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
unst($ARMOF['start']);
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($data == "setstart" and $chat_id2 == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ارسل كليشة الستارت الجديدة ✅",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['data'] = "startset";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($text and $ARMOF['data'] == "startset" and $from_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم تعيين الستارت ✅",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
$ARMOF['start'] = "$text";
$ARMOF['data'] = "stop";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
if($text == "/start" ){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>$ARMOF['start'],
]);
}
#####الاذاعة####
######

if($message and $ARMOF['data'] == "oksend" and $from_id == $admin){
if($ARMOF['ok'] == "on"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'،🖇:جاري الارسال'
]);
$ARMOF['ok'] = "of";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
for($v=$set['ok'];$v<$set['start'];$v++){
bot('EditMessageText',[
'chat_id' =>$chat_id,
'message_id'=>$message->message_id + 1,
'text'=>"تم الوصول الى ~ ".$v,'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
}
for($v=$set['ok'];$v<$set['start'];$v++){
bot('copymessage',[
'chat_id'=>$userr[$v],
'from_chat_id'=>$admin,
'message_id'=>$message->message_id,
]);
}
if($v = $set['start']){
$set['ok'] = $set['ok']+100;
$set['start'] = $set['start']+100;
file_put_contents("set.json",json_encode($set));
header("Refresh:2");
header("Location: https://".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
file_get_contents("https://".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
}
$set = json_decode(file_get_contents("set.json"),1);
if($set['start'] >= count($userr)){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"،🖇✅:تم الارسال الى $SAll اعضاء",
]);
unlink("ok.txt");
unlink("set.json");
$ARMOF['data'] = "notsend";
$ARMOF['ok'] = "on";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
}
if($message and $ARMOF['data'] == "ArMoFFoch" and $from_id == $admin){
if($ARMOF['ok'] == "on"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'،🖇:جاري الارسال',
]);
$ARMOF['ok'] = "of";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
for($v=$set['ok'];$v<$set['start'];$v++){
bot('EditMessageText',[
'chat_id' =>$chat_id,
'message_id'=>$message->message_id + 1,
'text'=>"تم الوصول الى ~ ".$v,'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
}
for($v=$set['ok'];$v<$set['start'];$v++){
bot('copymessage',[
'chat_id'=>$cchcc[$v],
'from_chat_id'=>$admin,
'message_id'=>$message->message_id,
]);
}
if($v = $set['start']){
$set['ok'] = $set['ok']+100;
$set['start'] = $set['start']+100;
file_put_contents("set.json",json_encode($set));
header("Refresh:2");
header("Location: https://".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
file_get_contents("https://".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
}
$set = json_decode(file_get_contents("set.json"),1);
if($set['start'] >= count($cchcc)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"،🖇✅:تم الارسال الى  $alllch قناة ",
]);
unlink("ok.txt");
unlink("set.json");
$ARMOF['data'] = "don";
$ARMOF['ok'] = "on";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
}
if($message and $ARMOF['data']== "armofch" and $from_id == $admin){
if($ARMOF['ok'] == "on"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'،🖇:جاري الارسال',
]);
$ARMOF['ok'] = "of";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
for($v=$set['ok'];$v<$set['start'];$v++){
bot('EditMessageText',[
'chat_id' =>$chat_id,
'message_id'=>$message->message_id + 1,
'text'=>"تم الوصول الى ~ ".$v, 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
}
for($v=$set['ok'];$v<$set['start'];$v++){
bot('forwardMessage', [
'chat_id'=>$cchcc[$v],
'from_chat_id'=>$admin,
'message_id'=>$message->message_id
]);
}
if($v = $set['start']){
$set['ok'] = $set['ok']+100;
$set['start'] = $set['start']+100;
file_put_contents("set.json",json_encode($set));
header("Refresh:2");
header("Location: https://".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
file_get_contents("https://".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
}
$set = json_decode(file_get_contents("set.json"),1);
if($set['start'] >= count($cchcc)){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"،🖇✅:تم توجيه  $alllch قناة ",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
unlink("ok.txt");
unlink("set.json");
$ARMOF['data'] = "notsend";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
}
$set = json_decode(file_get_contents("set.json"),1);
if($message and $ARMOF['data'] == "okoo" and $from_id == $admin){
if($ARMOF['ok'] == "on"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'،🖇: جاري الارسال',
]);
$ARMOF['ok'] = "of";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
for($v=$set['ok'];$v<$set['start'];$v++){
bot('EditMessageText',[
'chat_id' =>$chat_id,
'message_id'=>$message->message_id + 1,
'text'=>"تم الوصول الى ~ ".$v, 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
}
for($v=$set['ok'];$v<$set['start'];$v++){
bot('forwardMessage', [
'chat_id'=>$userr[$v],
'from_chat_id'=>$admin,
'message_id'=>$message->message_id
]);
}
if($v = $set['start']){
$set['ok'] = $set['ok']+100;
$set['start'] = $set['start']+100;
file_put_contents("set.json",json_encode($set));
header("Refresh:2");
header("Location: https://".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
file_get_contents("https://".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
}
if($set['start'] >= count($userr)){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"،🖇✅:تم الارسال الى $SAll اعضاء",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ArMoFF"]],
]])
]);
unlink("ok.txt");
unlink("set.json");
$ARMOF['data'] = "notsend";
file_put_contents("ArMoFF.json",json_encode($ARMOF,32|128|265));
}
}



$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$from_id2 = $update->callback_query->from->id;


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
if(strpos($text , 'tiktok') !== false) {
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