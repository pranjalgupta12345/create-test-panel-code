<?php 
include_once ('connection.php');
$id = $_GET['id'];
$sql = "DELETE from assisment WHERE id=$id";
$res = mysqli_query($conn,$sql);
header('location:assisment_web.php');
?>
