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
//mysqli_select_db($link,"ginger");
//echo $cid;
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

    
        <title>STUDENT LOGIN FORM</title><br
 

    </head>
    <body>
     <br>
        <div align="center">
        <h2>Think Exam</h2>
        </div>
    
     <form name="myForm" id="myForm" action="assisment_db.php"  method="POST" enctype="multipart/form-data">
    
<center>
</center>
<table align='center'>
<tr>
<th> <h5 style="color:black">name</th>
<td><input type="text" name="name" id="fname" placeholder="eg - john" required></td>
</tr>
<tr>
<th><h5 style="color:black">email</th>
<td><input type="text" name="email"  id='gmail' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required></td>
</tr>
<tr>
<th><h5 style="color:black">gender</th>
<td>

    male<input type="radio" name="gender" id="male" value="MALE" checked="checked" required>
female<input type="radio" name="gender" id="female" value="FEMALE" required>
</td>
</tr>

<tr>
<th><h5 style="color:black">mobile no.</th>
<td><input type="text" name="mobile" id="mobile" maxlength="10" required></td>
</tr>

<tr>
<th> <h5 style="color:black">enrollment no.</th>
<td><input type="text" name="enroll" id="enroll" maxlength="10" required></td>
</tr>

<tr>
<th><h5 style="color:black">date of birth</th>
<td><input type="date" name="dob" id="dob" placeholder="yyyy-mm-dd" required></td>
</tr>

<tr>
<th><h5 style="color:black">date of registration</th>
<td><input type="date" name="dor" id="dor" required></td>
</tr>

<tr>
<th><h5 style="color:black">address</th>
<td><textarea rows="3" cols="20" name="address" id="address" required></textarea></td>
</tr>

<tr>
<th> <h5 style="color:black">ZIP CODE.</th>
<td><input type="text" name="zip" id="zip" minlength="6" maxlength="6" required></td>
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
<td colspan="2" align="center"><input type="submit"   value="submit"/>
<input type="reset" value="Reset Data"/>
</td>
</tr>

</table>
</form>
</body>
</html>

