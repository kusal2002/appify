<?php
session_start(); 

require 'config.php';
if(isset($_POST['submit']))
{
  $email = $_POST['useremail'];
  $password = $_POST['password'];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
  if(mysqli_num_rows($result) > 0)  
  {
  $row = mysqli_fetch_assoc($result);

    if($password == $row['password'])
    {
      $_SESSION['login'] = true;
      $_SESSION['sessionid'] = $row["user_id"];
      // echo "<script> alert('Login Successful'); </script>";  
      header("location: index.php");
      exit();
    }

    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }  
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }

  
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="./css/auth_style.css">

  <style media="screen">

  </style>
</head>

<body>
  <form id="login" method="POST" autocomplete="on">
    <h1>
      <center>Login
    </h1><br>
    <center><button type="submit">User&nbsp;</button>
      <button type="submit">Publisher</button>
    </center><br><br>
    <lable>Email</lable>
    <input type="text" id="email" name="useremail">
    <lable>Password</lable>
    <input type="text" id="password" name="password"><br><br>

    <p><input type="checkbox" id="rememberme" name="rememberme">
      Remember me &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="kofie">Forgot password?</a></p><br>
    <center><button type="submit" name="submit">LOGIN</button>
      <center>
        <h5>
          <center>Don't have an account?&nbsp;<a href="./register.php">sign up</a>
        </h5>
  </form>
</body>

</html>

