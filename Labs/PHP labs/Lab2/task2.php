<?php
$height = $_POST["height"];
$weight = $_POST["weight"];
if (empty($height) && empty($weight)){
	echo "name is empty";
}else {
    $BMI = $weight / ($height)^2;
	echo "BMI = " . $BMI;
}
