<?php
require 'method.php';
session_start();
if (!isset($_SESSION["user"])) {
    echo "
  <script> alert('Anda melakukan hal ilegal');
  document.location.href= 'login.php';
  </script>
  ";
    exit();
} else if (!isset($_SESSION["admin"])) {
    echo "
  <script> alert('Anda melakukan hal ilegal');
  document.location.href= 'login.php';
  </script>
  ";
    exit();
}

$query1 = "SELECT * FROM film WHERE id_film= 6";
$satu = tampilsemua($query1)[0];

$query2 = "SELECT * FROM film WHERE id_film=7";
$dua = tampilsemua($query2)[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/synopsis.css" />
</head>

<body>
    <div class="overlay-container">
        <img class="background-image" src="assets/css/background.jpg" alt="Background Image" />
        <div class="overlay"></div>
        <div class="slicing"></div>
    </div>
    <!-- Navbar section -->
    <div class="navbar-section">
        <div class="navbar">
            <div class="logo-container">
                <img class="logo" src="assets/css/logo.png" alt="Logo" />
            </div>
            <ul class="nav-links">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="cast.php">Cast</a></li>
                <li><a href="achievement.php">Achievement</a></li>
                <li><a href="synopsis.php">Synopsis</a></li>

                <!-- Add more navigation links as needed -->
            </ul>
        </div>
    </div>
    <!-- End navbar section -->

    <!-- Start content Synopsis -->
    <div class="container-sinopsis">
        <div class="header-sinopsis">
            <span>SYNOPSIS</span>
        </div>
        <div class="card-sinopsis">
            <div class="image-sinopsis">
                <img src="assets/css/sinopsis.png" alt="Sinopsis Deadpool" />
            </div>
            <div class="content-sinopsis" style="margin-left:20px;">
                <span class="head-desc"><?=$satu['film']?></span>
                <span class="desc-sinopsis">
                    <?=$satu['sinopsis']?>...
                    <a href="deadpool.php?id_film=<?=$satu['id_film']?>">Read More</a></span>
            </div>
        </div>
        <div class="card-sinopsis">
            <div class="content-sinopsis" style="margin-right:20px;">
                <span class="head-desc"><?=$dua['film']?></span>
                <span class="desc-sinopsis">
                    <?=$dua['sinopsis']?>
                    ... <a href="deadpool.php?id_film=<?=$dua['id_film']?>">Read More</a></span>
            </div>
            <div class="image-sinopsis">
                <img src="assets/css/sinopsis2.jpg" alt="Sinopsis Deadpool" />
            </div>
        </div>
    </div>

    <!-- End Content Synopsis  -->

    <!-- Start footer  -->
    <div class="footer">
        <p>© 2023 Deadpool Project</p>
    </div>
    <!-- end footer  -->
</body>

</html>