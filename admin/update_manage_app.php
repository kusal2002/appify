<?php
include '../config.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM `apps` WHERE app_id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$appname = $row['app_name'];
$appcategory = $row['category'];
$appdescription = $row['app_description'];
$appPrice = $row['price'];
// $image_path

if (isset($_POST['submit'])) {

    //app details
    $appname = $_POST['appname'];
    $appcategory = $_POST['appcatogary'];
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

    $sql = "update `apps` set app_name='$appname',category='$appcategory',app_description='$appdescription',price='$appPrice',upload_files='$file_path',app_profile_img='$image_path' where app_id=$id";
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
    <title>Manage App Page</title>
    <link rel="stylesheet" href="../css/admin_style.css">
</head>

<body>

    <?php include_once './layout/sidebar.php' ?>


    <div class="content">

        <form method="post" enctype="multipart/form-data">

            <div class="containerrrr">
                <div class="left">
                    <div class="form">
                        <label><b style="font-size: 15px">App Name :</b></label><br>
                        <input class="text" type="text" name="appname" value="<?php echo $appname; ?>"><br><br>

                        <label><b style="font-size: 15px">Choose Category :</b></label><br>
                        <select id="catogary" name="appcatogary">
                            <option selected disabled>Choose Category</option>
                            <option value="Games" <?php if ($appcategory == 'Games') echo 'selected'; ?>>Games</option>
                            <option value="Entertainment" <?php if ($appcategory == 'Entertainment') echo 'selected'; ?>>Entertainment</option>
                            <option value="Education" <?php if ($appcategory == 'Education') echo 'selected'; ?>>Education</option>
                            <option value="Health" <?php if ($appcategory == 'Health') echo 'selected'; ?>>Health</option>
                        </select><br><br>

                        <label><b style="font-size: 15px">Description :</b></label><br>
                        <textarea name="appdescription" id="description" cols="30" rows="2"><?php echo $appdescription; ?></textarea><br><br>

                        <label><b style="font-size: 15px">Price :</b></label><br>
                        <div class="wrapper">
                            <input type="radio" name="appprice" value="Free" id="app-option-1" <?php if ($appPrice == 'Free') echo 'checked'; ?>>
                            <input type="radio" name="appprice" value="Paid" id="app-option-2" <?php if ($appPrice == 'Paid') echo 'checked'; ?>>
                            <label for="app-option-1" class="option app-option-1">
                                <div class="dot"></div>
                                <span>Free</span>
                            </label>
                            <label for="app-option-2" class="option app-option-2">
                                <div class="dot"></div>
                                <span>Paid</span>
                            </label>
                        </div>
                        <br>
                        <br>

                        <input type="checkbox" name="terms" id="terms">
                        <label for="terms">I Consent To The Privacy Policy & Terms And Conditions Privacy
                            Policy.</label>

                    </div>
                </div>
                <div class="right">
                    <div class="uploadfile">
                        <h2 style="padding-left: 10%; padding-top: 5%;">Upload Files Here</h2>
                        <input type="file" name="file" style="padding-left: 10%;"><br><br>
                    </div>
                    <div class="addimage">
                        <h2 style="padding-left: 10%; padding-top: 5%;">Add Images or Video</h2>
                        <input type="file" name="file1" style="padding-left: 10%;"><br><br>
                        <input type="file" name="file2" style="padding-left: 10%;"><br><br>
                        <input type="file" name="file3" style="padding-left: 10%;"><br><br>
                    </div><br><br><br><br>
                    <div class="end">
                        <!-- <button class="ebtn">Preview</button> -->
                        <!-- <button type="submit" class="ebtn">Publish</button> -->
                        <button type="submit" name="submit" class="ebtn">Publish</button>

                    </div>
                </div>

            </div>

        </form>

    </div>

</body>

</html>
