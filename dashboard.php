<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Conmebol Copa America 2021</title>
    <link rel="stylesheet" href="style.css">
    <!-- stylesheet add -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- fabicon add-->
    <link rel="shortcut icon" href="images/favicon.jpeg" type="image/x-icon">

    <!-- font awesome kit add-->
    <script src="https://kit.fontawesome.com/bf3ff6b95a.js" crossorigin="anonymous"></script>

    <style>
    body {
      text-align: center;
      font-family: 'Poppins';
      width: 100%;
    height: auto;
    background: #2D25A0;
    color: white;
    }

    .login {
                border: 4px solid white;
                padding-left: 50px;
                padding-right: 50px;
                margin-left: 32%;
                margin-right: 32%;
                margin-top: 5%;
                border-radius: 3%;
                padding-bottom: 20px;
            }

            input[type=email],
            input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin-top: 10px;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
                border-radius: 2%;
            }
            input[type=submit],a {
                background-color: #E02C6D;
                color:white;
                padding: 14px 20px;
                margin: 15px 0;
                border: none;
                cursor: pointer;
                width: 30%;
                border-radius: 5%;
                text-decoration: none;
            }

            h1{
                font-size: 60px;
            }


    </style>
  </head>
  <body>
    <form class="login" action="login.php" method="post" style="text-align: center;">


            <h1>Log in</h1><br>
            <strong>Email&emsp;</strong><br><input type="email" name="email" value="" placeholder="Enter your email"> <br><br>
            <strong>password&emsp;</strong><br><input type="password" name="password" value="" placeholder="Enter your password"> <br>
            <br>
            <input type="submit" name="submit" value="submit"><br>
            <h4>do u have no account?</h4><br>
            <a href='sign_up.php'>Sign up</a>
        </form>

</body>
</html>
