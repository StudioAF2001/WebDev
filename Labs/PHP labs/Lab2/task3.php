<?php
$name =$_POST["name"];
$dob = $_POST["dob"];

if (empty($name) && empty($dob)){
    echo "fields are empty";
}else {
    $DOB_dmy = date("d/m/Y", strtotime($dob));
    $DOB_ddmy = date("l,d-F-y",strtotime($dob));
    $DOB_Y = date("Y",strtotime($dob));
    echo $name . ", you were born on " . $DOB_dmy . "<br>";
    echo $name . ", you were born on " . $DOB_ddmy . "<br>";
    echo $name . ", you were born on " . $DOB_Y . "<br>";
}

