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
</head>
<body>
  <?php include('navbar.php'); ?>
 <div class="container viewLink">
   <div class="row">
     <div class="col s12 m12 l1 xl4"></div>
     <div class="col s12 m12 l10 xl4 center">
        <img src="images2/logoSociapa.png" alt="Logo" class="responsive-img logo">
        <form class="insertForm">
          <div class="row">
            <div class=" col s12 ">
              <a id="" class="btn facebook-bgcolor hoverable" name="facebook" href="https://www.facebook.com/<?php $fbusername ?>"><i class="fab fa-facebook white-text"></i> Parvez</a>
            </div>
          </div>
          <div class="row">
            <div class=" col s12">
            <a id="" class="btn instagram-bgcolor hoverable brown-text text-darken-4" name="instagram" href="https://www.instagram.com/<?php $insusername ?>"><i class="fab fa-instagram white-text"></i> Parvez</a>
            </div>
          </div>
          <div class="row">
            <div class=" col s12">
            <a id="" class="btn linkedin-bgcolor hoverable" name="linkedin" href="https://www.linkedin.com/<?php $lnusername ?>"><i class="fab fa-linkedin white-text"></i> Parvez</a>
            </div>
          </div>
          <div class="row">
            <div class=" col s12">
            <a id="" class="btn twitter-bgcolor hoverable" name="twitter" href="https://www.twitter.com/<?php $twusername ?>"><i class="fab fa-twitter white-text"></i> Parvez</a>
            </div>
          </div>
         
        </form>
     </div>
     <div class="col s12 m12 l1 xl4"></div>
   </div>
 </div>
  <?php include('footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js2/script.js" type="text/javascript">
    </script>
</body>
</html>