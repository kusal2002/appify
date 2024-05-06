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


            switch ($row['id_role']) {
                case 1: // Admin
                    header("location: admin/index.php");
                    exit();
                case 2: // Publisher
                    header("location: publisher/index.php");
                    exit();
                case 3: // User
                    header("location: index.php");
                    exit();
                default: // Default redirection for unknown roles
                    header("location: index.php");
                    exit();
            }
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
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/auth_style.css">

  <!-- <style media="screen">

  </style> -->
</head>

<body>
<?php include_once './layout/header.php' ?>
    <h1>
      <center>Login
    </h1>
  <form id="login" method="POST" autocomplete="on">
   <br><br>
    <lable>Email</lable>
    <input type="text" class="text" id="email" name="useremail">
    <lable>Password</lable>
    <input type="text" class="text"  id="password" name="password"><br><br>

    <p><input type="checkbox" id="rememberme" name="rememberme">
      Remember me &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="kofie">Forgot password?</a></p><br>
    <center><button type="submit" name="submit">LOGIN</button>
      <center>
        <h5>
          <center>Don't have an account?&nbsp;<a href="./register.php">sign up</a>
        </h5>
  </form>

  <?php include_once './layout/footer.php' ?>
</body>

</html>

