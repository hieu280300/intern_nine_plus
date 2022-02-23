<?php
$hi = array(0,1,2,4,5);
echo count($hi)."<br>" ;
unset($hi[0]);
unset($hi[2]);
array_push($hi,"số 3");
print_r ($hi);

?>