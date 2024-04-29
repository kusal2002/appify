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
      <label for="username">User Name</label>
      <input type="text" id="username" name="username"><br>
      <label for="password">Password</label>
      <input type="password" id="password" name="password"><br>
      <button type="submit" name="login">Login</button>
    </form>
  </body>
</html>
