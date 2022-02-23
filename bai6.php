<?php
$str = 'Hello world !';
$sub = 'world';
if (strlen(strstr($str, $sub)) > 0) {
echo 'Ton tai';
} else {
echo 'Khong ton tai';
}

?>