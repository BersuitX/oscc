<?php
$data=array();
for($i=0; $i<50; $i++) {
 $data['num'.$i]=md5($i);
}
error_log(json_encode($data),3,'/logs/generic/'.uniqid().$_ENV['HOSTNAME'].'.json');
error_log(json_encode($data),3,'/logs/'.uniqid().$_ENV['HOSTNAME'].'.json');
?>
