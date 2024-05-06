<div class="sidebar">
    <h1><a href="./index.php" style="text-decoration:none; color:white;">Publisher</a></h1>
    <?php
    require '.././config.php';

    $sql = "select * from `user`";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name =  $row['f_name'];
        echo '<h2 style="color:#00bdd6">Welcome ' . $name . '</h2>';
    }


    ?>
    <ul>
        <label>Apps</label>
        <li><a href="./publish_content.php">CREATE APP</a></li>
        <li>MANAGE APPS</li>
        <li>APPS</li>
        <li>MOVIES</li>
        <li>BOOKS</li>
    </ul>
    <ul>
        <label>Apps</label>
        <li>CREATE BLOG</li>
        <li><a href="./manage_blog.php">MANAGE BLOG</a></li>

    </ul>

    <a href="../logout.php"><button class="logout-btn">Logout</button></a>
    
</div>