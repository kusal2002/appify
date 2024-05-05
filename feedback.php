<?php

include("./config.php");

if(isset($_POST["login"]))
{
    $description = $_POST['description'];


$sql="INSERT INTO feedback (massage) VALUES('$description')";
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('Feedback Submitted successfully')</script>";
}
else{
    die(mysqli_error($conn));
}
}

?>




<!DOCTYPE html>
<html>

<head>
    <title>Feedback</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/feedback_style.css">

    
</head>

<body>




    <form id="login" method="post">
        <h1>Feedback</h1>
        <br>
        <textarea rows="4" cols="50" placeholder="Type Your Feedback" name="description"></textarea>
        <br><br>
        <center>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <br><br>

        <button type="submit" name="login" >Submit</button>
        </center>
        
    </form>

</body>






</html>