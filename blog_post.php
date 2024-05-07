<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
    <!-- <link rel="stylesheet" href="./css/blog_post.css" -->
    <link rel="stylesheet" href="./css/style.css">
    <style>
        body {
            background-color: ;
        }

        .container {
            background-color: #333;
            display: flex;
            width: 100%;
            padding: 0%;
        }


        .col2 {
            background-color: #333;
            padding: 1% 25% 0% 25%;
            height: 600px;
        }

        p,
        h1,
        h4 {
            text-align: justify;
            color: rgb(255, 255, 255);
        }
    </style>
</head>

<body>
    <?php include_once './layout/header.php' ?>
    <div class="container">
        <div class="col1">
            <!-- <img style="float: left; padding: 30%;" src="./Img/icons/icons/fill/24px/left-arrow.svg" alt=""> -->
        </div>


        <?php
        $sql = "select * from blogs where `blog_id` =$_GET[id]";
        $result = mysqli_query($conn, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            $count = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                if ($count % 4 === 0 && $count !== 0) {
                    echo '</div><div class="sampletabs">';
                }
                $blog_id = $row['blog_id'];
                echo '<div class="col2">
                    <h1 style="padding: 0%;">' . $row["title"] . '</h1>
                    <h4 style="padding: 0%;">' . $row["discription"] . '</h4>                    
                    <br>
                    <div class="blogimg">
                        <img id=blogimg src="./uploads' . $row['image_1'] . '">
                    </div>
                    <p>' . $row["content"] . '</p>            
                </div>';
            }
        }

        ?>
    </div>

    <?php include_once './layout/footer.php' ?>
</body>

</html>