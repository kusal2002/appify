<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="./css/contactus.css">
    <link rel="stylesheet" href="./css/style.css"> 
</head>

<body>
<?php include_once './layout/header.php' ?>

    
    <div class="full">
        
        <div class="left">
            
            <h1 class="head">Contact Us</h1><br>
            <div class="info">
                <img class="svg" src="./Img/location.svg">
                <label id="det">777 West Street, Portland, OR 97205</label>
                <br><br>
                <img class="svg" src="./Img/tele.svg">
                <label id="det">(+1) 123 456 7893</label>
                <br><br>
                <img class="svg" src="./Img/mail.svg">
                <label id="det">name@email.com</label>
                <br>
            </div>
            <img src="./Img/image.jpeg" class="image">

        </div>
        <div class="line"></div>
        <div class="right">
            <form action="" class="form">
                <label>Name</label><br>
                <input type=text size="72"><br><br>
                <label>Email</label><br>
                <input type=text size="72"><br><br>
                <label>Contact No</label><br>
                <input type=text size="72"><br><br>
                <label>Your Message</label><br>
                <textarea cols="60" rows="10"></textarea><br><br>
                <button onclick="alertbox()">Send Message</button>
            </form>

        </div>
    </div>
 <?php include_once './layout/footer.php' ?>

 <script>
    function alertbox(){
        alert('Successfully Sent');
    }
 </script>
</body>


</html>