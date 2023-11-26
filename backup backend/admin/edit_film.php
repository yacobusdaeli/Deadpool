<?php
require '../method.php';
session_start();

$id = $_GET['id_film'];
$query2 = "SELECT * FROM film";
$selectFilm = tampilsemua($query2);
$query = "SELECT*FROM film WHERE id_film = $id";
$film = tampilsemua($query)[0];

if (isset($_POST['edit'])) {
    if (editFilm($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil ditampilkan');
        document.location.href = 'data_film.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('tidak ada data yang diubah');
        document.location.href = 'data_film.php';
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
    <title>EDIT CAST</title>
</head>

<body>
    <h1>EDIT FILM</h1>
    <form method="post" enctype="multipart/form-data">
        <table style="text-align:justify;">
            <input type="hidden" name="id_film" value="<?=$film['id_film']?>">
            <input type="hidden" name="nama_film_lama" value="<?=$film['film']?>">


            <tr>
                <th>film</th>
                <th>
                    <input type="text" name="film" value="<?=$film['film']?>">
                </th>
            </tr>
            <tr>
                <th>Trailer</th>
                <th>
                    <input type=" text" name="trailer" value="<?=$film['trailer']?>">
                </th>
            </tr>



            <tr>
                <th>Sinopsis</th>
                <th><textarea name="sinopsis" value="<?=$film['sinopsis']?>" cols="40"
                        rows="30"><?=$film['sinopsis']?></textarea></th>
            </tr>
            <tr>
                <th>Penghargaan</th>
                <th><textarea name="penghargaan" id="" cols="40" rows="10"
                        value="<?=$film['penghargaan']?>"><?=$film['penghargaan']?></textarea>
                </th>
            </tr>


            <tr>
                <th>
                    <button name="edit">ubah</button>
                </th>
            </tr>
        </table>
    </form>
</body>

</html>