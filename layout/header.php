<?php
if (!empty($_SESSION['sessionid'])) {
    $sessionid = $_SESSION["sessionid"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE user_id = $sessionid");
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
}
?>




<div class="navbar">
    <div class="container">
        <div class="logo">
            <a href="./index.php"><img src="img/logo.png" alt="logo"></a>
        </div>
        <div class="links">
            <li><a href="./index.php" <?php if (basename($_SERVER['PHP_SELF']) == 'index.php')
                echo 'class="active"'; ?>>Home</a> </li>
            <li><a href="./apps.php" <?php if (basename($_SERVER['PHP_SELF']) == 'apps.php')
                echo 'class="active"'; ?>>Apps</a> </li>
            <li><a href="./movies.php" <?php if (basename($_SERVER['PHP_SELF']) == 'movies.php')
                echo 'class="active"'; ?>>Movies</a> </li>
            <li><a href="./books.php" <?php if (basename($_SERVER['PHP_SELF']) == 'books.php')
                echo 'class="active"'; ?>>Books</a> </li>
            <li><a href="./blog.php" <?php if (basename($_SERVER['PHP_SELF']) == 'blog.php')
                echo 'class="active"'; ?>>Blog</a> </li>


        </div>

        <div class="auth">
            <?php if (!empty($_SESSION['sessionid'])): ?>
                <h2 style="color:#00bdd6">Welcome <?php echo $row["f_name"]; ?></h2>
                <button class="logoutbtn"><a href="logout.php">logout</a></button>

            <?php endif; ?>

            <?php if (empty($_SESSION['sessionid'])): ?>
                <button><a href="login.php">Login</a></button>
                <button><a href="register.php">Register</a></button>

            <?php endif; ?>
        </div>


    </div>
</div>