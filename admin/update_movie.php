<?php


include '../config.php';
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




if (isset($_POST['submit'])) {
    //movie details
    $moviename = $_POST['moviename'];
    $moviedescription = $_POST['moviedescription'];
    $movieprice = $_POST['movieprice'];
    $movieyear = $_POST['movieyear'];
    $director = $_POST['moviecast'];
    $moviecatogary = $_POST['moviecatogary'];


    //file upload
    $file = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp, "../uploads/files/$file");

    $file_path = "./files/$file";

    $sql = "update `movie` set title='$moviename',category='$moviecatogary',movie_description='$moviedescription',cast='$director', year='$movieyear',price='$movieprice',upload_files='$file_path'  where movie_id=$id";
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
                            <label><b style="font-size: 15px">Movie Name :</b></label><br>
                            <input class="text" type="text" name="moviename" value="<?php echo $title; ?>"><br><br>

                            <label><b style="font-size: 15px">Cast :</b></label><br>
                            <input class="text" type="text" name="moviecast" value="<?php echo $cast; ?>"><br><br>

                            <label><b style="font-size: 15px">Year :</b></label><br>
                            <input class="text" type="text" name="movieyear" value="<?php echo $year; ?>"><br><br>

                            <label><b style="font-size: 15px">Choose Catogary :</b></label><br>
                            <select id="catogary" name="moviecatogary">
                                <option selected disabled>Choose Catogary </option>
                                <option value="Games" <?php if ($category == 'Games') echo 'selected'; ?>>Games</option>
                                <option value="Entertainment" <?php if ($category == 'Entertainment') echo 'selected'; ?>>Entertainment</option>
                                <option value="Education" <?php if ($category == 'Education') echo 'selected'; ?>>Education</option>
                                <option value="Helth" <?php if ($category == 'Helth') echo 'selected'; ?>>Helth</option>
                            </select><br><br>
                            

                            <label><b style="font-size: 15px">Description :</b></label><br>
                            <textarea name="moviedescription" id="description" cols="30" rows="2" ><?php echo $movie_description; ?></textarea><br><br>


                            <label><b style="font-size: 15px">Price :</b></label><br>
                            <div class="wrapper">
                                <input type="radio" name="movieprice" value="Free" id="movie-option-1" <?php if ($price == 'Free') echo 'checked'; ?>>
                                <input type="radio" name="movieprice" value="Paid" id="movie-option-2" <?php if ($price == 'Paid') echo 'checked'; ?>>
                                <label for="movie-option-1" class="option movie-option-1">
                                    <div class="dot"></div>
                                    <span>Free</span>
                                </label>
                                <label for="movie-option-2" class="option movie-option-2">
                                    <div class="dot"></div>
                                    <span>Paid</span>
                                </label>
                            </div>
                            <br>
                            <br>

                            <input type="checkbox" name="terms" id="terms">
                            <label for="terms">I Consent To The Privacy Policy & Terms And Conitions Privacy
                                Policy.</label>

                        </div>
                    </div>
                    <div class="right">
                        <div class="addimage">
                            <h2 style="padding-left: 10%; padding-top: 5%;">Add Images or Video</h2>
                            <input type="file" name="file" style="padding-left: 10%;">
                            <br>
                            <button type="submit" name="submit" class="ebtn">Update</button>
                            
                        </div>
                    </div>

                </div>

            </form>
            </div>
</body>

</html>
