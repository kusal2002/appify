<?php
session_start();
require '../config.php';
if (!empty($_SESSION['sessionid'])) {
    $sessionid = $_SESSION["sessionid"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE user_id = $sessionid");
    $row = mysqli_fetch_assoc($result);
}
// else{
//     header("location: login.php");
//     exit();
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin:Manage Apps</title>
    <!-- <link rel="stylesheet" href="../css/admin_style.css"> -->
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="../css/publisher_style.css">


</head>

<body>
    <?php include_once './layout/sidebar.php' ?>
    <div class="content">

        <div class="containermanageapp">
            <center>
                <h1>Manage Apps</h1>
            </center>
        </div>



        <?php
        $sql = "SELECT * FROM apps";
        $result = mysqli_query($conn, $sql);
        $count = 0;
        if ($result && mysqli_num_rows($result) > 0) {
            echo '<div class="sampletabs">';
            while ($row = mysqli_fetch_assoc($result)) {
                if ($count % 3 === 0 && $count !== 0) {
                    echo '</div><div class="sampletabs">';
                }
                $app_id = $row['app_id'];
                echo '
                    <div class="card">
                        <div class="image">
                            <img src="../Img/1.png" alt="">
                        </div>
                        <center>
                        <div class="container">
                            <h3><b>' . $row['app_name'] . ' </b></h3>
                            <p>' . $row['category'] . '</p>
                        </div>
                        <div class="container2">
                        <a href="update_manage_app.php?updateid=' . $app_id . '" class="text-light"><button class="avtivebtn">Update</button></a>
                        <a href="deleteapp.php?deleteid=' . $app_id . '" class="text-light"><button class="avtivebtn">Delete</button></a>
                        </div>
                        </center>
                    </div>';
                $count++;
            }
            echo '</div>';
        }

        ?>



    </div>

    </div>

</body>

</html>