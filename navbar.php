<?php
$name='Imran';
 
?>
<header>
<nav class="bg-grey" role="navigation">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">
        <img src="images2/logoSociapa.png" alt="Logo" class="responsive-img">
      </a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down ulHomeMenu">
        <li>Hello <?php echo $name ?></li>
        <li><a href="login.php" class="waves-effect waves-light ">LOGOUT</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="login.php">Login</a></li>
    <li><a href="signup.php">Sign Up</a></li>
  </ul>

</header>
