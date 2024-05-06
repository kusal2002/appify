<?php
require 'config.php';
if (isset($_POST['submit'])) {
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $role = $_POST['role']; // New line to get the selected role

  $duplicate = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email' OR f_name = '$fname'");
  if (mysqli_num_rows($duplicate) > 0) {
    echo "<script>alert ('Username or Email Has Already Taken')</script>";
  } else {
    if ($password == $cpassword) {
      $query = "INSERT INTO `user` (f_name, l_name, email, password, id_role) VALUES('$fname', '$lname', '$email', '$password', '$role')";
      mysqli_query($conn, $query);
      echo "<script> alert('Registration Successful'); </script>";

      // Redirect based on role
      switch ($role) {
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

    } else {
      echo "<script> alert('Passwords do not match'); </script>";
    }
  }
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/style.css">
  <style>
    body {
      font-family: Arial;
      background-color: #2d3c3e;
    }

    /* Style the tab */
    .tab {
      display: flex;
      justify-content: center;
      overflow: hidden;
      gap: 15px;

    }

    /* Style the buttons inside the tab */
    .tab button {
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      font-size: 17px;
      color:#00bdd6;
      font-size: 20px;
      font-weight: 900;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
      /* background-color: #ccc; */
      background-color: gainsboro;

    }

    /* Style the tab content */
    .tabcontent {
      display: none;
      padding: 6px 12px;
      /* border: 1px solid #ccc; */
      border-top: none;

    }

    #login {
      width: 600px;
      padding: 20px 50px;
      background-color: #fff;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
      margin-left: auto;
      margin-right: auto;
    }

    form {
      width: "40";
    }

    button {
      background-color: #07636d;
      border: none;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .text {
      width: 90%;
      height: 50px;
      border-radius: 5px;
      border-width: 1px;
      border-color: rgb(255, 255, 255);
      /* primary-500 */
      border-style: solid;
      background-color: rgb(235, 234, 233);
      font-size: large;
    }

    h1,
    h2,
    p {
      color: #00bdd6;
    }
  </style>
</head>

<body>
  <?php include_once './layout/header.php' ?>

  <center>
    <h1>REGISTER</h1>
  </center>
  <center>
    <p>Select The User Type</p>
  </center>

  <div class="tab">
    <button class="tablinks" onclick="openUser(event, 'User')">USER</button>
    <button class="tablinks" onclick="openUser(event, 'Publisher')">PUBLISHER</button>

  </div>

  <div id="User" class="tabcontent">
    <center>
      <h2>USER</h2>
    </center>
    <form id="login" method="post" autocomplete="on">
      <center>
        <lable>First name</lable><br>
        <input type="text" class="text" name="firstname"><br><br>
        <lable>Last Name</lable><br>
        <input type="text" class="text" name="lastname"><br><br>
        <lable>Email</lable><br>
        <input type="text" class="text" name="email"><br><br>
        <lable>Password</lable><br>
        <input type="text" class="text" name="password"><br><br>
        <lable>Confirm Password</lable><br>
        <input type="text" class="text" name="cpassword">
      </center><br><br>
      <input type="hidden" name="role" value="3">
      <center><button type="submit" name="submit">REGISTER</button>
        <center>
          <h5>
            <center>Already have an account?<a href="./login.php">Log in</a>
          </h5>

    </form>
  </div>

  <div id="Publisher" class="tabcontent">
    <center>
      <h2>PUBLISHER</h2>
    </center>
    <form id="login" method="post" autocomplete="on">
      <center>
        <lable>First name</lable><br>
        <input type="text" class="text" name="firstname"><br><br>
        <lable>Last Name</lable><br>
        <input type="text" class="text" name="lastname"><br><br>
        <lable>Email</lable><br>
        <input type="text" class="text" name="email"><br><br>
        <lable>Password</lable><br>
        <input type="text" class="text" name="password"><br><br>
        <lable>Confirm Password</lable><br>
        <input type="text" class="text" name="cpassword">
      </center><br><br>
      <input type="hidden" name="role" value="2">
      <center><button type="submit" name="submit">REGISTER</button>
        <center>
          <h5>
            <center>Already have an account?<a href="./login.php">Log in</a>
          </h5>

    </form>
  </div>

  <?php include_once './layout/footer.php' ?>

  <script>

    document.getElementById("User").style.display = "block";

    function openUser(evt, userName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(userName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>

</body>

</html>