<?php
session_start();
require '../config.php';
if (!empty($_SESSION['sessionid'])) {
    $sessionid = $_SESSION["sessionid"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE user_id = $sessionid");
    $row = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin:Manage Books</title>
    <link rel="stylesheet" href="../css/publisher_style.css">


</head>

<body>
    <?php include_once './layout/sidebar.php' ?>
    <div class="content">

        <div class="containermanageapp">
            <center>
                <h1>Manage Books</h1>
            </center>
        </div>



        <?php
        $sql = "SELECT * FROM book";
        $result = mysqli_query($conn, $sql);
        $count = 0;
        if ($result && mysqli_num_rows($result) > 0) {
            echo '<div class="sampletabs">';
            while ($row = mysqli_fetch_assoc($result)) {
                if ($count % 3 === 0 && $count !== 0) {
                    echo '</div><div class="sampletabs">';
                }
                $book_id = $row['book_id'];
                echo '
                    <div class="card">
                        <div class="image">
                            <img src="../uploads' . $row['image_1'] . '" alt="">
                        </div>
                        <center>
                        <div class="container">
                            <h3><b>' . $row['book_name'] . ' </b></h3>
                            <p>' . $row['author'] . '</p>
                        </div>
                        <div class="container2">
                        <a href="update_manage_book.php?updateid=' . $book_id . '" class="text-light"><button class="avtivebtn">Update</button></a>
                        <a href="deletebook.php?deletebookid=' . $book_id . '" class="text-light"><button class="avtivebtn">Delete</button></a>
                        </div>
                        </center>
                    </div>';
                $count++;
            }
            echo '</div>';
        }

        ?>

