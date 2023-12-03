<?php
require 'method.php';
session_start();
if (isset($_SESSION['user'])) {
    header("Location: homepage.php");
    exit();
}
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM role WHERE email = '$email'");

    if (mysqli_num_rows($query) === 1) {
        $row = mysqli_fetch_array($query);

        if ($password == $row["password"] && $row['role'] == 'user') {
            $_SESSION['admin'] = false;
            $_SESSION['user'] = true;
            header("Location: homepage.php");
            exit;
        } else if ($password == $row["password"] && $row['role'] == 'admin') {
            $_SESSION['admin'] = true;
            header("Location: admin/admin_home.php");
            exit;
        } else {
            echo "
            <script>
            alert('password anda salah');
            </script>
            ";
        }

    } else {
        echo "
        <script>
        alert('Tidak ada email ini');
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title>Tampilan Login</title>
</head>
<div class="logo-image">
    <img src="/assets/css/login-image.png" alt="Deadpool Smiley">

    <div class="login-container">
        <div class="login-header">
            <h1>LOGIN</h1>
        </div>

        <form method="post">
            <div class="form-group">
                <label for="email"></label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>

            <div class="sign-up-link">
                <p>Don't have an account? <a href="register.php">Sign up</a></p>
            </div>

            <button type="submit" class="login-button" name="login">Login</button>
        </form>

    </div>
</div>

</body>

</html>