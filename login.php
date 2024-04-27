<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <style media="screen">
      body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #f4f4f4;
      }
      #login {
        width: 300px;
        padding: 20px 50px;
        background-color: #fff;
        margin: 15% auto;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
      }
      label {
        display: block;
        margin-top: 20px;
      }
      input[type="text"], input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
      }
      button[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      button[type="submit"]:hover {
        background-color: #45a049;
      }
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
