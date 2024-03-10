<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <style>
        body {
            background-color: #f0f8ff;
        }

        .container {
            background-color: #e6e6ff;
            text-align: center;
            border-radius: 25px;
            padding: 20px;
            margin: 20px;
        }

        .text {
            font-size: 24px;
        }

        input[type=text],
        input[type=password] {
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 50%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="register_user.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required><br>
            <input type="submit" value="Register">
        </form>
    </div>
</body>

</html>
