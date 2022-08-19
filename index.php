<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sociapa.Social</title>
    <link rel="icon" href="images2/favicon.png" sizes="32x32">
    <meta name="title" content="Sociapa.Social">
    <meta name="keywords" content="Sociapa.Social">
    <meta name="description" content="Sociapa.Social">
    <meta name="author" content="Sociapa.Social">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css2/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<header>
  <nav class="bg-grey" role="navigation">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">
        <img src="images2/logoSociapa.png" alt="Logo" class="responsive-img">
      </a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down ulHomeMenu">
        <li><a href="login.php" class="waves-effect waves-light ">LOGIN</a></li>
        <li><a href="signup.php" class="waves-effect waves-light ">SIGN UP</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="login.php">Login</a></li>
    <li><a href="signup.php">Sign Up</a></li>
  </ul>
</header>
 <div class="container">
   <div class="row">
     <div class="col s12 center">
       <h1 class="theOnly Poppins-SemiBold">The Only Social Link You’ll Ever Need</h1>
       <p class="cntAudience black-text2">Connect audiences to all of your content with just one link</p>
       <p><a class="alreadyOn black-text2" href="login.php">Already on Linktree? Log in</a></p> 
       <a href="signup.php" class="btn getStarted hoverable waves-effect waves-light">GET STARTED FOR FREE</a>
     </div>
   </div>
 </div>
 <div class="socialAnimator">
   <div class="row">
     <div class="col s3 center">
       <img src="images2/fbHome.png" alt="" class="responsive-img fbHome">
     </div>
     <div class="col s3 center"> 
        <img src="images2/twHome.png" alt="" class="responsive-img twHome">
      </div>
     <div class="col s3 center"> 
        <img src="images2/lnHome.png" alt="" class="responsive-img lnHome">
      </div>
     <div class="col s3 center"> 
        <img src="images2/igHome.png" alt="" class="responsive-img igHome">
      </div>
   </div>
 </div>
<?php include('footer.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="js2/script.js" type="text/javascript"></script>
</body>
</html>