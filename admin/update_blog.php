<?php
include("../config.php");
$id = $_GET['updateid'];
$sql = "SELECT * FROM `movie` WHERE movie_id =$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$title = $row['title'];
$category = $row['category'];
$movie_description = $row['movie_description'];
$price = $row['price'];
$cast = $row['cast'];
$year = $row['year'];
$Dlink = $row['download_link'];

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

    $sql = "INSERT INTO blogs (title,categories,image_1,content,discription) VALUES('$blogtitle','$blogcatogary','$image_path','$content','$description')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Data inserted successfully')</script>";
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
                            <input class="text" type="text" name="blogtitle" /><br /><br />

                            <label><b style="font-size: 15px">Small Description :</b></label><br />
                            <input class="text" type="text" name="blogdescription" /><br /><br />

                            <label><b style="font-size: 15px">Choose Catogary :</b> </label><br />
                            <select id="catogary" name="blogcatogary">
                                <option selected disabled>Choose Catogary</option>
                                <option value="Games">Tech</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="Education">Education</option>
                                <option value="Helth">Helth</option>
                                <option value="Helth">Lifestyle</option>
                            </select>
                            <br /><br />

                            <label><b style="font-size: 15px">Content :</b></label><br />
                            <textarea name="Content" id="content" cols="30" rows="2"></textarea><br /><br />


                            

                            <label><b style="font-size: 15px">Add Image :</b></label>
                            <input type="file" name="image" /><br /><br />

                            <button type="submit" name="submit" class="ebtn">
                                Publish
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        <!-- </div> -->
    </div>
</body>

</html>