<?php
session_start();
require 'config.php';

// Check if user is logged in
if (!empty($_SESSION['sessionid'])) {
    $sessionid = $_SESSION["sessionid"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE user_id = $sessionid");
    $row = mysqli_fetch_assoc($result);
} else {
    header("location: login.php");
    exit();
}

// Fetch user details
$id = $row['user_id'];
$sql = "SELECT * FROM `user` WHERE user_id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$fname = $row['f_name'];
$lname = $row['l_name'];
$email = $row['email'];
$mobile = $row['phone_number'];

// Update user details
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $sql = "UPDATE `user` SET f_name='$fname', l_name='$lname', email='$email', phone_number='$mobile' WHERE user_id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script>alert("Record Updated Successfully")</script>';
    } else {
        die(mysqli_error($conn));
    }
}

// Delete user account
if (isset($_POST['delete'])) {
    $sql = "DELETE FROM `user` WHERE user_id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        session_destroy(); 
        header("location: login.php"); 
        exit();
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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/auth_style.css">
</head>

<body>
    <?php include_once './layout/header.php' ?>

    <div class="editprofile">
        <h1>Edit Profile</h1>

        <form method="POST" autocomplete="on">
            <br><br>
            <label style="color:white;">First Name</label>
            <input class="text" type="text" name="fname" value="<?php echo $fname; ?>"><br><br>

            <label>Last Name</label>
            <input class="text" name="lname" type="text" value="<?php echo $lname; ?>"><br><br>

            <label>Email</label>
            <input class="text" type="text" name="email" value="<?php echo $email; ?>"><br><br>

            <label>Mobile</label>
            <input class="text" type="text" name="mobile" value="<?php echo $mobile; ?>"><br><br>

            <button type="submit" name="submit">Submit</button>

            <!-- Delete button -->
            <button type="submit" name="delete" onclick="return confirm('Are you sure you want to delete your account?')">Delete Account</button>
        </form>
    </div>
</body>

</html>
