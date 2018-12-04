<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', -1);
$host = $argv[1];
$ports = array(80, 443, 8080);
foreach ($ports as $port) {
 $connection = @fsockopen($host, $port, $errno, $errstr, 2);
 if (is_resource($connection))
 {
  echo $host . ':' . $port . ' ' . '(' . getservbyport($port, 'tcp') . ') is open.' . "\n";
  fclose($connection);
 }
  else
 {
 echo $host . ':' . $port . ' is not responding.' . "\n";
 }
}
