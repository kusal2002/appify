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
            <div class="img1">
                <img id="bigimg" src="./Img/appify.png" alt="">
            </div>
            <div class="imgrow2">
                <div class="img2">
                    <img id="subimg" src="./Img/appify.png" alt="">
                </div>
                <div class="img2">
                    <img id="subimg" src="./Img/appify.png" alt="">
                </div>
                <div class="img2">
                    <img id="subimg" src="./Img/appify.png" alt="">
                </div>
                <div class="img2">
                    <img id="subimg" src="./Img/appify.png" alt="">
                </div>
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
                    <p style="text-align: justify; padding-right: 40%;">' . $appdescription . '</p>
                    <h4 style="margin: 0;">Write a review ✍️</h4>
                    <textarea name="review" id="review" cols="45" rows="8"></textarea>
                    <input id="submit" type="submit" value="Submit">
                </div>';
                }
            }
            ?>

        </div>

        <?php include_once './layout/footer.php' ?>

</body>

</html>