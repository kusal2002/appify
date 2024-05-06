<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Details Preview</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/details_preview.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<?php include_once './layout/header.php' ?>

    <div class="containerr">
        <div class="left">
            <div class="img1">
                <video id="bigimg"controls>
                    <source src="./videos/Wildlife Windows 7 Sample Video.mp4" type="video/mp4">
                </video>
            </div>
            <div class="imgrow2">
                <div class="img2">
                    <video id="subimg" controls>
                        <source src="./videos/Wildlife Windows 7 Sample Video.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="img2">
                    <video id="subimg" controls>
                        <source src="./videos/Wildlife Windows 7 Sample Video.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="img2">
                    <video id="subimg" controls>
                        <source src="./videos/Wildlife Windows 7 Sample Video.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="img2">
                    <video id="subimg" controls>
                        <source src="./videos/Wildlife Windows 7 Sample Video.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        <div class="right">
            
            <div style="display: flex;">
                <h1 style="margin-bottom: 4%;">Interstellar</h1>
                <img src="./Img/icons/icons8-share.svg" style="padding-left: 5%;">
            </div>
            
            
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>

            <h5>368 reviews </h5>
            <h5>823 downloads</h5>
            <h5>Year : 2014</h5>
            <h5>Genre: Sci-Fi</h5>
            <h5>Director : Christopher Nolan</h5>
            <h5>Cast : Matthew David McConaughey  , Anne Hathaway</h5>
            <h5>Language : English</h5><br>
            <div style="display: flex;">
                <button id="btnq" class="selected">720p</button>
                <button id="btnq">1080p</button>
                <button id="btnq">4K</button>
            </div>
            <br>
            <div style="display: flex;">
                <button id="btndown"><img src="./Img/icons/film.svg" style="padding-right: 5%; width: 10%; float: inline-start;">Watch Trailer</button>
                <button id="btndown"><img src="./Img/icons/icons/outline/24px/download.svg" style="padding-right: 5%; width: 10%; float: inline-start;">Download</button>
            </div>

                <br>
                <p style="text-align: justify; padding-right: 40%;">
                    TimeTrack is your go-to app for effective time management, helping you stay organized, productive, and on top of your schedule. With intuitive features and customizable options, TimeTrack empowers you to make the most of your time, whether you are juggling work tasks, personal projects, or academic assignments.
                </p><br>
                <h4 style="margin: 0;">Write a review ✍️</h4>
                <textarea name="review" id="review" cols="45" rows="8"></textarea>
                <input id="submit" type="submit" value="Submit">' ;
                }
            }
            ?>
        </div>
    </div>

    <?php include_once './layout/footer.php' ?>

</body>
</html>