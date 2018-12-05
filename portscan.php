<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', -1);

$addr=file('legados.txt');

foreach($addr as $ip) {
list($host, $port)=explode(":",$ip);

$connection = @fsockopen(trim($host), trim($port), $errno, $errstr, 60);
 if(is_resource($connection)) {
  echo trim($host).":".trim($port)." is open\n";
  fclose($connection);
 } else {
  echo trim($host).":".trim($port)." Status: ".$errstr."\n";
 }

}
?>
