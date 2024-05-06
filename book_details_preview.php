<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details Preview</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/details_preview.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
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
            $sql = "SELECT * FROM book WHERE `book_id` = $_GET[id]";

            $result = mysqli_query($conn, $sql);
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $bookid = $row['book_id'];
                    $bookname = $row['book_name'];
                    $bookdescription = $row['book_description'];
                    $bookauthor = $row['author'];

                    echo ' <div style="display:flex">
                     <h1><b>' . $bookname . '</b></h1><img src="./Img/icons/icons8-share.svg" style="padding-left: 5%;">
                     </div></th>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
        
                    
                    <h4><b>Year : </b>' . $row['year'] . '</h4>
                    <h4><b>Genre : </b>' . $row['genre'] . '</h4>
                    <h4><b>Author : </b>' . $bookauthor . '</h4>
                    <h4><b>Language : </b>' . $row['language'] . '</h4>
                    <h4><b>Pages : </b>' . $row['pages'] . '</h4><br><br>
                    
                    <div style="display: flex;">
                        <button id="btndown"><img src="./Img/icons/icons/outline/24px/download.svg"
                                style="padding-right: 5%; width: 10%; float: inline-start;">Download</button>
                        <button id="btndown"><img src="./Img/icons/icons/fill/24px/book.svg"
                                style="padding-right: 5%; width: 10%; float: inline-start;">Read Only</button>
                    
                    </div>
                    <p style="text-align: justify; padding-right: 40%;"><br>' . $bookdescription . '<br><br></p>
                    <h4 style="margin: 0;">Write a review ✍️</h4>
                    <textarea name="review" id="review" cols="45" rows="8"></textarea>
                    <input id="submit" type="submit" value="Submit">
                </div>';
                }
            }
            ?>
        </div>

        <?php include_once './layout/footer.php' ?>
    </div>
</body>

</html>