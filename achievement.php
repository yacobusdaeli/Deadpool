<?php
session_start();
if (isset($_SESSION["user"]) == false) {
    echo "
  <script> alert('Anda melakukan hal ilegal');
  document.location.href= 'login.php';
  </script>
  ";
    exit();
} else if (isset($_SESSION["admin"]) == false) {
    echo "
  <script> alert('Anda melakukan hal ilegal');
  document.location.href= 'login.php';
  </script>
  ";
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/achievement.css" />
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

    <div class="container-achieve">
        <div class="header-achieve">
            <h1>Achievement</h1>
        </div>
        <!-- Achievement Cards -->
        <div class="container-card-card">
            <!-- Achievement Card 1 -->
            <div class="card">
                <div class="card-img-card">
                    <!-- You can add an image or an icon here -->
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="content-desc-card">
                    <div class="desc-card-card">
                        <div class="header-desc-card">
                            <span>Achievement 1</span>
                        </div>
                        <p>Description of Achievement 1.</p>
                    </div>
                </div>
            </div>

            <!-- Achievement Card 2 -->
            <div class="card">
                <div class="card-img-card">
                    <!-- You can add an image or an icon here -->
                    <i class="fas fa-medal"></i>
                </div>
                <div class="content-desc-card">
                    <div class="desc-card-card">
                        <div class="header-desc-card">
                            <span>Achievement 2</span>
                        </div>
                        <p>Description of Achievement 2.</p>
                    </div>
                </div>
            </div>

            <!-- Achievement Card 3 -->
            <div class="card">
                <div class="card-img-card">
                    <!-- You can add an image or an icon here -->
                    <i class="fas fa-award"></i>
                </div>
                <div class="content-desc-card">
                    <div class="desc-card-card">
                        <div class="header-desc-card">
                            <span>Achievement 3</span>
                        </div>
                        <p>Description of Achievement 3.</p>
                    </div>
                </div>
            </div>

            <!-- Achievement Card 3 -->
            <div class="card">
                <div class="card-img-card">
                    <!-- You can add an image or an icon here -->
                    <i class="fas fa-award"></i>
                </div>
                <div class="content-desc-card">
                    <div class="desc-card-card">
                        <div class="header-desc-card">
                            <span>Achievement 4</span>
                        </div>
                        <p>Description of Achievement 4.</p>
                    </div>
                </div>
            </div>
            <!-- Achievement Card 3 -->
            <div class="card">
                <div class="card-img-card">
                    <!-- You can add an image or an icon here -->
                    <i class="fas fa-award"></i>
                </div>
                <div class="content-desc-card">
                    <div class="desc-card-card">
                        <div class="header-desc-card">
                            <span>Achievement 4</span>
                        </div>
                        <p>Description of Achievement 4.</p>
                    </div>
                </div>
            </div>
            <!-- Achievement Card 3 -->
            <div class="card">
                <div class="card-img-card">
                    <!-- You can add an image or an icon here -->
                    <i class="fas fa-award"></i>
                </div>
                <div class="content-desc-card">
                    <div class="desc-card-card">
                        <div class="header-desc-card">
                            <span>Achievement 4</span>
                        </div>
                        <p>Description of Achievement 4.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start footer  -->
    <div class="footer">
        <p>© 2023 Deadpool Project</p>
    </div>
    <!-- end footer  -->
</body>

</html>