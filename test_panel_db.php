

<?php

include 'connection.php';

$testname = mysql_real_escape_string($_POST['testname']);
$duration = $_POST['duration'];
$category = mysql_real_escape_string($_POST['category']);
//echo($enroll);exit;
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
//echo($enddate);exit;
//echo 'aaa';exit;


 
$sql = "INSERT INTO test(testname,duration,category,startdate,enddate) VALUES('$testname','$duration','$category','$startdate','$enddate')";
//echo $sql;exit;
  
$db = mysqli_query($conn, $sql);
echo mysqli_affected_rows($conn);
header('location:test_panel_web.php');
    

?>