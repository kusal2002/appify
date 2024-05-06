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
    <link rel="stylesheet" href="./css/blog_post.css">
</head>

<body>
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
                    <h4 style="padding: 0%;">'.$row["discription"].'</h4>
                    <div style="display: flex; justify-content: flex-end;">
                        <img src="./Img/icons/icons8-share.svg" alt="">
                        <img src="./Img/icons/icons/outline/24px/bookmark.svg" alt="">
                    </div>
                    <hr>
                    <br>
                    <div class="blogimg">
                        <img id=blogimg src="./uploads' . $row['image_1'] . '">
                    </div>
                    <p>' . $row["content"] . '</p>            
                </div>';
            }
        }

        ?>




        <!-- <div class="col2">
            <h1>Blog 1</h1>
            <h6>Jun 27,2023</h6>
            <div style="display: flex; justify-content: flex-end;">
                <img src="./Img/icons/icons8-share.svg" alt="">
                <img src="./Img/icons/icons/outline/24px/bookmark.svg" alt="">
            </div>
            <hr>
            <br>
            <div class="blogimg">
                <img id=blogimg src="./Img/2.png">
            </div>
            <p>From the ancient Egyptians' reverence to the internet's obsession, cats have long held a special place in human culture. With their mysterious allure and quirky behaviors, these enigmatic creatures continue to captivate us.</p>            
            <p>Cats have a long and storied history intertwined with humanity. In ancient Egypt, they were revered as sacred beings, with the goddess Bastet often depicted as a lioness or a domestic cat. Their association with divinity and protection extended into daily life, where they were cherished as household companions and guardians.

                Fast forward to the modern era, and cats have seamlessly transitioned into the digital age as internet sensations. From viral videos to meme-worthy antics, the online world has embraced cats with open arms. Their aloof demeanor, playful antics, and adorable appearances make them irresistible subjects for countless hours of scrolling and sharing.</p>
        </div> -->
        <div class="col3">
            <!-- <img style="float: right; padding: 30%;" src="./Img/icons/icons/fill/24px/right-arrow.svg" alt=""> -->
        </div>
    </div>


</body>

</html>