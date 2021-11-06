<?php

$ip = gethostbyname($_SERVER["REMOTE_ADDR"]);
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_URL, 'http://check.getipintel.net/check.php?ip='.$ip.'&contact=alegra@network-punisher.com');
 $result = curl_exec($ch);
 curl_close($ch);

if($result == '0'){
 $status =  "Residential IP";
}
else if($result == '1'){
 $status =  "VPN or Proxy Detected";
}
else {
 $status = "Unable to Verify";
}

?>