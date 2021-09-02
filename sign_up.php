<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Conmebol Copa America 2021</title>
    <link rel="stylesheet" href="style.css">
    <!-- stylesheet add -->
    <link rel="stylesheet" href="file:///D:/xampp/htdocs/session/style.css">
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

    .sign_up {
                border: 4px solid white;
                padding-left: 50px;
                padding-right: 50px;
                margin-left: 32%;
                margin-right: 32%;
                margin-top: 5%;
                border-radius: 3%;
                padding-bottom: 10px;
            }

            input[type=email],
            input[type=password], input[type=name]{
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



      <form class="sign_up" action="sign_up.php" method="post" style="text-align: center;">


            <h1>Sign up</h1><br>
           <strong>please give an email&emsp;</strong><input type="email" name="email" value=""placeholder="email"> <br><br>
            <strong>please give a password&emsp;</strong><input type="password" name="password" value=""placeholder="password"><br><br>
            <input type="submit" name="submit" value="submit">
          </form>

</body>
<?php
include_once "connection.php";


if(isset($_POST["submit"])){

  $email=$_POST["email"];
  $password=$_POST["password"];


  include_once "connection.php";

  $sql="INSERT INTO email_pass (email, password) VALUES ('$email','$password')";


  if (mysqli_query($conn,$sql)){

    echo "<br>Account created successfully!!Now please go to <br><br><a href='dashboard.php'>login</a>";
    echo "<br>";


  }

else {
    echo "<br>"."<h2>This email is taken, give another one !!</h2>"."<br>";
    //echo "there is an error 1st".mysqli_error($conn);
  }
}
 ?>
</html>
