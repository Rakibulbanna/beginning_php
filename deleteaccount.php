<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete Account</title>
    <style>
        h2 {
          text-align: center;
        }
    </style>
</head>


<?php
session_start();

$_POST['email'] = $_SESSION['email'];
$email=$_POST["email"];
  include_once "connection.php";

  $sql2="DELETE FROM email_pass WHERE email='$email'";
  if (mysqli_query($conn,$sql2)){
      echo "<br><h2>account deleted successfully</h2>";
  }
  else {
    echo "there is an error 2nd".mysqli_error($conn);
  }
session_destroy();
require('dashboard.php');
?>
<body>
</html>
