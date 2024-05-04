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
                            <h2 style="padding-top: 5%;">Upload Files Here</h2>
                            <input type="file" name="file"><br><br>
                        </div>
                        <div class="addimage">
                            <h2 style=" padding-top: 5%;">Add Images or Video</h2>
                            <input type="file" name="image"><br><br>
                        </div>
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

                            <label><b style="font-size: 15px">Director Name :</b></label><br>
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
                            <h2 style="padding-top: 5%;">Upload Files Here</h2>
                            <input type="file" name="file"><br><br>
                        </div>
                        <div class="addimage">
                            <h2 style=" padding-top: 5%;">Add Images or Video</h2>
                            <input type="file" name="image"><br><br>
                        </div>
                        <div class="end">
                            <!-- <button class="ebtn">Priview</button> -->
                            <!-- <button type="submit" class="ebtn">Publish</button> -->
                            <button type="submit2" name="submit2" class="ebtn">Publish</button>

                        </div>
                    </div>

                </div>

            </form>
        </div>

        <div id="Book" class="tabcontent">
            <div class="containerrrr">
                <div class="left">
                    <div class="form">
                        <form method="post">
                            <label><b style="font-size: 15px">Book Name :</b></label><br>
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
                            <textarea name="description" id="description" cols="30" rows="2"></textarea><br><br>


                            <label><b style="font-size: 15px">Price :</b></label><br>
                            <div class="wrapper">
                                <input type="radio" name="price" value="Free" id="option-1" checked>
                                <input type="radio" name="price" value="Paid" id="option-2">
                                <label for="option-1" class="option option-1">
                                    <div class="dot"></div>
                                    <span>Free</span>
                                </label>
                                <label for="option-2" class="option option-2">
                                    <div class="dot"></div>
                                    <span>Paid</span>
                                </label>
                            </div>
                            <br>
                            <br>

                            <input type="checkbox" name="terms" id="terms">
                            <label for="terms">I Consent To The Privacy Policy & Terms And Conitions Privacy
                                Policy.</label>

                        </form>
                    </div>
                </div>
                <div class="right">
                    <div class="uploadfile">
                        <h2 style="padding-left: 10%; padding-top: 5%;">Upload Files Here</h2>
                        <input type="file" style="padding-left: 10%;">
                    </div>
                    <div class="addimage">
                        <h2 style="padding-left: 10%; padding-top: 5%;">Add Imagess or Video</h2>
                        <input type="file" style="padding-left: 10%;">
                    </div>
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