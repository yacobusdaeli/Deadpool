<?php
require '../method.php';
session_start();
if (!isset($_SESSION["admin"])) {
    echo "
    <script> alert('Anda melakukan hal ilegal');
    document.location.href= 'login.php';
    </script>
    ";
    exit();
}
if (isset($_POST['add'])) {
    if (addFilm($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'data_film.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal ditambahkan');
        document.location.href = 'add_film.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD FILM</title>
</head>

<body>

    <form action="" method="post">
        <table>
            <tr>
                <td>Film</td>
                <td><input type="text" name="film"></td>
            </tr>
            <tr>
                <td>Trailer</td>
                <td><input type="text" name="trailer"></td>
            </tr>
            <tr>
                <td>Genre</td>
                <td><input type="text" name="genre"></td>
            </tr>
            <tr>
                <td>Director</td>
                <td><input type="text" name="director"></td>
            </tr>
            <tr>
                <td>Writers</td>
                <td><input type="text" name="writers"></td>
            </tr>
        </table>

        <textarea name="sinopsis" cols="70" rows="5"></textarea>

        <button style="margin-top: 30px;" type="submit" name="add">ADD</button>
    </form>

    <!-- Footer section -->
    <div class="footer">
        <p>© 2023 Deadpool Project</p>
    </div>
    <!-- End footer section -->
</body>

</html>