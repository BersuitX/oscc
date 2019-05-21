<?php
$data=array();
for($i=0; $i<100; $i++) {
 $data['num'.$i]="$i";
}
print_r(json_encode($data));
?>
