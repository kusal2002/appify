<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Details Preview</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/details_preview.css">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <?php include_once './layout/header.php' ?>

    <div class="containerr">
        <div class="left">
            <div class="img1">
                <video id="bigimg" controls>
                    <source src="./videos/Wildlife Windows 7 Sample Video.mp4" type="video/mp4">
                </video>
            </div>

        </div>
        <div class="right">
            <?php
            require 'config.php';
            $sql = "select * from movie where `movie_id` = $_GET[id]";


            $result = mysqli_query($conn, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $title = $row['title'];
                    $year = $row['year'];
                    $category = $row['category'];
                    $cast = $row['cast'];
                    $movie_description = $row['movie_description'];

                    $movie_id = $row['movie_id'];
                    echo '  <h1><b>' . $title . '</b></h1></th>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <br>
                    <h5>500K+ rewiews</h5>
                    <h5>10M+ downloads</h5>
                    <br>
                    <h4>year : ' . $row['year'] . '</h4>
                    <h4><b>Genre : </b>' . $row['category'] . '</h4>
                    <h4><b>Cast : </b>' . $row['cast'] . '</h4>
                    <br>
                    <div style="display: flex;">
                        <button id="btnq" class="selected">720p</button>
                        <button id="btnq">1080p</button>
                        <button id="btnq">4K</button>
                    </div>
                    <br>
                    <div style="display: flex;">
                        <button id="btndown"><img src="./Img/icons/icons/outline/24px/download.svg"
                                style="padding-right: 5%; width: 10%; float: inline-start;">Download</button>
                        <img src="./Img/icons/icons8-share.svg" style="padding-left: 5%;">
                    </div>
                    <p style="text-align: justify; padding-right: 40%;"><br>' . $row['movie_description'] . '<br><br></p>
                    <h4 style="margin: 0;">Write a review ✍️</h4>
                    <textarea name="review" id="review" cols="45" rows="8"></textarea>
                    <input id="submit" type="submit" value="Submit">
                </div>';
                }
            }
            ?>

        </div>
    </div>

    <?php include_once './layout/footer.php' ?>

</body>

</html>