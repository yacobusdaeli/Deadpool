<?php
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
// else if (!$_SESSION["admin"]) {
//     echo "
//     <script>
//         alert('Anda melakukan hal ilegal');
//         document.location.href= 'login.php';
//     </script>
//     ";
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
</head>

<body>

    <div class="overlay-container">
        <img class="background-image" src="assets/css/background.jpg" alt="Background Image">
        <div class="overlay"></div>
        <div class="content-img">
            <!-- Your content goes here -->
            <img class="overlay-image" src="assets/css/home.png" alt="Overlay Image">
        </div>
        <div class="slicing"></div>
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

    <!-- Start description -->
    <div class="container-desc">
        <div class="main">
            <h1>Hi, Im Deadpool !</h1>
            <p>"Deadpool is an American superhero film based on the Marvel Comics character of the same name. The film
                is the eighth installment in the X-Men film series."</p>
        </div>
        <div class="container-button">

            <button type="submit" class="button-trailer">
                <a href="synopsis.php">
                    <i class="fa-solid fa-play fa-lg" style="color: #ffffff;"></i>
                    <span>Read More</span>
                </a>
        </div>
    </div>

    <!-- End Description  -->

    <!-- Start footer  -->
    <div class="footer">
        <p> © 2023 Deadpool Project</p>
    </div>
    <!-- end footer  -->
</body>

</html>