<?php
include("../config.php");
$id = $_GET['updateid'];
$sql = "SELECT * FROM `blogs` WHERE blog_id =$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$title = $row['title'];
$category = $row['categories'];
$blogcontent = $row['content'];
$discription = $row['discription'];


if (isset($_POST["submit"])) {

    //blog details
    $blogtitle = $_POST['blogtitle'];
    $blogcatogary = $_POST['blogcatogary'];
    $content = $_POST['content'];
    $description = $_POST['blogdescription'];

    //image upload
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_tmp, "../uploads/images/$image");

    $image_path = "./images/$image";

    $sql = "update `blogs` set title='$title',categories='$category',discription='$discription',content='$blogcontent'  where blog_id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Data updated successfully')</script>";
    } else {
        die(mysqli_error($conn));
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>update blog Blog</title>
    <link rel="stylesheet" href="../css/admin_style.css">
    <link rel="stylesheet" href="../css/blog_create.css">
</head>

<body>

    <?php include_once './layout/sidebar.php' ?>
    <div class="content">
    <center><h1>Update Blog</h1></center>
        <!-- <div id="blog" class="tabcontent"> -->
            <form method="post" enctype="multipart/form-data">
                <div class="containerrrr">
                    <div class="left">
                        <div class="form">
                            <label><b style="font-size: 15px">Blog Title :</b></label><br />
                            <input class="text" type="text" name="blogtitle" value="<?php echo $title; ?>"><br /><br />

                            <label><b style="font-size: 15px">Small Description :</b></label><br />
                            <input class="text" type="text" name="blogdescription" value="<?php echo $discription; ?>"><br /><br />

                            <label><b style="font-size: 15px">Choose category :</b> </label><br />
                            <select id="catogary" name="blogcatogary">
                                <option selected disabled>Choose Catogary</option>
                                <option value="Tech"<?php if ($category == 'Tech') echo 'selected'; ?>>Tech</option>
                                <option value="Entertainment"<?php if ($category == 'Entertainment') echo 'selected'; ?>>Entertainment</option>
                                <option value="Education"<?php if ($category == 'Education') echo 'selected'; ?>>Education</option>
                                <option value="Helth"<?php if ($category == 'Helth') echo 'selected'; ?>>Health</option>
                                <option value="Lifestyle"<?php if ($category == 'Lifestyle') echo 'selected'; ?>>Lifestyle</option>
                            </select>
                            <br /><br />

                            <label><b style="font-size: 15px">Content :</b></label><br />
                            <textarea name="content" id="content" cols="30" rows="2" value="<?php echo $blogcontent; ?>"></textarea><br /><br />


                            

                            <label><b style="font-size: 15px">Add Image :</b></label>
                            <input type="file" name="image" /><br /><br />

                            <button type="submit" name="submit" class="ebtn">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        <!-- </div> -->
    </div>
</body>

</html>