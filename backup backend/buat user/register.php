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
    <title>Register</title>
</head>

<body>
    <h1>register</h1>
    <form method="post">
        <table style="text-align:justify;">
            <tr>
                <th>Username</th>
                <th><input type="text" name="username"></th>
            </tr>
            <tr>
                <th>Email</th>
                <th><input type="email" name="email"></th>
            </tr>
            <tr>
                <th>password</th>
                <th><input type="password" name="password"></th>
            </tr>
            <tr>
                <th>confirm your password</th>
                <th><input type="password" name="password2"></th>
            </tr>
            <tr>
                <th>
                    <button name="register">register</button>
                </th>
            </tr>
        </table>
    </form>
</body>

</html>
