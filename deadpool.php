<?php
require 'method.php';
session_start();
if (!$_SESSION["user"] and !$_SESSION["admin"]) {
    echo "
    <script>
        alert('Anda melakukan hal ilegal');
        document.location.href= 'login.php';
    </script>
    ";
    exit();
}

$id = $_GET['id_film'];
$query = "SELECT*FROM film WHERE id_film=$id";
$film = tampilsemua($query)[0];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/synopsisdetail.css">
</head>

<body>

    <div class="container-card-card">
        <div class="card-img-card">
            <span><?=$film['film']?></span>
            <img src="assets/css/deadpool1.jpeg" alt="Ryan Reynolds">
        </div>
        <div class="content-card-card">
            <div class="content-desc-card">
                <table>
                    <tr>
                        <td>Genre</td>
                        <td>:</td>
                        <td><?=$film['genre']?></td>
                    </tr>
                    <tr>
                        <td>Director</td>
                        <td>:</td>
                        <td><?=$film['director']?></td>
                    </tr>
                    <tr>
                        <td>Writers</td>
                        <td>:</td>
                        <td><?=$film['writers']?></td>
                    </tr>

                </table>
            </div>
            <span class="desc-card-card">
                <?=$film['sinopsis']?>
            </span>
        </div>
    </div>

    <!-- Navbar section -->
    <div class="navbar-section">
        <div class="navbar">
            <div class="logo-container">
                <img class="logo" src="assets/css/logo.png" alt="Logo">
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


    <!-- End Description  -->

    <!-- Start footer  -->
    <div class="footer">
        <p> © 2023 Deadpool Project</p>
    </div>
    <!-- end footer  -->
</body>

</html>