<?php
require '../method.php';
session_start();

if (isset($_POST['tambah'])) {
    if (addFilm($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil di tambahkan');
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
    <title>ADD FILM</title>
</head>

<body>
    <h1>Tambah FILM</h1>
    <form method="post" enctype="multipart/form-data">
        <table style="text-align:justify;">
            <tr>
                <th>nama film</th>
                <th><input type="text" name="nama_film"></th>
            </tr>
            <tr>
                <th>trailer</th>
                <th><input type="text" name="trailer"></th>
            </tr>
            <tr>
                <th>Sinopis</th>
                <th><textarea name="sinopsis" id="" cols="40" rows="10"></textarea></th>
            </tr>

            <tr>
                <th>penghargaan</th>
                <th><textarea name="penghargaan" id="" cols="40" rows="10"></textarea></th>
            </tr>
            <!-- <tr>
                <th>Photo</th>
                <th><input type="file" name="foto"></th>
            </tr> -->

            <tr>
                <th>
                    <button name="tambah">tambah</button>
                </th>
            </tr>
        </table>
    </form>
</body>

</html>
