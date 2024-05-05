<?php
if (isset($_POST['submit1'])) {

    //app details
    $appname = $_POST['appname'];
    $appcatogary = $_POST['appcatogary'];
    $appdescription = $_POST['appdescription'];
    $appPrice = $_POST['appprice'];



    //image upload
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_tmp, "../uploads/images/$image");

    //file upload
    $file = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp, "../uploads/files/$file");

    $image_path = "./images/$image";
    $file_path = "./files/$file";

    $sql = "INSERT INTO apps (app_name, category, app_description, price, upload_files, app_profile_img) VALUES ('$appname', '$appcatogary', '$appdescription', '$appPrice','$file_path','$image_path')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script>alert("Data inserted successfully")</script>';
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
    <title>Admin:Manage Apps</title>
    <!-- <link rel="stylesheet" href="../css/admin_style.css"> -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/publisher_style.css">


</head>

<body>
    <?php include_once './layout/sidebar.php' ?>
    <div class="content">

        <div class="containermanageapp">
            <center><h1>Manage Apps</h1></center>
        </div>


            <div class="sampletabs">
                <div class="card">
                    <div class="image">
                        <img src="../Img/1.png" alt="">
                    </div>
                    <div class="container">
                        <h3><b>Sample Blog</b></h3>
                    </div>
                    <div class="container2">
                        <button class="avtivebtn">Update</button>
                        <button class="avtivebtn">Delete</button>
                    </div>
                </div>

                <div class="card">
                    <div class="image">
                        <img src="/Img/appify.png" alt="">
                    </div>
                    <div class="container">
                        <h3><b>Sample Blog</b></h3>
                    </div>
                    <div class="container2">
                        <button class="avtivebtn">Update</button>
                        <button class="avtivebtn">Delete</button>
                    </div>
                </div>

                <div class="card">
                    <div class="image">
                        <img src="/Img/appify.png" alt="">
                    </div>
                    <div class="container">
                        <h3><b>Sample Blog</b></h3>
                    </div>
                    <div class="container2">
                        <button class="avtivebtn">Update</button>
                        <button class="avtivebtn">Delete</button>
                    </div>
                </div>



            </div>
            <div class="sampletabs">
                <div class="card">
                    <div class="image">
                        <img src="/Img/appify.png" alt="">
                    </div>
                    <div class="container">
                        <h3><b>Sample Blog</b></h3>
                    </div>
                    <div class="container2">
                        <button class="avtivebtn">Update</button>
                        <button class="avtivebtn">Delete</button>
                    </div>
                </div>

                <div class="card">
                    <div class="image">
                        <img src="/Img/appify.png" alt="">
                    </div>
                    <div class="container">
                        <h3><b>Sample Blog</b></h3>
                    </div>
                    <div class="container2">
                        <button class="avtivebtn">Update</button>
                        <button class="avtivebtn">Delete</button>
                    </div>
                </div>

                <div class="card">
                    <div class="image">
                        <img src="/Img/appify.png" alt="">
                    </div>
                    <div class="container">
                        <h3><b>Sample Blog</b></h3>
                    </div>
                    <div class="container2">
                        <button class="avtivebtn">Update</button>
                        <button class="avtivebtn">Delete</button>
                    </div>
                </div>

            </div>

    </div>

</body>

</html>