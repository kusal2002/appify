<?php
session_start();
require 'config.php';
if (!empty($_SESSION['sessionid'])) {
    $sessionid = $_SESSION["sessionid"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE user_id = $sessionid");
    $row = mysqli_fetch_assoc($result);
}
// else{
//     header("location: login.php");
//     exit();
// }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include_once './layout/header.php' ?>

    <div class="container">

        <div class="title">
            <h1>Apps</h1>

        </div>
        <div class="view">
            <button><a href="apps.php">View All</a><i class="fa fa-arrow-right" style="font-size: 18px;"></i></button>
        </div>



    </div>
    <div class="sampletabs">
        <?php
        $sql = "select * from apps";
        $result = mysqli_query($conn, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            $count = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                if ($count % 4 === 0 && $count !== 0) {
                    echo '</div><div class="sampletabs">';
                }
                $app_id = $row['app_id'];
                echo '<div class="card">';
                echo '<a href="app_details_preview.php?id=' . $app_id . '">';
                echo '<div class="image">';
                echo '<img src="./uploads' . $row['app_profile_img'] . '" alt="">';
                echo '  </div>';
                echo '   <div class="container">';
                echo "<h1><b>" . $row['app_name'] . "</b></h1>";
                echo "<p>" . $row['category'] . "</p>";
                echo '      </div>';
                echo '  </a>';
                echo '  </div>';
                $count++;

            }
        }

        ?>
    </div>

    <div class="container">
        <div class="title">
            <h1>Movies</h1>

        </div>
        <div class="view">
        <button><a href="movies.php">View All</a><i class="fa fa-arrow-right" style="font-size: 18px;"></i></button>
        </div>
    </div>

    <div class="sampletabs">
        <?php
        $sql = "select * from movie";
        $result = mysqli_query($conn, $sql);
        $count = 0;
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($count % 4 === 0 && $count !== 0) {
                    echo '</div><div class="sampletabs">';
                }
                $movie_id = $row['movie_id'];
                echo '<div class="card">';
                echo '<a href="movie_details_preview.php?id=' . $movie_id . '">';
                echo '<div class="image">';
                echo '<img src="./uploads' . $row['image_1'] . '" alt="">';
                echo '  </div>';
                echo '   <div class="container">';
                echo "<h1><b>" . $row['title'] . "</b></h1>";
                echo "<p>" . $row['category'] . "</p>";
                echo '      </div>';
                echo '  </a>';
                echo '  </div>';
                $count++;

            }
        }

        ?>
    </div>

    <div class="container">
        <div class="title">
            <h1>Books</h1>

        </div>
        <div class="view">
        <button><a href="books.php">View All</a><i class="fa fa-arrow-right" style="font-size: 18px;"></i></button>
        </div>
    </div>

    <div class="sampletabs">
        <?php
        $sql = "select * from book";
        $result = mysqli_query($conn, $sql);
        $count = 0;
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($count % 4 === 0 && $count !== 0) {
                    echo '</div><div class="sampletabs">';
                }
                echo '<div class="card">';
                echo '<a href="./books.php">';
                echo '<div class="image">';
                echo '  <img src="./Img/1.png" alt="">';
                echo '  </div>';
                echo '   <div class="container">';
                echo "<h1><b>" . $row['book_name'] . "</b></h1>";
                echo "<p>" . $row['language'] . "</p>";
                echo '      </div>';
                echo '  </a>';
                echo '  </div>';
                $count++;

            }
        }

        ?>
    </div>




    <?php include_once './layout/footer.php' ?>

</body>

</html>