<?php
if (!empty($_SESSION['sessionid'])) {
    $sessionid = $_SESSION["sessionid"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE user_id = $sessionid");
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
}
?>



<div class="sidebar">
<h1><a href="./index.php" style="text-decoration:none; color:white;">Admin</a></h1>
<?php
require '.././config.php';

        $sql = "select * from `user`";
        $result = mysqli_query($conn, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $name =  $row['f_name'];
            echo '<h2 style="color:#00bdd6">Welcome '.$name.'</h2>';
        }


        ?>
        <ul>
            <label>Apps</label>
            <li><a href="./publish_content.php">CREATE APP</a></li>
            <li><a href="./manage_app.php">MANAGE APPS</a></li>
            <li>APPS</li>
            <li>MOVIES</li>
            <li>BOOKS</li>
        </ul>
        <ul>
            <label>Apps</label>
            <li>CREATE USERS</li>
            <li>MANAGE USERS</li>
        </ul>
        <ul>
            <label>Apps</label>
            <li><a href="blog_create.php">CREATE BLOG</a></li>
            <li><a href="./manage_blog.php">MANAGE BLOG</a></li>

        </ul>

        <a href="../logout.php"><button class="logout-btn">Logout</button></a>
    </div>