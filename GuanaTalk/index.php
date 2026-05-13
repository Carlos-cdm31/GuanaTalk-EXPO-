<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GuanaTalk</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="index.css">
</head>
<body>

<header class="navbar">
    <div class="logo">
        <img src="img/logo.png" alt="GuanaTalk Logo">
        <span>GuanaTalk</span>
    </div>
    <nav>
        <a href="index.html">Home</a>
        <a href="#">Favorite</a>
        <a href="#">About us</a>
    </nav>
    <div class="profile-dropdown">
        <button class="profile-btn">
            My Profile <i class="ri-arrow-down-s-line"></i>
        </button>
        <div class="dropdown-content">
            <a href="login.html">Login</a>
            <div class="divider"></div>
            <a href="register.html">Register</a>
        </div>
    </div>
</header>

<section class="hero">
  <div class="hero-text">
    <h1>Welcome to GuanaTalk</h1>
    <p>Learn about the culture and dialect of El Salvador</p>
  </div>
  <img class="hero-img" src="https://cdn-icons-png.flaticon.com/512/197/197565.png" alt="El Salvador">
</section>

<section class="cards">
  <div class="card pink">
    <i class="ri-chat-3-line"></i>
    <p>Words</p>
  </div>
  <div class="card green">
    <i class="ri-group-line"></i>
    <p>Traditions</p>
  </div>
  <div class="card orange">
    <i class="ri-book-open-line"></i>
    <p>Legends</p>
  </div>
  <div class="card blue">
    <i class="ri-lightbulb-line"></i>
    <p>Fun Facts</p>
  </div>
  <div class="card gray">
    <i class="ri-gamepad-line"></i>
    <p>Mini-games</p>
  </div>
</section>

<div class="funfact">
  <i class="ri-megaphone-line"></i>
  <span><b>Fun Fact:</b> Did you know the marble game is known in El Salvador as “chibolas”?</span>
</div>

<footer class="footer">
  <div onclick="location.href='index.html'"><i class="ri-home-5-line"></i><p>Home</p></div>
  <div><i class="ri-star-line"></i><p>Favorites</p></div>
  <div><i class="ri-book-2-line"></i><p>Lessons</p></div>
  <div onclick="location.href='login.html'"><i class="ri-user-line"></i><p>My Profile</p></div>
</footer>

</body>
</html>