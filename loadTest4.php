<?php
$data=array();
for($i=0; $i<250; $i++) {
 $data['num'.$i]=md5($i);
}
print_r(json_encode($data));
?>
