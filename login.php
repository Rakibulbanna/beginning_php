<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>football club management</title>
    <!-- stylesheet add -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- fabicon add-->
    <link rel="shortcut icon" href="images/fabicon.jpg" type="image/x-icon">

    <!-- font awesome kit add-->
    <script src="https://kit.fontawesome.com/bf3ff6b95a.js" crossorigin="anonymous"></script>

    <style>
    body {
      text-align: center;
      font-family: 'Poppins';
    }
a{
  text-decoration: none;
}
  .dropbtn {
  display: inline-block;

  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #E02C6D;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {

  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align:center;
}

.dropdown-content a:hover {
  background-color: #2c0714;
}

.dropdown:hover .dropdown-content {
  display: block;
}

    </style>
  </head>
  <body>

<?php
        session_start();

        include_once "connection.php";

  $sqladmin = mysqli_query($conn,"SELECT email,password FROM admin_emailpass WHERE email = '".$_POST['email']."' AND password = '".($_POST['password'])."'");
        //$row1 = mysqli_num_rows($sqladmin);


        $sql = mysqli_query($conn,"SELECT email,password FROM email_pass WHERE email = '".$_POST['email']."' AND password = '".($_POST['password'])."'");
        //$row2 = mysqli_num_rows($sql);

        if( mysqli_num_rows($sql) > 0){
            $_SESSION['email'] = $_POST['email'];


        }
        elseif (mysqli_num_rows($sqladmin) > 0) {
          $_SESSION['email'] = $_POST['email'];
          $_SESSION['password'] = $_POST['password'];
          header("Location: index.php");
          exit;

        }
        else {
          die ("<br>"."<h3 style='text-align: center;color: #2D25A0;'>"."password or user name not matched<br>try again<br><br><a href='dashboard.php' style='background-color: #E02C6D;
        color:white;
        padding: 14px 20px;
        margin: 15px 0;
        border: none;
        cursor: pointer;
        width: 30%;
        border-radius: 5%;
        text-decoration: none;'>login</a>"."</h3>");

        }


 ?>
 <header>
   <br>

   <h3 style="text-align: center;"><?php echo $_POST['email']; ?> <br><br>You are logged in !!</h3>

         <!-- Links and logging button -->
         <nav>

             <!-- Contanis links of various portion of the full website -->
             <div class="navbarlink" id="myTopnav">
                 <ul>
                     <li><a href="Refresh:0">Home</a></li>
                     <li><a href="page_under_construction.php">players</a></li>
                     <li><a href="page_under_construction.php">Live</a></li>
                     <li><a href="page_under_construction.php">view rank</a></li>
                     <li><a href="page_under_construction.php">Contact</a></li>
                       <li class="dropdown">
                         <a href="javascript:void(0)" class="dropbtn">My profile</a>
                         <div class="dropdown-content">
                           <a href='logout.php' name='logout'>log out</a>
                           <a href='deleteaccount.php' name='deleteaccount'>delete account</a>
                         </div>
                       </li>

                       <li href="javascript:void(0);" class="icon" onclick="myFunction()">
                          <i class="fa fa-bars"></i>
                        </li>

                </ul>

             <!-- contains logging button -->

         </nav>


         <div class="banner">
             <div class="item">
                 <div class="banner-title">
                     <h1>Those match that our team participated in</h1>
                     <button class="btn-style watch-button">Watch now<i class="fas fa-arrow-right"></i></button>
                 </div>
             </div>
             <div class="item">
                 <div class="banner-logo"><img src="images/banner.png" alt=""></div>
             </div>
         </div>

     </header>



     <!-- main starts -->
     <main>
         <!-- player list section -->
         <br>
         <h1 class="list">Our player list</h1>
         <?php
         include_once "connection.php";
          $results = mysqli_query($conn, "SELECT * FROM people"); ?>
         <section class="player-list">
           <?php while ($row = mysqli_fetch_array($results)) { ?>
           <article class="player">
             <img src="images/footballer_logo.png" alt="" class="player-photo">
               <div class="player-details">
                   <h3><?php echo $row['first_name']." ". $row['last_name']." ".$row['mid_name']; ?></h3>
                   <p><?php echo $row['comment']; ?></p><br>
               </div>
           </article>
            <?php } ?>

         </section>

         <!-- highlightes section starts -->
         <section class="highlights">
             <div class=" item">
                 <div class="highlights-text">
                     <h2>All Highlights <br>of our matches !!</h2>
                     <p>The 2021 Copa América was the 47th edition of the Copa América, the international men's football
                         championship organised by South America's football ruling body CONMEBOL. The tournament took
                         place
                         in Brazil from 13 June to 10 July 2021.</p>
                     <button class="btn-style watch-button">Watch Live<i class="fas fa-arrow-right"></i></button>
                 </div>
             </div>
             <div class="item">
                 <div class="highlights-picture">
                     <img src="images/match.png" alt="">
                 </div>
             </div>
         </section>

         <!-- final video section starst -->
         <section class="final-video">
             <h2>Recent tournament Final's Highlights</h2>
             <iframe width="560" height="315" src="https://www.youtube.com/embed/EgcpR_U648M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

         </section>


     </main>

     <!-- footet starts -->
     <footer>
         <div class="footer">
             <div><img src="images/Logo.png" alt=""></div>
             <div class="footer-link">
                 <span><a class="fab fa-instagram" href="https://www.instagram.com/rakib_ul_banna/"></a></span>
                 <span><a class="fab fa-facebook" href="https://www.facebook.com/rakibulbanna.99/"></a></span>
                 <span><a class="fab fa-twitter" href="https://twitter.com/?lang=en"></a></span>
                 <span><a class="fab fa-youtube" href="https://www.youtube.com/channel/UC7hEzEzKaGV_wy1QZ8Pp1RQ"></a></span>
             </div>
              <p>version: 1.0</p><br>
             <p>&copy 2021 - Rakib ul banna</p>
         </div>
     </footer>

     <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "navbarlink") {
    x.className += " responsive";
  } else {
    x.className = "navbarlink";
  }
}
</script>
</body>
</html>
