<!-- <?php
session_start();
require 'config.php';
if(!empty($_SESSION['id'])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM registerd_user WHERE user_id = $id");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("location: login.php");
    exit();
}
?> -->


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
    <h4>Welcome <?php echo $row["f_name"]; ?></h4>

    <div class="container">
        
        <div class="title">
            <h1>Apps</h1>

        </div>
        <div class="view">
            <button>View All <i class="fa fa-arrow-right" style="font-size: 18px;"></i>
            </button>
        </div>



    </div>
    <div class="sampletabs">
        <div class="card">
            <a href="./books.php">
                <div class="image">
                    <img src="./Img/1.png" alt="">
                </div>
                <div class="container">
                    <h4><b>WIFI</b></h4>
                    <p>Sold</p>
                </div>
            </a>
        </div>
        <div class="card">
            <a href="./books.php">
                <div class="image">
                    <img src="./Img/1.png" alt="">
                </div>
                <div class="container">
                    <h4><b>WIFI</b></h4>
                    <p>Sold</p>
                </div>
            </a>
        </div>
        <div class="card">
            <a href="./books.php">
                <div class="image">
                    <img src="./Img/1.png" alt="">
                </div>
                <div class="container">
                    <h4><b>WIFI</b></h4>
                    <p>Sold</p>
                </div>
            </a>
        </div>
        <div class="card">
            <a href="./books.php">
                <div class="image">
                    <img src="./Img/1.png" alt="">
                </div>
                <div class="container">
                    <h4><b>WIFI</b></h4>
                    <p>Sold</p>
                </div>
            </a>
        </div>




    </div>

    <div class="container">
        <div class="title">
            <h1>Movies</h1>

        </div>
        <div class="view">
            <button>View All <i class="fa fa-arrow-right" style="font-size: 18px;"></i>
            </button>
        </div>



    </div>

    <div class="sampletabs">
        <div class="card">
            <a href="./books.php">
                <div class="image">
                    <img src="./Img/1.png" alt="">
                </div>
                <div class="container">
                    <h4><b>WIFI</b></h4>
                    <p>Sold</p>
                </div>
            </a>
        </div>
        <div class="card">
            <a href="./books.php">
                <div class="image">
                    <img src="./Img/1.png" alt="">
                </div>
                <div class="container">
                    <h4><b>WIFI</b></h4>
                    <p>Sold</p>
                </div>
            </a>
        </div>
        <div class="card">
            <a href="./books.php">
                <div class="image">
                    <img src="./Img/1.png" alt="">
                </div>
                <div class="container">
                    <h4><b>WIFI</b></h4>
                    <p>Sold</p>
                </div>
            </a>
        </div>
        <div class="card">
            <a href="./books.php">
                <div class="image">
                    <img src="./Img/1.png" alt="">
                </div>
                <div class="container">
                    <h4><b>WIFI</b></h4>
                    <p>Sold</p>
                </div>
            </a>
        </div>

    </div>

    </div>



    <?php include_once './layout/footer.php' ?>

</body>

</html>