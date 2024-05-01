<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Details Preview</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/details_preview.css">
</head>
<body>
    <div class="container">
        <div class="left">
            
            <div class="bookrow1">
                <div class="bookp">
                    <img id="bookimg" src="./Img/book.jpeg">
                </div>
                <div class="bookp">
                    <img id="bookimg" src="./Img/book.jpeg" alt="">
                </div>
            </div>
            <div class="bookrow1">
                <div class="bookp">
                    <img id="bookimg" src="./Img/book.jpeg" alt="">
                </div>
                <div class="bookp">
                    <img id="bookimg" src="./Img/book.jpeg" alt="">
                </div>
            </div>
        </div>
        <div class="right">
            <div style="display: flex;">
                <h1 style="margin-bottom: 4%;">The Time Machine</h1>
                <img src="./Img/icons/icons8-share.svg" style="padding-left: 5%;">
            </div>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>

            <h5>Year : 1985</h5>
            <h5>Genre: Science Fiction</h5>
            <h5>Author : H. G. Wells</h5>
            <h5>Language : English</h5>
            <h5>Pages : 78</h5><br>
            <div style="display: flex;">
                <button id="btndown"><img src="./Img/icons/icons/outline/24px/download.svg" style="padding-right: 5%; width: 10%; float: inline-start;">Download</button>
                <button id="btndown"><img src="./Img/icons/icons/fill/24px/book.svg" style="padding-right: 5%; width: 10%; float: inline-start;">Read Only</button>
                
            </div>
            <p style="text-align: justify; padding-right: 40%;">
                TimeTrack is your go-to app for effective time management, helping you stay organized, productive, and on top of your schedule. With intuitive features and customizable options, TimeTrack empowers you to make the most of your time, whether you're juggling work tasks, personal projects, or academic assignments.
            </p>
            <h4 style="margin: 0;">Write a review ✍️</h4>
            <textarea name="review" id="review" cols="45" rows="8"></textarea>
            <input id="submit" type="submit" value="Submit">
        </div>
    </div>
</body>
</html>