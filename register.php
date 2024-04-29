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
    <form id="login" action="login_check.php" method="post">
      <h1><center>REGISTER</h1><br>
      <center><button type="submit">User</button>
    <button type="submit">Publisher</button></center><br><br>
    <lable >First name</lable>
    <input type="text" id="firstname" name="firstname">
    <lable>Last Name</lable>
    <input type="text" id="lastname" name="lastname"><br>
    <lable>Email</lable>
    <input type="text" id="email" name="email"><br>
    <lable>Password</lable>
    <input type="text" id="password" name="password" ><br>
    <lable>Confirm Password</lable>
    <input type="text" id="cpassword" name="cpassword"><br>


    
      <center><button type="submit" name="register">REGISTER</button><center>
      <h5><center>Already have an account?<a href="kofie">Log in</a></h5>
    </form>
  </body>
</html>
