<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <style>
        .sign_up {
            border: 2px solid black;
            padding: 10px 200px;

        }
        body{
          text-align:center;
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

    <form class="sign_up" action="sign_up.php" method="post" style="text-align: center;">

        <img src="cover.jpg" width="300">
        <h1>Sign up</h1><br>
        <strong>Give your Email&emsp;<input type="email" name="email" value=""></strong> <br><br>
        <strong>Give a password&emsp;<input type="password" name="password" value=""></strong> <br>
        <br>
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

    echo "<h2>Account created successfully!!Now please go to "."<a href='dashboard.php'>"."<h3>login</h3>"."</a></h2>";
    echo "<br>";


  }

else {
    echo "<br>"."<h2>This email is taken,give another one!!</h2>"."<br>";
    //echo "there is an error 1st".mysqli_error($conn);
  }
}
 ?>

</html>
