<?php
$hostname = "localhost";
$username = "C00261511";
$password = "@Mittens2001!";

$dbname = "MyDBC00261511_";

$con = mysqli_connect($hostname, $username,$password, $dbname);

if(!$con)
{
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
