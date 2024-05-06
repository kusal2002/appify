<?php
include '../config.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM `book` WHERE book_id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$bookname = $row['book_name'];
$bookgenre = $row['genre'];
$bookdescription = $row['book_description'];
$author = $row['author'];
$year = $row['year'];
$language =  $row['language'];
$pages = $row['pages'];
// $image_path

if (isset($_POST['submit'])) {
    //book details
    $bookname = $_POST['bookname'];
    $year = $_POST['year'];
    // $movierating = $_POST['movierating'];
    $genre = $_POST['genre'];
    $Author = $_POST['author'];
    $languagecatogary = $_POST['languagecatogary'];
    $Pages = $_POST['Pages'];
    $description = $_POST['description'];
    $bookprice = $_POST['bookprice'];


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

    $sql = "INSERT INTO book (book_name,book_description,language,author,genre,year,pages,upload_file,image_1) VALUES ('$bookname', '$year', '$genre', '$Author','$languagecatogary','$Pages','$bookprice','$file_path','$image_path')";
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
                        <input class="text" type="text" name="appname" value="<?php echo $bookname; ?>"><br><br>

                        <label><b style="font-size: 15px">Choose Genre :</b></label><br>
                        <select id="genre" name="genre">
                            <option selected disabled>Choose Category</option>
                            <option value="Fantasy" <?php if ($bookgenre == 'Fantacy') echo 'selected'; ?>>Fantasy</option>
                            <option value="Novel" <?php if ($bookgenre == 'Novel') echo 'selected'; ?>>Novel</option>
                            <option value="Thriller" <?php if ($bookgenre == 'Thriller') echo 'selected'; ?>>Thriller</option>
                            <option value="Biographic" <?php if ($bookgenre == 'Biographic') echo 'selected'; ?>>Biographic</option>
                        </select><br><br>
                        
                        <label><b style="font-size: 15px">Description :</b></label><br>
                        <textarea name="bookescription" id="description" cols="30" rows="2"><?php echo $bookdescription; ?></textarea><br><br>

                        <label><b style="font-size: 15px">Year:</b></label><br>
                        <input class="text" type="text" name="year" value="<?php echo $year; ?>"><br><br>

                        <label><b style="font-size: 15px">Language :</b></label><br>
                        <input class="text" type="text" name="language" value="<?php echo $language; ?>"><br><br>

                        <label><b style="font-size: 15px">Pages :</b></label><br>
                        <input class="text" type="text" name="pages" value="<?php echo $pages; ?>"><br><br>

                        <input type="checkbox" name="terms" id="terms">
                        <label for="terms">I Consent To The Privacy Policy & Terms And Conditions Privacy
                            Policy.</label>
                        <br>
                        <br>
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
