<?php
require '../method.php';
session_start();
if (isset($_SESSION["admin"]) == false) {
    echo "
    <script> alert('Anda melakukan hal ilegal');
    document.location.href= '../login.php';
    </script>
    ";
    exit();
}

if (isset($_POST['edit'])) {
    if (editFilm($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil diubah');
        document.location.href = 'data_film.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data berhasil diubah');
        document.location.href = 'data_film.php';
        </script>
        ";
    }
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
    <title>EDIT FILM</title>
</head>

<body>



    <form action="" method="post">
        <table>
            <input type="hidden" name="id_film" value="<?=$film['id_film']?>">
            <input type="hidden" name="film_lama" value="<?=$film['film']?>">

            <tr>
                <td>Film</td>
                <td>
                    <input type="text" name="film" value="<?=$film['film']?>">
                </td>
            </tr>

            <tr>
                <td>Trailer</td>
                <td>
                    <input type="text" name="trailer" value="<?=$film['trailer']?>">
                </td>
            </tr>

            <tr>
                <td>Genre</td>
                <td>
                    <input type="text" name="genre" value="<?=$film['genre']?>">
                </td>
            </tr>
            <tr>
                <td>Director</td>
                <td>
                    <input type="text" name="director" value="<?=$film['director']?>">
                </td>
            </tr>

            <tr>
                <td>Writers</td>
                <td>
                    <input type="text" name="writers" value="<?=$film['writers']?>">
                </td>
            </tr>

        </table>

        </div>

        <textarea name="sinopsis" id="" cols="70" rows="5"><?=$film['sinopsis']?></textarea>

        <button style="margin-top:30px" type="submit" name="edit">EDIT</button>
    </form>

    </div>
    </div>

    <!-- Navbar section -->

    <!-- End navbar section -->


    <!-- End Description  -->

    <!-- Start footer  -->
    <div class="footer">
        <p> © 2023 Deadpool Project</p>
    </div>
    <!-- end footer  -->
</body>

</html>