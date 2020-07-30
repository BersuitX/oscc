<?php
$timeout=$_REQUEST['to'];
sleep($timeout);
echo json_encode("Receive message at ".$timeout." seconds");
?>
