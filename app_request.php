<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Request Page</title>
    <link rel="stylesheet" href="./css/app_request_style.css">
</head>
<body>
    <div id="rqform">
        <h2>App Request Form</h2>
        <form  action="">
            
            <label class="form" for="fname">First Name</label>
            <label class="form" for="lname" style="float: right; padding-right: 29%;">Last Name</label><br>
            <input class="text" type="text" name="fname" style="width: 45%; float: light; ">                
            <input class="text" type="text" name="lname" style="width: 45%; float: right;"><br><br>

            <label for="address">Address</label><br>
            <input class="text" type="text" name="address" style="width: 395px;"><br><br>

            <label for="city">City</label>
            <label for="pcode" style="float: right; padding-right: 27%;">Postal Code</label><br>
            <input class="text" type="text" name="city" style="width: 45%;">
            <input class="text" type="text" name="pcode" style="width: 45%; float: right;"><br><br>

            <label for="email">Email</label><br>
            <input class="text" type="text" name="email" style="width: 395px;"><br><br>
            <label for="cnumber">Contact Number</label><br>
            <input class="text" type="text" name="cnumber" style="width: 395px;"><br><br>
            <br>
            <input type="submit" name="submit" id="btn" value="Send Request">
        </form>
    </div>
</body>
</html>