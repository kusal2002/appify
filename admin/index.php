
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    #dashboard {
      background-color: lightblue;
      padding: 10px;
    }

    .sign-out {
      background-color: red;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
    }

    .users{
      background-color: rgb(255, 255, 255);
      width: 100%;
      height: 300px;

    }

    .hederuser{
      display: flex;
      justify-content: space-between;
    }

    .apps{
      background-color: rgb(255, 255, 255);
      width: 100%;
      height: 300px;
    }

  

    
    table {
      border-collapse: collapse;
      width: 100%;
      text-align: left;
    }
    
    h1{
      margin: 0;
    }
    /* Button 99 */
    .button {
      top: 348px; 
      left: 1300px; 
      height: 36px; 
      padding: 0 12px; 
      font-family: Inter; 
      font-size: 14px; 
      line-height: 22px; 
      font-weight: 400; 
      color: #00BDD6FF; /* primary-500 */
      background: #EBFDFFFF; /* primary-100 */
      opacity: 1; 
      border: none; 
      border-radius: 4px; /* border-m */
      
    }
    /* Hover */
    .button:hover {
      color: #00BDD6FF; /* primary-500 */
      background: #A6F5FFFF; /* primary-200 */
    }
    /* Pressed */
    .button:hover:active {
      color: #00BDD6FF; /* primary-500 */
      background: #61EDFFFF; /* primary-300 */
    }
    /* Disabled */
    .button:disabled {
      opacity: 0.4; 
    }

    .avtivebtn {
      
      top: 348px; 
      left: 1300px; 
      height: 20px; 
      display: flex; 
      align-items: center; 
      justify-content: center; 
      font-family: Inter; 
      font-size: 20px; 
      line-height: 22px; 
      font-weight: 400; 
      color: rgb(63, 183, 107); /* primary-500 */
      background: #EBFDFFFF; /* primary-100 */
      opacity: 1; 
      border: none; 
      border-radius: 4px; /* border-m */
    }
    /* Hover */
    .avtivebtn:hover {
      color: rgb(255, 255, 255); /* primary-500 */
      background: rgb(63, 183, 107); /* primary-200 */
    }
    /* create */
    .iconpen {
      
      
      fill: #9095A0FF; /* neutral-500 */
    }
  </style>
</head>

<body>
  <div id="dashboard">
    <h1>Welcome to your dashboard</h1>
    <a href="logout.php" class="sign-out">Sign out</a>
  </div>
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
            <th>User Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Update Data</th>
            <th>Status</th>
            <th>Edit</th>
          </tr>
          <tr>
            <td>lithira</td>
            <td>lithira@gmail.com</td>
            <td>US</td>
            <td>10/07/2023</td>
            <td><button class="avtivebtn">Active</button></td>
            <td><img src="/Img/icons/pen.svg" id="iconpen"></td>
          </tr>
          <tr>
            <td>lithira</td>
            <td>lithira@gmail.com</td>
            <td>US</td>
            <td>10/07/2023</td>
            <td><button class="avtivebtn">Active</button></td>
            <td><img src="/Img/icons/pen.svg" id="iconpen"></td>
          </tr>
          <tr>
            <td>lithira</td>
            <td>lithira@gmail.com</td>
            <td>US</td>
            <td>10/07/2023</td>
            <td><button class="avtivebtn">Active</button></td>
            <td><img src="/Img/icons/pen.svg" id="iconpen"></td>
          </tr>
          <tr>
            <td>lithira</td>
            <td>lithira@gmail.com</td>
            <td>US</td>
            <td>10/07/2023</td>
            <td><button class="avtivebtn">Active</button></td>
            <td><img src="/Img/icons/pen.svg" id="iconpen"></td>
          </tr>
          <tr>
            <td>lithira</td>
            <td>lithira@gmail.com</td>
            <td>US</td>
            <td>10/07/2023</td>
            <td><button class="avtivebtn">Active</button></td>
            <td><img src="/Img/icons/pen.svg" id="iconpen"></td>
          </tr>
          <tr>
            <td>lithira</td>
            <td>lithira@gmail.com</td>
            <td>US</td>
            <td>10/07/2023</td>
            <td><button class="avtivebtn">Active</button></td>
            <td><img src="/Img/icons/pen.svg" id="iconpen"></td>
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
          <tr>
            <td>tuda</td>
            <td>tuda@gmail.com</td>
            <td>10/07/2023</td>
            <td><button class="avtivebtn">Active</button></td>
            <td><img src="/Img/icons/pen.svg" id="iconpen"></td>
          </tr>
          <tr>
            <td>tuda</td>
            <td>tuda@gmail.com</td>
            <td>10/07/2023</td>
            <td><button class="avtivebtn">Active</button></td>
            <td><img src="/Img/icons/pen.svg" id="iconpen"></td>
          </tr>
          <tr>
            <td>tuda</td>
            <td>tuda@gmail.com</td>
            <td>10/07/2023</td>
            <td><button class="avtivebtn">Active</button></td>
            <td><img src="/Img/icons/pen.svg" id="iconpen"></td>
          </tr>
          <tr>
            <td>tuda</td>
            <td>tuda@gmail.com</td>
            <td>10/07/2023</td>
            <td><button class="avtivebtn">Active</button></td>
            <td><img src="/Img/icons/pen.svg" id="iconpen"></td>
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
</body>
</html>
