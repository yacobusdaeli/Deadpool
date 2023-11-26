<?php
require 'method.php';
session_start();

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM role WHERE username = '$username'");

    if (mysqli_num_rows($query) === 1) {
        $row = mysqli_fetch_array($query);

        if ($password == $row["password"] && $row['role'] == 'user') {

            $_SESSION["user"] = true;
            header("Location: start.php");
            exit;
        } else if ($password == $row["password"] && $row['role'] == 'admin') {
            $_SESSION["admin"] = true;
            $_SESSION["user"] = true;
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
        alert('Tidak ada username ini');
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
    <title>Login</title>
</head>

<body>
    <h1>
        Login
    </h1>
    <form method="post">
        <table style="text-align:justify;">
            <tr>
                <th>Username</th>
                <th><input type="text" name="username"></th>
            </tr>
            <tr>
                <th>password</th>
                <th><input type="password" name="password"></th>
            </tr>
            <tr>
                <th>
                    <button name="login">login</button>
                </th>
            </tr>
        </table>
    </form>
</body>

</html>
