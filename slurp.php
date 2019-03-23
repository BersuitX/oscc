<?php
define('BASEPATH', '.');
include('config.php');
//print_r($config['servicios']);
//array_unique($config['servicios']);

foreach($config['servicios'] as $method => $servicio) {
 echo "M&eacute;todo: ".$method."<br>";
 echo "Servicio: ".$servicio."<br>";

 $ci=curl_init();
 curl_setopt($ci, CURLOPT_URL, $servicio);
 curl_setopt($ci, CURLOPT_POST, 1);
 curl_setopt($ci, CURLOPT_NOBODY, 1);
 curl_setopt($ci, CURLOPT_RETURNTRANSFER, 0);
 curl_exec($ci);
 $curlInfo=curl_getinfo($ci);
 echo "Tiempo total: ".$curlInfo['total_time']."<br>";
 curl_close($ci);
 //sleep(2);
}
?>
