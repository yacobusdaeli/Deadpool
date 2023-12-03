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

$query = "SELECT pemeran.id_tokoh,pemeran.nama_asli, pemeran.nama_tokoh, pemeran.fotocard FROM pemeran order by nama_asli asc";
$cast = tampilsemua($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cast.css">
</head>

<body>

    <div class="overlay-container">
        <img class="background-image" src="assets/css/background.jpg" alt="Background Image">
        <div class="overlay"></div>
        <div class="slicing"></div>
    </div>

    <!-- Navbar section -->
    <div class="navbar-section">
        <div class="navbar">
            <div class="logo-container">
                <img class="logo" src="assets/css/logo.png" alt="Logo">

            </div>

            <!-- Toggle button for small screens -->
            <div class="toggle-btn" onclick="toggleNavbar()">
                <i class="fas fa-bars"></i>
            </div>

            <ul class="nav-links">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="cast.php">Cast</a></li>
                <li><a href="achievement.php">Achievement</a></li>
                <li><a href="synopsis.php">Synopsis</a></li>
            </ul>
        </div>
    </div>
    <!-- End navbar section -->

    <!-- Start Content Cast -->
    <!-- Start Content Cast -->
    <div class="header-cast">
        <h1>THE CAST</h1>

        <div class="card-container">

            <?php foreach ($cast as $baris): ?>
            <!-- Card 1 -->
            <a href="card.php?id_tokoh=<?=$baris['id_tokoh']?>" class="card-link">
                <div class="card">
                    <img src="fotocard/<?=$baris['fotocard']?>" alt="Photo 1">
                    <p><?=$baris['nama_asli']?></p>
                    <p><?=$baris['nama_tokoh']?></p>
                </div>
            </a>
            <?php endforeach?>

        </div>
    </div>
    <!-- End Content Cast -->

    <!-- End Content Cast -->

    <!-- Start footer  -->
    <div class="footer">
        <p> © 2023 Deadpool Project</p>
    </div>
    <!-- End footer  -->
</body>

<!-- JavaScript for toggling navbar on small screens -->
<script>
function toggleNavbar() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('show');
}
</script>


</html>