<?php
include_once ('connection.php');
$id = $_GET['id'];
$sql = "select * from assisment where id=$id";
//echo($sql);exit;
$res = mysqli_query($conn,$sql);
while($rows = mysqli_fetch_assoc($res))
                { 
                  $id=$rows['id'];
//                  echo($id);exit;
                  $name = $rows['name'];  
                  $email = $rows['email'];  
                  $mobile = $rows['mobile'];  
                  $address = $rows['address'];  
                  $gender = $rows['gender'];  
                  $dob = $rows['dob'];  
                  $dor = $rows['dor'];
                  $enroll = $rows['enroll'];
                  $zip = $rows['zip'];
                  $category = $rows['category'];
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
<!--    <body style="background-image: url(30719255-close-up-of-business-objects-at-workplace-on-background-of-office-workers-interacting.jpg);">-->
        <div align="center">
        <h2>Edit Details</h2>
        </div>
        
<form name="myForm" id= "myForm" action="student_update.php" method="POST">
        <td><input type="hidden" name="id"  id='id' value="<?php echo $id; ?>"></td>

      
<table cellspacing='5' align='center'>


<tr>
<th> <h5 style="color:black">name</th>
<td><input type="text" name="name" id="name"  value="<?php echo $name; ?>" placeholder="eg - john" /></td>
</tr>

<tr>
<th><h5 style="color:black">Email</th>
<td><input type="email" name="email"  id='email'value="<?php echo $email; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"></td>
</tr>


<tr>
<th><h5 style="color:black">gender</th>
<td>

male<input type="radio" name="gender" <?php if($gender == "MALE"){echo "checked='checked'";}?> id="m" value="MALE">
female<input type="radio" name="gender" <?php if($gender == "FEMALE"){echo "checked='checked'";}?>  id="f" value="FEMALE">
</td>
</tr>

<tr>
<th><h5 style="color:black">mobile no.</th>
<td><input type="text" name="mobile" id="mobile" value="<?php echo $mobile; ?>"  maxlength="10" /></td>
</tr>

<tr>
<th> <h5 style="color:black">enrollment no.</th>
<td><input type="text" name="enroll" id="enroll" value="<?php echo $enroll; ?>" maxlength="10"></td>
</tr>

<tr>
<th><h5 style="color:black">date of birth</th>
<td><input type="date" name="dob" id="dob" value="<?php echo $dob; ?>" placeholder="yyyy-mm-dd"></td>
</tr>

<tr>
<th><h5 style="color:black">date of registration</th>
<td><input type="date" name="dor" id="dor" value="<?php echo $dor; ?>" ></td>
</tr>

<tr>
<th><h5 style="color:black">address</th>
<td><textarea rows="3" cols="20" name="address" id="address"  ><?php echo $address; ?></textarea></td>
</tr>

<tr>
<th> <h5 style="color:black">ZIP CODE.</th>
<td><input type="text" name="zip" id="zip" minlength="6" maxlength="6" value="<?php echo $zip; ?>" ></td>
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
<td colspan="2" align="center"><input type="submit"  name="submit" id="submit" value="submit"/>
<input type="reset" value="Reset Data"/>



</td>
</tr>

</table>
</form>
        </body>
</html>
