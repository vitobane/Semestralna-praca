<?php include('server.php') ?>
<!DOCTYPE html>
<head>
  <title>BAR PROFIL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="icon" href="favicon.png" type="png" sizes="32x32">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css">

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
  
<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">BAR</a><a class="navbar-brand">VÁŠ PROFIL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="ponuka.php">PONUKA</a></li>
        <li><a href="logout.php">ODHLÁSIŤ</a></li>
        <li class="dropdown">        
      </ul>
    </div>
  </div>
</nav>

<!-- UDAJE-->
<div class="container text-center">
    </br></br><h3 class="text-center">VAŠE ÚDAJE</h3>
    <div class="profil text-center">
        <h5><b>Meno:</b> <span><?php echo $_SESSION['username'] ?></span></h5>
        <h5><b>Priezvisko:</b> <span> <?php echo $rows['surname'];?> </span></h5>
        <h5><b>Email:</b> <span><?php echo $email; ?></span></h5>
        <h5><b>Datum registrácie:</b> <span><?php echo $_GET['RegisterDate'] ?></span></h5>
        <h5><b>Dátum posledného prihlasenia:</b> <span><?php echo $user->LastLoginDate ?></span></h5>
    </div>
</div>

<!-- ZMENA HESLA -->


<div class="profil text-center">
  <h3>ZMENA HESLA</h3>

  <form action="profile.php" method="post">
  <?php include('errors.php'); ?>
  <center>
    
    <div class="form-group">
      <label for="pwd">Staré Heslo:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Zadajte Staré Heslo" name="passwordOld">
    </div>
    <div class="form-group">
      <label for="pwd">Nové Heslo:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Zadajte Nové Heslo" name="password_1">
    </div>
    <div class="form-group">
      <label for="pwd">Zadajte Nové Heslo Znova:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Zadajte Nové Heslo Znova" name="password_2">
    </div>
    <button type="submit" class="btn btn-default"name="changePassword">Zmeniť Heslo</button>
  </form>
  </center>
</div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="HORE">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>® Bar pod Lipami </br>© 2020 by Pavol Štetka </p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>








