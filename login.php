<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Conmebol Copa America 2021</title>
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

        $sql = mysqli_query($conn,"SELECT email,password FROM email_pass WHERE email = '".$_POST['email']."' AND password = '".($_POST['password'])."'");
        $row = mysqli_num_rows($sql);

        if($row <= 0 )
        {
          die ("<br>"."<h3 style='text-align: center;'>"."password or user name not matched"."</h3>");

        }
        else {
          $_SESSION['email'] = $_POST['email'];
        }

 ?>
 <header>
   <br>
   <h3 style="text-align: center;"><?php echo $_POST['email']; ?> You are log in !!</h3>

         <!-- Links and logging button -->
         <nav>

             <!-- Contanis links of various portion of the full website -->
             <div class="navbarlink" id="myTopnav">
                 <ul>
                     <li><a href="#">Home</a></li>
                     <li><a href="#">Clubs</a></li>
                     <li><a href="#">World Cup 2023</a></li>
                     <li><a href="#">Upcoming Matches</a></li>
                     <li><a href="#">Contact</a></li>
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
                     <h1>Conmebol Copa America 2021</h1>
                     <button class="btn-style watch-button">Watch Live<i class="fas fa-arrow-right"></i></button>
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
         <section class="player-list">
             <article class="player">
                 <img src="images/players/player-1.png" alt="" class="player-photo">
                 <div class="player-details">
                     <h3>Neymar Jr</h3>
                     <p>Neymar da Silva Santos Júnior, known as Neymar, is a Brazilian professional footballer who plays
                         as a forward for Ligue 1 club Paris Saint-Germain and the Brazil national team. He is widely
                         regarded as one of the best players in the world.</p>
                 </div>
             </article>
             <article class="player">
                 <img src="images/players/player-2.png" alt="" class="player-photo">
                 <div class="player-details">
                     <h3>Lionel Messi</h3>
                     <p>Lionel Andrés Messi is an Argentine professional footballer who plays as a forward or an
                         attacking midfielder and captains the Argentina national team. He is currently a free agent,
                         having played all his professional career for La Liga club FC Barcelona.</p>
                 </div>
             </article>
             <article class="player">
                 <img src="images/players/player-3.png" alt="" class="player-photo">
                 <div class="player-details">
                     <h3>Cristiano Ronaldo</h3>
                     <p>Cristiano Ronaldo dos Santos Aveiro GOIH ComM is a Portuguese professional footballer who plays
                         as a forward for Serie A club Juventus and captains the Portugal national team. </p>
                 </div>
             </article>
             <article class="player">
                 <img src="images/players/player-4.png" alt="" class="player-photo">
                 <div class="player-details">
                     <h3>Paulo Dybala</h3>
                     <p>Paulo Exequiel Dybala is an Argentine professional footballer who plays as a forward for Serie A
                         club Juventus and the Argentina national team. </p>
                 </div>
             </article>
             <article class="player">
                 <img src="images/players/player-5.png" alt="" class="player-photo">
                 <div class="player-details">
                     <h3>Mesut Ozil</h3>
                     <p>Mesut Özil is a German professional footballer who plays as an attacking midfielder for Süper Lig
                         club Fenerbahçe. Nicknamed "The Assist King", Özil is known for his technical skills,
                         creativity, agility, and finesse.</p>
                 </div>
             </article>
             <article class="player">
                 <img src="images/players/player-6.png" alt="" class="player-photo">
                 <div class="player-details">
                     <h3>Mauro Icardi </h3>
                     <p>Mauro Emanuel Icardi is an Argentine professional footballer who plays as a striker for Ligue 1
                         club Paris Saint-Germain and the Argentina national team.</p>
                 </div>
             </article>
             <article class="player">
                 <img src="images/players/player-7.png" alt="" class="player-photo">
                 <div class="player-details">
                     <h3>Di Maria</h3>
                     <p>Ángel Fabián Di María is an Argentine professional footballer who plays for Ligue 1 club Paris
                         Saint-Germain and the Argentina national team. He can play as either a winger or attacking
                         midfielder.</p>
                 </div>
             </article>
             <article class="player">
                 <img src="images/players/player-8.png" alt="" class="player-photo">
                 <div class="player-details">
                     <h3>Kylian Mbappé</h3>
                     <p>Kylian Mbappé Lottin is a French professional footballer who plays as a forward for Ligue 1 club
                         Paris Saint-Germain and the France national team. Mbappé began his senior career with Ligue 1
                         club Monaco, making his professional debut in 2015, aged 16</p>
                 </div>
             </article>
             <article class="player">
                 <img src="images/players/player-9.png" alt="" class="player-photo">
                 <div class="player-details">
                     <h3>Mohamed Salah</h3>
                     <p>Mohamed Salah Hamed Mahrous Ghaly is an Egyptian professional footballer who plays as a forward
                         for Premier League club Liverpool and captains the Egypt national team. Considered one of the
                         best players in the world, he is known for his finishing, dribbling, and speed.</p>
                 </div>
             </article>
             <article class="player">
                 <img src="images/players/player-10.png" alt="" class="player-photo">
                 <div class="player-details">
                     <h3>Harry Kane</h3>
                     <p>Harry Edward Kane MBE is an English professional footballer who plays as a striker for Premier
                         League club Tottenham Hotspur and captains the England national team. Regarded as one of the
                         best strikers in the world, Kane is known for his prolific goalscoring record and ability to
                         link play.</p>
                 </div>
             </article>
             <article class="player">
                 <img src="images/players/player-11.png" alt="" class="player-photo">
                 <div class="player-details">
                     <h3>Kevin De Bruyne</h3>
                     <p>Kevin De Bruyne is a Belgian professional footballer who plays as a midfielder for Premier League
                         club Manchester City, where he is vice-captain, and the Belgium national team.</p>
                 </div>
             </article>
             <article class="player">
                 <img src="images/players/player-12.png" alt="" class="player-photo">
                 <div class="player-details">
                     <h3>Philippe Coutinho</h3>
                     <p>Philippe Coutinho Correia is a Brazilian professional footballer who plays as an attacking
                         midfielder or winger for Spanish club Barcelona and the Brazil national team. He is known for
                         his combination of vision, passing, dribbling and ability to conjure curving long-range strikes.
                     </p>
                 </div>
             </article>
         </section>

         <!-- highlightes section starts -->
         <section class="highlights">
             <div class=" item">
                 <div class="highlights-text">
                     <h2>All Highlights <br>Copa America 2021</h2>
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
             <h2>Copa America 2021 Final's Highlights</h2>
             <iframe src="https://www.youtube.com/embed/sDFr2Yzd-8s" title="YouTube video player" frameborder="0"
                 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                 allowfullscreen></iframe>

         </section>


     </main>

     <!-- footet starts -->
     <footer>
         <div class="footer">
             <div class="footer-logo"><img src="images/Logo.png" alt=""></div>
             <div class="footer-link">
                 <span><i class="fab fa-instagram"></i></span>
                 <span><i class="fab fa-dribbble"></i></span>
                 <span><i class="fab fa-twitter"></i></span>
                 <span><i class="fab fa-youtube"></i></span>
             </div>
             <p>Copyright &copy 2022 Football</p>
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