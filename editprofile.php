<?php

session_start();
require 'config.php';
if (!empty($_SESSION['sessionid'])) {
    $sessionid = $_SESSION["sessionid"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE user_id = $sessionid");
    $row = mysqli_fetch_assoc($result);
}
// else{
//     header("location: login.php");
//     exit();
// }

$id = $row['user_id'];

$sql = "select * from `user` where user_id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$fname = $row['f_name'];
$lname = $row['l_name'];
$email = $row['email'];
$mobile = $row['phone_number'];

if (isset($_POST['update'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $sql = "update `user` set f_name='$fname',l_name='$lname',email='$email',phone_number='$mobile' where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script>alert("Record Updated Successfully")</script>';
    } else {
        die(mysqli_error($conn));
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="./css/editprofile_style.css">
</head>

<body>
    <div class="col" style="background-color: blue; width: 100%; height: 100%; padding:0; margin: 0;">
        <div style="background-color: rgb(255, 255, 255); width: 30%; height: 700px;">
            <img src="./Img/pro.png" style="width: 200px;height: 200px; padding-left: 25%;padding-top: 20%; padding-right: 25%;">

        </div>
        <div style="background-color: rgb(255, 255, 255);; width: 70%; height: 700px; ">
            <form style="padding-top: 5%; padding-left: 10%;" action="">

                <label for="fullname">First Name</label><br>
                <input class="text" type="text" name="fname" value="<?php echo $fname; ?>"><br><br>
                <label for="fullname">Last Name</label><br>
                <input class="text" name="lname" type="text" value="<?php echo $lname; ?>"><br><br>
                <label for="email">Email</label><br>
                <input class="text" type="text" name="email" value="<?php echo $email; ?>"><br><br>
                <label for="PhoneNumber">Phone Number</label><br>
                <input class="text" type="text" name="mobile" value="<?php echo $mobile; ?>"><br><br>

                <button class="btn" style="margin-right: 8%;" type="submit" name="submit">Update Profile</button>
                <button class="btn" type="reset">Cancel</button>

            </form>


        </div>
    </div>

</body>

</html>