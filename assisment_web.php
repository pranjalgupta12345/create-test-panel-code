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

include_once ('connection.php');
//$id = $_POST['id'];
$sql = "select * from assisment";
//echo $sql; exit;
$res = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
    <HTML>
        <head>
            <TITLE> FORM_WEB </TITLE>
                
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
            </head>
            </title>
            <body>
    <div class="navbar">
        
    <a href="#home" onclick="location.href='assisment_web.php'">Home</a>
    <div class="subnav">
    <button class="subnavbtn">Student <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
    <a href="#add" onclick="location.href='assisment.php'" >Add New Student</a>
<!--    <a href="#company" onclick="location.href='mailnotification.php'" >Send Mail Notification</a>-->
    </div>
    </div> 
 
    
    <div class="subnav">
    <button class="subnavbtn">Test<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
    <a href="#test" onclick="location.href='test_panel.php'">Create test</a>
    <a href="#test" onclick="location.href='test_panel_web.php'">Show Test details/table</a>
<!--    <a href="#test" onclick="location.href='quiz1.php'">Category-I Test</a>
    <a href="#test" onclick="location.href='quiz2.php'">Category-II Test</a>
    <a href="#test" onclick="location.href='quiz3.php'">Category-III Test</a>-->
    </div>
    </div>

   
    <div class="subnav">
    <button class="subnavbtn">Admin<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
    <a href="#logout" onclick="location.href='logout.php'">Logout</a>
    </div>
    </div>
    
  
    </div>

                <br><br>
                <div align="center">
                <h2>Think Exam</h2>
                </div>
    
            
                <table id="myTable" align="center" border="10px" style="width:100%">
                <tr>
                <th colspan="9"></th>
                </tr>
                <tbody>
               <tr>    
                    <th>name</th>
                    <th>email</th>
                    <th>mobile</th>
                    <th>address</th>
                    <th>gender</th>
                    <th>dob</th>
                    <th>dor</th>
                    <th>enroll</th>
                    <th>zip</th>
                    <th>class</th> 
                    <th>delete</th>
                       <th>edit</th>
                </tr>
                </tbody>
                <tbody>
            <?php
                while($rows = mysqli_fetch_assoc($res))
                {   
            ?>
                 <tr>
                    <td><?php echo $rows['name']; ?></td>
                    <td class="col1"><?php echo $rows['email']; ?></td>
                    <td><?php echo $rows['mobile']; ?></td>
                    <td><?php echo $rows['address']; ?></td>
                    <td><?php echo $rows['gender']; ?></td>
                    <td><?php echo $rows['dob']; ?></td>
                    <td><?php echo $rows['dor']; ?></td>
                    <td><?php echo $rows['enroll']; ?></td>
                    <td><?php echo $rows['zip']; ?></td>
                    <td><?php echo $rows['category']; ?></td>
                    
                    <td><a href='delete.php?id=<?php echo  $rows['id']; ?>'>delete</a></td>
                    <td><a href='student_edit.php?id=<?php echo  $rows['id']; ?>'>edit</a></td>
                 </tr>
            <?php
                }
            ?>
                </tbody>
            </table>
                
           </head>         
    </HTML>