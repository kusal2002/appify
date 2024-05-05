<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
  <!-- <link rel="stylesheet" href="/css/publisher_style.css"> -->
  <link rel="stylesheet" href="../css/admin_style.css">

</head>

<body>
  <?php include_once './layout/sidebar.php' ?>

  <div class="content">
    <div id="dashboard">
      <h1>Welcome to your dashboard</h1>
      <a href="logout.php" class="sign-out">Sign out</a>
    </div>



    <div class="containerlarge">
      <div class="overviews">
        <div class="header">
          <h1>OVERVIEW</h1>
        </div>
        <div class="overview">
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