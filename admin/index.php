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
  <title>Admin Page</title>
  <link rel="stylesheet" href="../css/admin_style.css">
</head>

<body>

  <?php include_once './layout/sidebar.php' ?>


  <div class="content">
    <div class="containerlarge">
      <div class="overviews">
        <div class="header">
          <h1>OVERVIEW</h1>
        </div>
        <div class="overview">
          <div class="card">
            <div class="container">
              <h4><b>Users</b></h4>
              <p>144</p>
            </div>
          </div>
          <div class="card">
            <div class="container">
              <h4><b>Blogs</b></h4>
              <p>411</p>
            </div>
          </div>
          <div class="card">
            <div class="container">
              <h4><b>Apps</b></h4>
              <p>20</p>
            </div>
          </div>
        </div>
      </div>


      <div class="tables">
        <div class="container">
          <br>
          <div class="users">
            <div class="hederuser">
              <h1>Users</h1>
              
            </div>
            <br>
            <table border="1px">
              <tr style="width: 100%;">
                <th>User ID</th>
                <th>Name</th>
                <th>Mobile Number</th>
                <th>Address</th>
                <th>email</th>
              </tr>
              <tr>
                <?php
                require'../config.php';
                $sql = "select * from `user`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $user_id = $row['user_id'];
                    $f_name = $row['f_name'];
                    $phone_number = $row['phone_number'];
                    $address = $row['address'];
                    $email = $row['email'];
                    echo '  <tr>
                    <th scope="row">' . $user_id . '</th>
                    <td>' . $f_name . '</td>
                    <td>' . $phone_number . '</td>
                    <td>' . $address . '</td>
                    <td>' . $email . '</td>
                    
                    </tr>';
                  }
                }
                ?>
              </tr>
            </table>
          </div>
          <br><br>
          <div class="apps">
            <div class="hederuser">
              <h1>Apps</h1>
              
            </div>
            <br>
            <table border="1px">
              <tr style="width: 100%;">
                <th>App Id</th>
                <th>App Name</th>
                <th>Category</th>
                <th>Publisher Id</th>
                <th>Price</th>
              </tr>
              <tr>
              <?php
                require'../config.php';
                $sql = "select * from `apps`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $app_id = $row['app_id'];
                    $app_name = $row['app_name'];
                    $app_category = $row['category'];
                    $app_pubId = $row['publisher_id'];
                    $app_price = $row['price'];
                    echo '  <tr>
                    <th scope="row">' . $app_id . '</th>
                    <td>' . $app_name . '</td>
                    <td>' . $app_category . '</td>
                    <td>' . $app_pubId . '</td>
                    <td>' . $app_price . '</td>
                    
                    </tr>';
                  }
                }
                ?>
              </tr>
            </table>
            <br><br>
          </div>
          <div class="apps">
            <div class="hederuser">
              <h1>Movies</h1>
              
            </div>
            <br>
            <table border="1px">
              <tr style="width: 100%;">
                <th>Movie Id</th>
                <th>Title</th>
                <th>Year</th>
                <th>Category</th>
                <th>Price</th>
              </tr>
              <tr>
              <?php
                require'../config.php';
                $sql = "select * from `movie`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $movie_id = $row['movie_id'];
                    $movie_title = $row['title'];
                    $movie_year = $row['year'];
                    $movie_category = $row['category'];
                    $movie_price = $row['price'];
                    echo '  <tr>
                    <th scope="row">' . $movie_id . '</th>
                    <td>' . $movie_title . '</td>
                    <td>' . $movie_year . '</td>
                    <td>' . $movie_category . '</td>
                    <td>' . $movie_price . '</td>
                    
                    </tr>';
                  }
                }
                ?>
              </tr>
            </table>
            <br><br>
          </div>
          <div class="apps">
            <div class="hederuser">
              <h1>Books</h1>
              
            </div>
            <br>
            <table border="1px">
              <tr style="width: 100%;">
                <th>Book Id</th>
                <th>Book Name</th>
                <th>Language</th>
                <th>Author</th>
                <th>Genre</th>
              </tr>
              <tr>
              <?php
                require'../config.php';
                $sql = "select * from `book`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $book_id = $row['book_id'];
                    $book_name = $row['book_name'];
                    $book_language = $row['language'];
                    $b_author = $row['author'];
                    $b_genre = $row['genre'];
                    echo '  <tr>
                    <th scope="row">' . $book_id . '</th>
                    <td>' . $book_name . '</td>
                    <td>' . $book_language . '</td>
                    <td>' . $b_author . '</td>
                    <td>' . $b_genre . '</td>
                    
                    </tr>';
                  }
                }
                ?>
              </tr>
            </table>
            <br><br>
          </div>
          <div class="apps">
            <div class="hederuser">
              <h1>Blogs</h1>
              
            </div>
            <br>
            <table border="1px">
              <tr style="width: 100%;">
                <th>Blog Id</th>
                <th>Title</th>
                <th>Category</th>
                <th>Content</th>
              </tr>
              <tr>
              <?php
                require'../config.php';
                $sql = "select * from `blogs`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $blog_id = $row['blog_id'];
                    $blog_title = $row['title'];
                    $blog_category = $row['categories'];
                    $blog_content = $row['content'];
                    
                    echo '  <tr>
                    <th scope="row">' . $blog_id . '</th>
                    <td>' . $blog_title . '</td>
                    <td>' . $blog_category . '</td>
                    <td>' . $blog_content . '</td>
                    
                    </tr>';
                  }
                }
                ?>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>





</body>

</html>