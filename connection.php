<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

$mysql_hostname="localhost";
$mysql_user="root";
$mysql_password="123456";
$mysql_database="ginger";
$port="3308";
$conn = mysqli_connect($mysql_hostname,$mysql_user,$mysql_password,$mysql_database, $port) or die("could not connect database".mysql_error());

//var_dump($conn);
mysqli_select_db($conn,$mysql_database)or die ("could not select database");



?>
