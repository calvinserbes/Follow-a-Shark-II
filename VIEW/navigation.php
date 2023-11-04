<link rel="stylesheet" href="styles/navigation.css">
<?php include_once "assets/fonts/font.php";?>

<nav class="navigation">
    <div class="nav-items left">
        <a href="home.php" class="nav_link">Home</a>
        <a href="shop.php" class="nav_link">Shop</a>
        <a href="#about_us" class="nav_link">About us</a>
        <a href="cart.php">
          <img src="assets/images/basket.svg" alt="shopping basket icon" class="basket">
        </a>
    </div>
    <div class="center">
        <img src="assets/images/logo_linear.svg" alt="Logo" class="logo">
    </div>
    <?php
    if (isset($_SESSION['username'])) {
       echo '<a class="nav_link right nav-items btn" href="profil.php">
            My Profil
        </a>';
    } else {
       echo '<a class="nav_link right nav-items btn" href="register.php">
            Login
        </a>';
    }
    ?>
    <img class="burger" src="assets/images/menu-btn.png" alt="Menu hamburger">
  </nav>
      
