<?php
$name = array(
    "Hoang" =>31,
    "Nam" => 41,
    "Minh" => 39,
    "Hoa" => 40

);

foreach ($name as $x=> $age)   
		{
            if($age==max($name))
			echo "Tuổi lớn nhất: ".$x." <br> ";
        }
foreach ($name as $x=> $age)   
		{
            if($age==min($name))
			echo "Tuổi nhỏ nhất: ".$x. "<br> ";
        }
        sort($name);
        foreach( $name as $x=> $age) {
            echo "Sắp xếp tuổi theo thứ tự tăng dần: ".$age. "<br>";
        }
?>