<?php
$f = fopen("ip.txt", 'a');
$n = time();
$t = gmstrftime("%a, %d %b %Y %H:%M:%S GMT", $n);
fwrite($f,"IP Address : ".$_SERVER["REMOTE_ADDR"]."\n");
fwrite($f,"User Agent : ".$_SERVER['HTTP_USER_AGENT']."\n");
fwrite($f,"Referer Page : ".$_SERVER["HTTP_REFERER"]."\n");
fwrite($f,"Time : ".$t."\n\n\n\n");
fclose($f);
?>
