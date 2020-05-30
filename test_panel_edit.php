<?php
include('connection.php');
$id = $_GET['id'];
$sql = "select * from test where id=$id";
$res = mysqli_query($conn,$sql);
while($rows = mysqli_fetch_array($res))
                { 
                  $id=$rows['id'];
//                  echo($id);exit;
                  $testname = $rows['testname'];  
                  $duration = $rows['duration'];  
                  $category = $rows['category'];  
                  $startdate = $rows['startdate'];  
                  $enddate = $rows['enddate']; 
//                  echo($enddate);exit;
                }
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

</head>

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
    <a href="#test" onclick="location.href='test_panel_web.php'">Show test</a>
    </div>
    </div>

   
    <div class="subnav">
    <button class="subnavbtn">Admin<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
    <a href="#logout" onclick="location.href='logout.php'">Logout</a>
    </div>
    </div>
    
  
    </div>
    <title>STUDENT LOGIN FORM</title><br><br><br><br>


    </head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <body>
        <div align="center">
        <h2>Edit Test Details</h2>
        </div>
        
          <form name="myForm" id= "myForm" onsubmit="return validate()" method="POST">
        <td><input type="hidden" name="id"  id='id' value="<?php echo $id; ?>"></td>

      
<table cellspacing='5' align='center'>


<tr>
<th> <h5 style="color:black">Test name</th>
<td><input type="text" name="testname" placeholder="eg- test_name" id="tname" value="<?php echo $testname; ?>" required></td>
</tr>

<tr>
<th> <h5 style="color:black">Duration</th>
<td><input type="number" name="duration" placeholder="in minutes" id="duration"  value="<?php echo $duration; ?>" required></td>
</tr>

            <tr>
            <th><label for=" category "><b><h5>category</h5></b></label><br></th>
            <td><select id="category" name="category">
            <option <?php if ($category == "Ginger placement test" ) echo 'selected' ; ?> value="Ginger placement test">Ginger placement test</option>
            <option <?php if ($category == "II" ) echo 'selected' ; ?> value="II">II</option>
            <option <?php if ($category == "III" ) echo 'selected' ; ?> value="III">III</option>
            </select>
            </td>
            </tr>



<tr>
<th> <h5 style="color:black">Start date</th>
<td><input type="datetime-local" name="startdate"  id="startdate"  value="<?php echo $startdate;?>" required></td>

</tr>
<tr>
<th> <h5 style="color:black">End date</th>
<td><input type="datetime-local" name="enddate"  id="enddate" value="<?php echo $enddate; ?>" required></td>
</tr>

<tr>
    <td colspan="2" align="center"><input type="submit" value="submit">
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
//    alert("aaassdd");exit;
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
        document.getElementById("myForm").action = "test_panel_update.php";
        
    }
}
            </script>