<div class="navbar">
    <div class="container">
        <div class="logo">
            <img src="img/logo.png" alt="logo">
        </div>
        <div class="links">
            <li><a href="./index.php" <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?>>Home</a> </li>
            <li><a href="./apps.php"<?php if(basename($_SERVER['PHP_SELF']) == 'apps.php') echo 'class="active"'; ?>>Apps</a> </li>
            <li><a href="./movies.php"<?php if(basename($_SERVER['PHP_SELF']) == 'movies.php') echo 'class="active"'; ?>>Movies</a> </li>
            <li><a href="./books.php"<?php if(basename($_SERVER['PHP_SELF']) == 'books.php') echo 'class="active"'; ?>>Books</a> </li>
            <li><a href="./blog.php"<?php if(basename($_SERVER['PHP_SELF']) == 'blog.php') echo 'class="active"'; ?>>Blog</a> </li>


        </div>
        <div class="auth">
            <button><a href="login.php"">Login</a></button>
              <button><a href=" register.php"">Register</a></button>
        </div>
    </div>
</div>