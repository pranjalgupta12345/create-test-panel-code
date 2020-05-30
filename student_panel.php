<?php
session_start(); 
if (session_id() == '' || !isset($_SESSION['name'])) 
    { 
  header('Location:student_login.php');
}
else
    {     
  echo "Hi, " . $_SESSION['name'];
}

?>

<!DOCTYPE html>
    <HTML>
        <head>
            <!DOCTYPE HTML>
<html>
<head>
    
    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: #333; 
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: red;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: red;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
</style>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
    
    <div class="navbar">   
    <a href="#home" onclick="location.href='student_panel.php'">Home</a>
    <div class="subnav">
    <button class="subnavbtn">Logout<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
    <a href="#logout" onclick="location.href='student_logout.php'">logout</a>
    </div>
    </div>
    </div>
    
    <br><br> 
    
</style>
</head>
<body style="background-image: url(30719255-close-up-of-business-objects-at-workplace-on-background-of-office-workers-interacting.jpg);">
<h1 align="center">Student Panel<h1>   <br>
        <H3 align="center">Availavle test</H3>
            <table align="center">
  <tbody>
    <tr>
      <td><a href="quiz1.php">Test link (Ginger placement test)</a></td>
      </tr>
     <tr>
      <td><a href="quiz2.php">Test link (category-II)</a></td>
      </tr>
      <tr>
  <td><a href="quiz3.php">Test link (category-III)</a></td>
    </tr>
  </tbody>
            </table>
        <br><br>
        <center><h3>NOTE:<br><br>
            Click the 'Submit Test' button given in the bottom of this page to Submit your answers.<br>
            Test will be submitted after time is Expired.<br>
            Do not refresh the test Page<br><br></center>
      </h3>
        <H3 align="center"><MARQUEE>NOTE- The TEST starts Automatically after Clicking on LINK and closes after Assigned Time....</MARQUEE></H3> 
           
           
 <?php
//function writeMsg() {
// $paymentDate = date('Y-m-d');
//$contract2DateEnd = date('Y-m-d', strtotime("01/01/2022"));
//$paymentDate=date('Y-m-d', strtotime($paymentDate));
////echo $paymentDate; // echos today! 
//$contractDateBegin = date('Y-m-d', strtotime($contract2DateEnd));
//$contractDateEnd = date('Y-m-d', strtotime("01/01/2022"));
//
//if (($paymentDate >= $contractDateBegin) && ($paymentDate <= $contractDateEnd)){
//    echo "<script>alert('Wrong login or password');</script>";       
//}else{
//     echo "<script>alert('right login or password');</script>";       
//}
//}

?>          
           
<script language="javascript" type="text/javascript">
    

//    function validate()
////{alert("aaa");exit;
//    var startdate= document.getElementById('startdate').value;
//  var enddate= document.getElementById('enddate').value;
//  var eDate = new Date(enddate);
//  
//  var sDate = new Date(startdate);
//  if(startdate!= '' && enddate!= '' && sDate> eDate)
//    {
//             window.location.href = "quiz.php";
//    
//    return false;
//    }
//    else{
//        document.getElementById("myForm").action = "test_panel_db.php";
//        
//    }
//}
           
    

//function popitup(url) {
//newwindow=window.open(url,'name','scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,Fullscreen=yes');
//if (window.focus) {newwindow.focus()}
//return false;
//}


</script>


      
  </body>
     </HTML>