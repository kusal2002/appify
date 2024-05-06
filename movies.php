<?php
session_start();
require 'config.php';
if(!empty($_SESSION['id'])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE user_id = $id");
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
    <title>Movies</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include_once './layout/header.php' ?>

    <div class="containerapps">
        <div class="titleapps">
            <h1>Movies</h1>

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
                
                echo '<div class="card">';
                echo '<a href="./movie_details_preview.php?id='. $row['movie_id'] .'">';
                echo '<div class="image">';
                echo '  <video style="width:100%; border-radius: 10px; " autoplay muted src="./uploads/'.$row['video'].'" type="video/mp4"></video>';
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



    <?php include_once './layout/footer.php' ?>

</body>

</html>