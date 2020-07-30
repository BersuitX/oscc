<?php
$timeout=$_REQUEST['to'];
sleep($timeout);
echo "Receive message at ".$timeout." seconds\n";
?>
