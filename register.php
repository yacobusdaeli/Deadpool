<?php
require 'method.php';
session_start();

if (isset($_POST['register'])) {
    if (register($_POST) > 0) {
        echo "
        <script>
        alert('akun berhasil di buat');
        document.location.href = 'login.php';
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
    <title>Tampilan Register</title>
</head>
<div class="logo-image-register">
    <img src="/assets/css/register-image.png" alt="Deadpool Smiley">

    <div class="login-container" style="margin-bottom: 30px;">
        <div class="login-header">
            <h1>Sign Up</h1>
        </div>

        <form method="post">
            <div class="form-group">
                <label for="username"></label>
                <input type="username" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="email"></label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="password"></label>
                <input type="password" id="password" name="password2" placeholder="Confirm password" required>
            </div>

            <div class="sign-up-link">
                <p>Already have an accout ? <a href="login.php">Login</a></p>
            </div>

            <button type="submit" class="login-button" name="register">Register</button>
        </form>
    </div>
</div>

<body>

</body>

</html>