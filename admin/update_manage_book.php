<?php
include '../config.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM `book` WHERE book_id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$bookname = $row['book_name'];
$bookdescription=$row['book_description'];
$language=$row['language'];
$author=$row['author'];
$genre = $row['genre'];
$year=$row['year'];
$pages=$row['pages'];
$image1=$row['image_1'];
$uploadfile=$row['upload_file'];



// $image_path

if (isset($_POST['submit'])) {
    //book details
    $bookname = $_POST['bookname'];
    $year = $_POST['year'];
    // $movierating = $_POST['movierating'];
    $genre = $_POST['genre'];
    $author = $_POST['author'];
    $language = $_POST['language'];
    $pages = $_POST['pages'];
    $bookdescription = $_POST['bookdescription'];
    


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
    
    $sql="update  `book` set book_name='$bookname', book_description='$bookdescription', language='$language' ,author='$author', genre='$genre', year='$year', pages='$pages' ,image_1='$image1', upload_file='$uploadfile' WHERE book_id=$id ";
    //$sql = "INSERT INTO book (book_name,book_description,language,author,genre,year,pages,upload_file,image_1) VALUES ('$bookname','$bookdescription' ,'$language' ,'$author','$genre' ,'$year','$pages' ,'$uploadfile' ,'$image1' ,'$year', '$genre', '$author','$file_path','$image_path')";
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
                        <label><b style="font-size: 15px">Book Name :</b></label><br>
                        <input class="text" type="text" name="bookname" value="<?php echo $bookname; ?>"><br><br>

                        <label><b style="font-size: 15px">Author :</b></label><br>
                        <input class="text" type="text" name="author" value="<?php echo $author; ?>"><br><br>

                        <label><b style="font-size: 15px">Genre :</b></label><br>
                        <input class="text" type="text" name="genre" value="<?php echo $genre; ?>"><br><br>
                        
                        <label><b style="font-size: 15px">Description :</b></label><br>
                        <textarea name="bookdescription" id="description" cols="30" rows="2"><?php echo $bookdescription; ?></textarea><br><br>

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
