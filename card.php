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

$id = $_GET['id_tokoh'];
$query = "SELECT * FROM pemeran WHERE id_tokoh = $id";
$cast = tampilsemua($query)[0];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="assets/css/navbar.css" />
    <link rel="stylesheet" href="assets/css/card.css" />
</head>

<body>
    <div class="container-card-card">
        <div class="card-img-card">
            <img src="assets/css/card.png" alt="Ryan Reynolds" />
        </div>

        <div class="content-card-card">
            <div class="header-desc-card">
                <span><?=$cast['nama_tokoh']?></span>
                <p><?=$cast['nama_asli']?></p>
            </div>
            <div class="content-desc">
                <div class="content-desc-card">
                    <table>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><?=$cast['nama_panjang']?></td>
                        </tr>
                        <tr>
                            <td>Born</td>
                            <td>:</td>
                            <td><?=$cast['lahir']?></td>
                        </tr>
                        <tr>
                            <td>Citizenship</td>
                            <td>:</td>
                            <td><?=$cast['negara']?></td>
                        </tr>
                        <tr>
                            <td>Occupations</td>
                            <td>:</td>
                            <td><?=$cast['pekerjaan']?></td>
                        </tr>
                        <tr>
                            <td>Years Active</td>
                            <td>:</td>
                            <td><?=$cast['tahun_aktif']?></td>
                        </tr>
                    </table>
                </div>
                <span class="desc-card-card">
                    <?=$cast['biografi']?>
                </span>
            </div>
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
    </div>

    <div class="footer">
        <p>© 2023 Deadpool Project</p>
    </div>
</body>

</html>