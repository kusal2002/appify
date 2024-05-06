<?php

include '../config.php';
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
} else if (isset($_POST['submit2'])) {
    //movie details
    $moviename = $_POST['moviename'];
    $moviedescription = $_POST['moviedescription'];
    // $movierating = $_POST['movierating'];
    $movieprice = $_POST['movieprice'];
    $movieyear = $_POST['movieyear'];
    $videolink = $_POST['movietrailer'];
    $director = $_POST['moviecast'];
    $moviecatogary = $_POST['moviecatogary'];
    $movieprice = $_POST['movieprice'];


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

    $sql = "INSERT INTO movie (title, category, movie_description, price, upload_files,image_1,year,video,cast) VALUES ('$moviename', '$moviecatogary', '$moviedescription', '$movieprice','$file_path','$image_path','$movieyear','$videolink','$director')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script>alert("Data inserted successfully")</script>';
    } else {
        die(mysqli_error($conn));
    }
} else if (isset($_POST['submit3'])) {
    //book details
    $bookname = $_POST['bookname'];
    $year = $_POST['year'];
    // $movierating = $_POST['movierating'];
    $genre = $_POST['genre'];
    $Author = $_POST['Author'];
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
    <title>Admin Page</title>
    <link rel="stylesheet" href="../css/admin_style.css">
</head>

<body>

    <?php include_once './layout/sidebar.php' ?>

    <div class="content">
        <h2>ADD DETAILS ABOUT YOUR</h2>

        <!-- Tab links -->
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'App')">App</button>
            <button class="tablinks" onclick="openCity(event, 'Movie')">Movie</button>
            <button class="tablinks" onclick="openCity(event, 'Book')">Book</button>
        </div>

        <!-- Tab content -->
        <div id="App" class="tabcontent">
            <form method="post" enctype="multipart/form-data">

                <div class="containerrrr">
                    <div class="left">
                        <div class="form">
                            <label><b style="font-size: 15px">App Name :</b></label><br>
                            <input class="text" type="text" name="appname"><br><br>

                            <label><b style="font-size: 15px">Choose Catogary :</b></label><br>
                            <select id="catogary" name="appcatogary">
                                <option selected disabled>Choose Catogary </option>
                                <option value="Games">Games</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="Education">Education</option>
                                <option value="Helth">Helth</option>
                            </select><br><br>

                            <label><b style="font-size: 15px">Description :</b></label><br>
                            <textarea name="appdescription" id="description" cols="30" rows="2"></textarea><br><br>


                            <label><b style="font-size: 15px">Price :</b></label><br>
                            <div class="wrapper">
                                <input type="radio" name="appprice" value="Free" id="app-option-1" checked>
                                <input type="radio" name="appprice" value="Paid" id="app-option-2">
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
                            <label for="terms">I Consent To The Privacy Policy & Terms And Conitions Privacy
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
                            <!-- <button class="ebtn">Priview</button> -->
                            <!-- <button type="submit" class="ebtn">Publish</button> -->
                            <button type="submit1" name="submit1" class="ebtn">Publish</button>

                        </div>
                    </div>

                </div>

            </form>

        </div>

        <!-- Movies -->

        <div id="Movie" class="tabcontent">
            <form method="post" enctype="multipart/form-data">

                <div class="containerrrr">
                    <div class="left">
                        <div class="form">
                            <label><b style="font-size: 15px">Movie Name :</b></label><br>
                            <input class="text" type="text" name="moviename"><br><br>

                            <label><b style="font-size: 15px">Cast :</b></label><br>
                            <input class="text" type="text" name="moviecast"><br><br>

                            <label><b style="font-size: 15px">Year :</b></label><br>
                            <input class="text" type="text" name="movieyear"><br><br>

                            <label><b style="font-size: 15px">Trailer Link :</b></label><br>
                            <input class="text" type="text" name="movietrailer"><br><br>

                            <label><b style="font-size: 15px">Choose Catogary :</b></label><br>
                            <select id="catogary" name="moviecatogary">
                                <option selected disabled>Choose Catogary </option>
                                <option value="Games">Games</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="Education">Education</option>
                                <option value="Helth">Helth</option>
                            </select><br><br>

                            <label><b style="font-size: 15px">Description :</b></label><br>
                            <textarea name="moviedescription" id="description" cols="30" rows="2"></textarea><br><br>


                            <label><b style="font-size: 15px">Price :</b></label><br>
                            <div class="wrapper">
                                <input type="radio" name="movieprice" value="Free" id="movie-option-1" checked>
                                <input type="radio" name="movieprice" value="Paid" id="movie-option-2">
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
                        <div class="uploadfile">
                            <h2 style="padding-left: 10%; padding-top: 5%;">Upload Files Here</h2>
                            <input type="file" name="file" style="padding-left: 10%;"><br><br>
                        </div>
                        <div class="addimage">
                            <h2 style="padding-left: 10%; padding-top: 5%;">Add Images or Video</h2>
                            <input type="file" name="video" style="padding-left: 10%;"><br><br>
                            <input type="file" name="image1" style="padding-left: 10%;"><br><br>
                            <input type="file" name="image2" style="padding-left: 10%;"><br><br>
                        </div><br><br><br><br>
                        <div class="end">
                            <!-- <button class="ebtn">Priview</button> -->
                            <!-- <button type="submit" class="ebtn">Publish</button> -->
                            <button type="submit2" name="submit2" class="ebtn">Publish</button>

                        </div>
                    </div>

                </div>

            </form>
        </div>

        <!-- Books -->

        <div id="Book" class="tabcontent">
            <form method="post" enctype="multipart/form-data">

                <div class="containerrrr">
                    <div class="left">
                        <div class="form">
                            <label><b style="font-size: 15px">Book Name :</b></label><br>
                            <input class="text" type="text" name="bookname"><br><br>
                            <label><b style="font-size: 15px">Year :</b></label><br>
                            <input class="text" type="text" name="year"><br><br>
                            <label><b style="font-size: 15px">Genre :</b></label><br>
                            <input class="text" type="text" name="genre"><br><br>
                            <label><b style="font-size: 15px">Author :</b></label><br>
                            <input class="text" type="text" name="Author"><br><br>

                            <label><b style="font-size: 15px">Choose Language :</b></label><br>
                            <select id="catogary" name="languagecatogary">
                                <option selected disabled>Choose Catogary </option>
                                <option value="English">English</option>
                                <option value="Sinhala">Sinhala</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Malayalam">Malayalam</option>
                            </select><br><br>

                            <label><b style="font-size: 15px">Pages :</b></label><br>
                            <input class="text" type="text" name="Pages"><br><br>

                            <label><b style="font-size: 15px">Description :</b></label><br>
                            <textarea name="description" id="description" cols="30" rows="2"></textarea><br><br>


                            <label><b style="font-size: 15px">Price :</b></label><br>
                            <div class="wrapper">
                                <input type="radio" name="bookprice" value="Free" id="book-option-1" checked>
                                <input type="radio" name="bookprice" value="Paid" id="book-option-2">
                                <label for="book-option-1" class="option book-option-1">
                                    <div class="dot"></div>
                                    <span>Free</span>
                                </label>
                                <label for="book-option-2" class="option book-option-2">
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
                </div>
                <div class="right">
                    <div class="uploadfile">
                        <h2 style="padding-left: 10%; padding-top: 5%;">Upload Files Here</h2>
                        <input type="file" style="padding-left: 10%;">
                    </div>
                    <div class="addimage">
                        <h2 style="padding-left: 10%; padding-top: 5%;">Add Images or Video</h2>
                        <input type="file" name="image1" style="padding-left: 10%;"><br><br>
                        <input type="file" name="image2" style="padding-left: 10%;"><br><br>
                        <input type="file" name="image3" style="padding-left: 10%;"><br><br>
                    </div><br><br><br><br>
                    <div class="end">
                        <!-- <button class="ebtn">Priview</button> -->
                        <button class="ebtn">Publish</button>
                    </div>
                </div>

        </div>
    </div>


    </div>

    </div>


    <script>
        function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>



</body>

</html>