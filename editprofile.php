<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="./css/editprofile_style.css">
</head>
<body>
        <div class="col" style="background-color: blue; width: 100%; height: 100%; padding:0; margin: 0;"> 
            <div style="background-color: rgb(255, 255, 255); width: 30%; height: 700px;">
            <img src="./Img/pro.png" style="width: 200px;height: 200px; padding-left: 25%;padding-top: 20%; padding-right: 25%;">
            
        </div>
            <div style="background-color: rgb(255, 255, 255);; width: 70%; height: 700px; ">
            <form style="padding-top: 5%; padding-left: 10%;" action="">
                <label for="propic">Profile Picture</label><br>
                <input class="text" type="file"><br><br>
                <label for="fullname">Full Name</label><br>
                <input class="text" type="text" placeholder="Your Full name"><br><br>
                <label for="email">Email</label><br>
                <input class="text" type="text" placeholder="Your Full name"><br><br>
                <label for="PhoneNumber">Phone Number</label><br>
                <input class="text" type="text" placeholder="Your Phone number"><br><br>
                <label for="Location">Location</label><br>
                <input class="text" type="text" placeholder="Select Your Country"><br><br>
                <label for="Aboutme">About me</label><br>
                <textarea class="textarea"  placeholder="Tell somthing about yourself"></textarea><br><br>
            </form>
            
            <button class="btn" style="margin-right: 8%;">Save Profile</button>
            <button class="btn">Cancel</button>
            </div>            
        </div>

</body>
</html>