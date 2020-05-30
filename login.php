

<?php

session_start();
const login = 'admin';
const password = 'admin';

if (isset($_POST['login']) && isset($_POST['password'])) //when form submitted
{
  if ($_POST['login'] === login && $_POST['password'] === password)
  {
    $_SESSION['login'] = $_POST['login']; //write login to server storage
    header('Location:assisment_web.php'); 
  }
  else
  {
    echo "<script>alert('Wrong login or password');</script>";
    echo "<noscript>Wrong login or password</noscript>";
  }
}

?>


<html>
<head>
<title>User Login</title><br><br><br><br><br><br><br>
</head>
<body style="background-image: url('pexels-photo-399161.jpeg')">
     <center>
<form method="post">
    Login:<br><input type="text" name="login" required="login"><br>
    Password:<br><input type="password" name="password" required="password"><br>
  <input type="submit" name="submit" value="Submit" >
    </center>
</form>
</body>
</html>




























