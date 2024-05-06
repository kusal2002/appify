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
              <button class="button">See More</button>
            </div>
            <br>
            <table>
              <tr style="width: 100%;">
                <th>User ID</th>
                <th>Name</th>
                <th>Mobile Number</th>
                <th>Address</th>
                <th>email</th>
                <th>Edit</th>
              </tr>
              <tr>
                <?php
                $sql = "select * from `user`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['user_id'];
                    $name = $row['f_name'];
                    $email = $row['phone_number'];
                    $mobile = $row['address'];
                    $email = $row['email'];
                    echo '  <tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $mobile . '</td>
                    <td>' . $password . '</td>
                    <td>
                    <button class="btn btn-primary"><a href="update.php? updateid=' . $id . '" class="text-light">Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php? deleteid=' . $id . '" class="text-light">Delete</a></button>
                    </td>
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
              <button class="button">See More</button>
            </div>
            <br>
            <table>
              <tr style="width: 100%;">
                <th>App Name</th>
                <th>App Description</th>
                <th>Update Data</th>
                <th>Status</th>
                <th>Edit</th>
              </tr>
              <tr>
                <td>tuda</td>
                <td>tuda@gmail.com</td>
                <td>10/07/2023</td>
                <td><button class="avtivebtn">Active</button></td>
                <td><img src="/Img/icons/pen.svg" id="iconpen"></td>
              </tr>
            </table>

          </div>
        </div>
      </div>
    </div>

  </div>





</body>

</html>