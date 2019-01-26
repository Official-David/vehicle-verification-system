<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "vvs";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//to test if connection to database successful
if (mysqli_connect_errno()) {
    die("Datebase connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
}
?>