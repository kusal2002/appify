<!DOCTYPE html>
<html>

<head>
    <title>Registergggg</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Textarea 2 */

        textarea {
            width: 400px;
            height: 300px;
            padding: auto;
            padding-bottom: 12px;
            margin-left: auto;


            font-family: Inter;
            font-size: 15px;
            line-height: 28px;
            font-weight: 400;
            color: rgb(0, 0, 0);
            /* neutral-400 */
            background: #FFFFFFFF;
            /* white */
            border-radius: 4px;
            /* border-m */
            border-width: 1px;
            border-color: #9095A0FF;
            /* neutral-500 */
        }

        h1 {
            text-align: center;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
        }

        #login {
            width: 400px;
            padding: 60px 60px;
            height: 500px;
            background-color: #fff;
            margin:5% auto;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        label {
            display: block;
            margin-top: 20px;
        }

        input[type="textarea"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        .checked {
            color: orange;
        }
    </style>

    
</head>

<body>
    <form id="login" action="login_check.php" method="post">
        <h1>Feedback</h1>
        <br>
        <textarea rows="4" cols="50" placeholder="Type Your Feedback"></textarea>
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