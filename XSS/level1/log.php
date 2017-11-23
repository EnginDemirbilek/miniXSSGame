<?php

date_default_timezone_set("America/New_York");

$ip = getenv ('REMOTE_ADDR');
$date = date("Y/m/d h:i:s");
$fp = fopen('log', 'a');
fwrite($fp, "IP:      " . $ip . "\r\n");
fwrite($fp, "Date:    " .$date. "\r\n***************************************************************\r\n");
fclose($fp);
?>