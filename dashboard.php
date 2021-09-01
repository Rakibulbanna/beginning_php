<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <style>
        .login {
            border: 2px solid black;
            padding: 10px 200px;

        }

        input[type=email],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type=submit] {
            background-color: #000000;
            color: white;
            padding: 14px 20px;
            margin: 15px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>

<body>

    <form class="login" action="login.php" method="post" style="text-align: center;">

        <img src="cover.jpg" width="300">
        <h1>Log in</h1><br>
        <strong>Email&emsp;<input type="email" name="email" value=""></strong> <br><br>
        <strong>password&emsp;<input type="password" name="password" value=""></strong> <br>
        <br>
        <input type="submit" name="submit" value="submit">
        <a href='sign_up.php'><h3>Sign up</h3>
    </form>

</body>

</html>
