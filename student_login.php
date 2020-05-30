<?php

session_start();
include 'connection.php';
if(isset($_POST["submit"]))  
{
            $name = $_REQUEST['name']; 
            $password = $_REQUEST['password']; 
            
            $sql="SELECT name,email FROM assisment WHERE name = '".$name."' and email = '".$password."'";
//            echo($sql);exit;
            $result = mysqli_query($conn,$sql);
//            $result = mysqli_query($conn,"SELECT name,email FROM assisment WHERE name = '".$name."' and email = '".$password."'");   
//            echo($result);exit;
            $rows=mysqli_fetch_assoc($result);
//            echo($rows);exit;
            if($rows['name'] == $_REQUEST['name'] && $rows['email'] == $_REQUEST['password']) 
            {   
                $_SESSION['name'] = true; 
                $_SESSION['name'] = $name;   
            header('Location:student_panel.php');}
                
//                echo 'aaa';exit;
//                $sql="SELECT * from test where now() between startdate and enddate and category='Ginger placement test'";
//                $sql="SELECT * from test where category='III'";
//                $result=mysqli_query($conn, $sql);
//                while($rows=mysqli_fetch_assoc($result))
//                
//                 $startdate = $rows['startdate'];
//                 $enddate = $rows['enddate'];
 
// echo($enddate);exit;
 

//                $paymentDate = date('yy-m-d');
//echo($paymentDate);exit;


//if ( $paymentDate > $startdate && $paymentDate<$enddate  ){
    
//    echo "<script>alert('Wrong  password');</script>"; 
//                $_SESSION['name'] = true; 
//                $_SESSION['name'] = $name;               
//                header('Location:student_panel.php');
//                               }           
//else{
//     echo "<script>alert('please try at scheduled time');</script>";       
//            }
//            }
            else
            {                
                  echo "<script>alert('Wrong login or password');</script>";             
}}
//        } 
?>

<html>
<head>
<title>User Login</title><br><br><br><br><br><br><br>
</head>
<body style="background-image: url('pexels-photo-399161.jpeg')">
     <center>
         <form method="post">
             name:<br><input type="text" name="name" id="name" required="name"><br>
             password:<br><input type="password" name="password" id="password" required="password"><br><br>
  
  <input type="submit" name="submit" value="Submit" >

    </center>
</form>
</body>
</html>