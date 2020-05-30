<?php
include 'connection.php';

$fname = mysql_real_escape_string($_POST['name']);
$gmail = mysql_real_escape_string($_POST['email']);
$mobile = mysql_real_escape_string($_POST['mobile']);
$address = mysql_real_escape_string($_POST['address']);
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$dor = $_POST['dor'];
$enroll = mysql_real_escape_string($_POST['enroll']);
$zip = mysql_real_escape_string($_POST['zip']);
$category = $_POST['category'];
$sql = "INSERT INTO assisment(name,email,mobile,address,gender,dob,dor,enroll,zip,category) VALUES('$fname','$gmail','$mobile','$address','$gender','$dob','$dor','$enroll','$zip','$category')";
//echo $sql;exit;
$db = mysqli_query($conn, $sql);
echo mysqli_affected_rows($conn);
header('location:assisment_web.php');
//echo "records inserted succesfully";
?>
