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
    <h1>
      <center>Login
    </h1><br>
    <center><button type="submit">User&nbsp;</button>
      <button type="submit">Publisher</button>
    </center><br><br>
    <lable>Email</lable>
    <input type="text" id="email" name="email">
    <lable>Password</lable>
    <input type="text" id="password" name="password"><br><br>

    <p><input type="checkbox" id="rememberme" name="rememberme">
      Remember me &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="kofie">Forgot password?</a></p><br>
    <center><button type="submit" name="register">LOGIN</button>
      <center>
        <h5>
          <center>Don't have an account?&nbsp;<a href="kofie">sign up</a>
        </h5>
  </form>
</body>

</html>
