<?php

require 'config.php';
if(isset($_POST['submit']))
{
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $duplicate = mysqli_query($conn, "SELECT * FROM `registerd_user` WHERE email = '$email' OR f_name = '$fname'");
  if(mysqli_num_rows($duplicate) > 0)
  {
    echo "
    <script>alert ('Username or Email Has Already Taken')</script>";
  }
  else{
    if($password == $cpassword)
    {
      $query = "INSERT INTO `registerd_user` (f_name, l_name, email, password) VALUES('$fname', '$lname', '$email', '$password')";
      mysqli_query($conn, $query);
      echo "<script> alert('Registration Successful'); </script>";
      
    }
    else
    {
      echo "<script> alert('Passwords do not match'); </script>";
    }
  }




} 
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>Register</title>
  <link rel="stylesheet" href="./css/auth_style.css">

  <style media="screen">

  </style>
</head>

<body>
  <form id="login" method="post" autocomplete="on">
    <h1>
      <center>REGISTER
    </h1><br>
    <center><button type="submit">User</button>
      <button type="submit">Publisher</button>
    </center><br><br>
    <lable>First name</lable>
    <input type="text" id="firstname" name="firstname">
    <lable>Last Name</lable>
    <input type="text" id="lastname" name="lastname"><br>
    <lable>Email</lable>
    <input type="text" id="email" name="email"><br>
    <lable>Password</lable>
    <input type="text" id="password" name="password"><br>
    <lable>Confirm Password</lable>
    <input type="text" id="cpassword" name="cpassword"><br>



    <center><button type="submit" name="submit">REGISTER</button>
      <center>
        <h5>
          <center>Already have an account?<a href="./login.php">Log in</a>
        </h5>
  </form>
</body>

</html>