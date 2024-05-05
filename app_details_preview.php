<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Details Preview</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/details_preview.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <?php include_once './layout/header.php' ?>


    <div class="apppreviewcontainer">

        <div class="left">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="https://th.bing.com/th/id/OIP.f7Odb8ieZQTrfQ4H7FYYGAHaGl?rs=1&pid=ImgDetMain" style="height:500px; width:600px" />
                    <div class="text">Picture 01</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="https://inspirationfeed.com/wp-content/uploads/2020/05/Funny-Good-Morning-Meme-43.jpeg" style="height:500px; width:600px" />
                    <div class="text">Picture 02</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="https://i.redd.it/jzhf0sirfbu21.png" style="height:500px; width:600px" />
                    <div class="text">Picture 03</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots -->
            <div style="text-align: center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

        </div>
        <div class="right">
            <?php
            require 'config.php';
            $sql = "select * from apps where `app_id` = $_GET[id]";


            $result = mysqli_query($conn, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['app_id'];
                    $appname = $row['app_name'];
                    $appdescription = $row['app_description'];
                    $appPrice = $row['price'];


                    echo '  <h1><b>' . $appname . '</b></h1></th>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
        
                    <!-- <h5>500K+ rewiews</h5>
                    <h5>10M+ downloads</h5>
                    <h5>Size : 284.8 MB</h5> -->
                    <h3><b>Category : </b>' . $row['category'] . '</h3>
                    <h5>Developer : Meta Inc.</h5><br>
                    <div style="display: flex;">
                        <button id="btndown"><img src="./Img/icons/icons/outline/24px/download.svg"
                                style="padding-right: 5%; width: 10%; float: inline-start;">Download</button>
                        <img src="./Img/icons/icons8-share.svg" style="padding-left: 5%;">
                    </div>
                    <p style="text-align: justify; padding-right: 40%;"><br>' . $appdescription . '<br><br></p>
                    <h4 style="margin: 0;">Write a review ✍️</h4>
                    <textarea name="review" id="review" cols="45" rows="8"></textarea>
                    <input id="submit" type="submit" value="Submit">
                </div>';
                }
            }
            ?>

        </div>

        <?php include_once './layout/footer.php' ?>

        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>

</body>

</html>