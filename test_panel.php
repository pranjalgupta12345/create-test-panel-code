<!DOCTYPE html>

    
    <?php 

session_start(); 
if (session_id() == '' || !isset($_SESSION['login'])) { 
  header('Location:login.php');
} else {     
//  echo "Hi, " . $_SESSION['login'];
?>
<a href="logout.php"><h6 align="right"> </h6></a>
<?php 
}
?>
    <?php
include 'connection.php';
?>

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
        
    <a href="#add new student" onclick="location.href='assisment_web.php'">Home</a>
    <div class="subnav">
    <button class="subnavbtn">Student <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
    <a href="#company" onclick="location.href='assisment.php'" >Add new </a>
   
    </div>
    </div> 
  
   

    </div>

    
        <title>STUDENT LOGIN FORM</title><br>
    </head>
    <body>
<!--<body style="background-image: url(30719255-close-up-of-business-objects-at-workplace-on-background-of-office-workers-interacting.jpg);">     -->
     <br>
        <div align="center">
        <h2>Think Exam</h2>
        </div>
    
     <form name="myForm" id="myForm" method="POST" onsubmit="return validate()" enctype="multipart/form-data">
    
<center>
</center>
<table align='center'>
<tr>
<th> <h5 style="color:black">Test name</th>
<td><input type="text" name="testname" placeholder="eg- test_name" id="tname" required></td>
</tr>



<!--<tr>
<th> <h5 style="color:black">Total marks</th>
<td><input type="number" name="marks" placeholder="in digits" id="marks" required></td>
</tr>-->

<tr>
<th> <h5 style="color:black">Duration</th>
<td><input type="number" name="duration" placeholder="in minutes" id="duration"  required></td>
</tr>

 <tr>
            <th><label for=" category "><b><h5>category</h5></b></label><br></th>
            <td><select  name="category" id="category" required>
            <option value="SELECT" >select</option>
            <option value="Ginger placement test">Ginger placement test</option>
            <option value="II">II</option>
            <option value="III">III</option>
            </select>
            </td>
            </tr>



<tr>
<th> <h5 style="color:black">Start date</th>
<td><input type="datetime-local" name="startdate" id="startdate"  required></td>
</tr>
<tr>
<th> <h5 style="color:black">End date</th>
<td><input type="datetime-local" name="enddate"  id="enddate" required></td>
</tr>

<tr>
    <td colspan="2" align="center"><input type="submit" value="submit" >
<input type="reset" value="Reset Data"/>
</td>
</tr>

</table>
</form>
</body>
</html>
<script>
    function validate()
{
    var startdate= document.getElementById('startdate').value;
  var enddate= document.getElementById('enddate').value;
  var eDate = new Date(enddate);
  
  var sDate = new Date(startdate);
  if(startdate!= '' && enddate!= '' && sDate> eDate)
    {
//             window.location.href = "quiz.php";
    alert("Please ensure that the End Date is greater than or equal to the Start Date.");
    return false;
    }
    else{
        document.getElementById("myForm").action = "test_panel_db.php";
        
    }
}
            </script>