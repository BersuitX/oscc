<?php
$data=array();
for($i=0; $i<50; $i++) {
 $data['num'.$i]=base64_encode($i);
}
print_r(json_encode($data));
?>
