<?php
$dbh = @mysqli_connect($_ENV['MICLAROAPP_MYSQL_SERVICE_HOST'], 'clarotestusr', 'pQxg58*7', 'ClaroTest');
if($dbh) {
 echo "Connection succesfully\n";
} else {
 echo "Connection failed\n";
}
mysqli_close($dbh);
?>
