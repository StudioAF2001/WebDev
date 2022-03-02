<?php
include 'db.inc.php';
date_default_timezone_set("UTC");
$sql  = "SELECT * FROM persons where personid = " . $_POST['personid'];

$result = mysqli_query($con,$sql);

$rowcount = mysqli_affected_rows($con);

if($rowcount == 1)
{
 echo "<br> The details of the selected person are <br> <br>";
 $row = mysqli_fetch_array($result);

 echo "The person id is :". $_POST['personid'] . "<br> <br>";
 echo "First name is :";
 echo $row['firstName'] . "<br>";
 echo "Last Name is :";
 echo $row['lastName'] . "<br>";
 echo "Email is :";
 echo $row['Email'] . "<br>";
 echo "Phone is :";
 echo $row['Phone'] . "<br>";


    $date=date_create($row['DOB']);
 echo "Date of Birth is :" . date_format($date,"D/m/Y");
}

elseif ($rowcount==0){
    echo "No matching records";
}

mysqli_close($con);
?>

<form action ="view.html" method="post">
    <br>
    <input type="submit" value="Return to select page">
</form>
