
<?php
//   echo 'aaa';exit; 
include_once ('connection.php');
$id = $_POST['id'];
//        echo($id);exit;
        
$testname = mysql_real_escape_string($_POST['testname']);
$duration = $_POST['duration'];
$category = mysql_real_escape_string($_POST['category']);
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];

$sql = "UPDATE test SET testname ='$testname', duration='$duration',category='$category',startdate='$startdate',enddate='$enddate'  WHERE id=$id";
//        echo($sql);exit;
$db = mysqli_query($conn, $sql);
echo mysqli_affected_rows($conn);
header('location:test_panel_web.php');
   
?>
