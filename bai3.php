<?php
$s1 = 'Hello world !';
$s2 = 'world';
if (strlen(strstr($s1, $s2)) > 0) {
echo 's1 có chứa s2';
} else {
echo 's1 không chứa s2';
}

?>