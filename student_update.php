
   <?php
include_once ('connection.php');
$id = $_POST['id'];
//        echo($id);exit;
        
    	$name = $_POST['name']; 
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $dor = $_POST['dor'];
        $enroll = $_POST['enroll'];
        $zip = $_POST['zip'];   
        $category = $_POST['category'];  
//         $id = $_GET['id'];
//              echo ("123");exit;
    	$sql = "UPDATE assisment SET name ='$name', email='$email',mobile='$mobile',address='$address',gender='$gender',dob='$dob',dor='$dor',enroll='$enroll',zip='$zip',category='$category'  WHERE id=$id";
//        echo($sql);exit;
     $db = mysqli_query($conn, $sql);
echo mysqli_affected_rows($conn);
    	header('location:assisment_web.php');
    ?>
