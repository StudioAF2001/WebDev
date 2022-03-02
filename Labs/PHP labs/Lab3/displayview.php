<?php
session_start();
include 'db.inc.php';

$sql = "SELECT * FROM persons WHERE personid =" .$_POST['personid'];

if(!$result = mysqli_query($con,$sql)){
    die('Error in querying the database'.mysqli_error($con));
}
$rowcount = mysqli_affected_rows($con);

$_SESSION['personid']=$_POST['personid'];
if($rowcount==1){
    $row = mysqli_fetch_array($result);

    $_SESSION['personid']=$row['perssonId'];
    $_SESSION['firstname']=$row['firstName'];
    $_SESSION['lastname']=$row['lastName'];
    $_SESSION['dob']=$row['DOB'];
    $_SESSION['email']=$row['Email'];
    $_SESSION['phone']=$row['Phone'];
}

elseif ($rowcount == 0){
    unset($_SESSION['firstname']);
    unset($_SESSION['lastname']);
    unset($_SESSION['dob']);
    unset($_SESSION['email']);
    unset($_SESSION['phone']);
}
mysqli_close($con);

header('Location : view.html.php');

