<?php

require 'config.php';
if(isset($_POST['submit']))
{
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $duplicate = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email' OR f_name = '$fname'");
  if(mysqli_num_rows($duplicate) > 0)
  {
    echo "
    <script>alert ('Username or Email Has Already Taken')</script>";
  }
  else{
    if($password == $cpassword)
    {
      $query = "INSERT INTO `user` (f_name, l_name, email, password) VALUES('$fname', '$lname', '$email', '$password')";
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
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial;
    background-color: #2d3c3e;
}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: gainsboro;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;

}

#login {
  width: 300px;
  padding: 20px 50px;
  background-color: #fff;
  margin: 15% auto;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

form{
    width:"40" ;
}

button{
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
  border-color: rgb(255, 255, 255); /* primary-500 */
  border-style: solid;
  background-color: rgb(235, 234, 233);
  font-size: large;
}

h1,h2,p{
    color: #00bdd6;
}

</style>
</head>
<body>

<center><h1>REGISTER</h1></center>
<center><p>Select The User Type</p></center>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'User')">USER</button>
  <button class="tablinks" onclick="openCity(event, 'Publisher')">PUBLISHER</button>
  
</div>

<div id="User" class="tabcontent">
  <center><h2>USER</h2></center>
  <form id="login" method="post" autocomplete="on">
    <center><lable>First name</lable><br>
    <input type="text" class="text" name="firstname"><br><br>
    <lable>Last Name</lable><br>
    <input type="text" class="text" name="lastname"><br><br>
    <lable>Email</lable><br>
    <input type="text" class="text"  name="email"><br><br>
    <lable>Password</lable><br>
    <input type="text" class="text" name="password"><br><br>
    <lable>Confirm Password</lable><br>
    <input type="text" class="text" name="cpassword"></center><br><br>

    <center><button type="submit" name="submit">REGISTER</button>
        <center>
          <h5>
            <center>Already have an account?<a href="./login.php">Log in</a>
          </h5>
    
</form>
</div>

<div id="Publisher" class="tabcontent">
<center><h2>PUBLISHER</h2></center>
<form id="login" method="post" autocomplete="on">
    <center><lable>First name</lable><br>
    <input type="text" class="text" name="firstname"><br><br>
    <lable>Last Name</lable><br>
    <input type="text" class="text" name="lastname"><br><br>
    <lable>Email</lable><br>
    <input type="text" class="text"  name="email"><br><br>
    <lable>Password</lable><br>
    <input type="text" class="text" name="password"><br><br>
    <lable>Confirm Password</lable><br>
    <input type="text" class="text" name="cpassword"></center><br><br>

    <center><button type="submit" name="submit">REGISTER</button>
        <center>
          <h5>
            <center>Already have an account?<a href="./login.php">Log in</a>
          </h5>
    
</form>
</div>



<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>
</html> 
