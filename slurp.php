<?php
define('BASEPATH', '.');
include('config.php');
print_r($config['servicios']);
//array_unique($config['servicios']);

foreach($config['servicios'] as $method => $servicio) {
 echo $method."\n\t".$servicio."\n";

 $ci=curl_init();
 curl_setopt($ci, CURLOPT_URL, $servicio);
 curl_setopt($ci, CURLOPT_METHOD, 'POST');
 //curl_setopt($ci, CURLOPT_RETURNTRANSFER, 0);
 $str=@curl_exec($ci);
 //curl_getinfo($ci);
 curl_close($ci);
 sleep(2);

}
?>
