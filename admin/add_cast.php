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

$query2 = "SELECT * FROM film";
$selectFilm = tampilsemua($query2);

if (isset($_POST['tambah'])) {
    if (addCast($_POST) > 0) {
        echo "
        <script>
        alert('Pemeran berhasil ditambahkan');
        document.location.href = 'data_cast.php';
        </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Add Cast</title>
    <!-- Tambahkan stylesheet atau link CSS yang dibutuhkan di sini -->
</head>

<body>
    <h2>Add New Cast</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nama_panjang">Full Name:</label><br>
        <input type="text" id="nama_panjang" name="nama_panjang"><br>

        <label for="nama_asli">Nick Name:</label><br>
        <input type="text" id="nama_asli" name="nama_asli"><br>

        <label for="nama_tokoh">Character Name:</label><br>
        <input type="text" id="nama_tokoh" name="nama_tokoh"><br>

        <label for="biografi">Biography:</label><br>
        <textarea id="biografi" name="biografi"></textarea><br>

        <label for="lahir">Born:</label><br>
        <input type="text" id="lahir" name="lahir"><br>

        <label for="negara">Citizenship:</label><br>
        <input type="text" id="negara" name="negara"><br>

        <label for="pekerjaan">Occupation:</label><br>
        <input type="text" id="pekerjaan" name="pekerjaan"><br>

        <label for="tahun_aktif">Years Active:</label><br>
        <input type="text" id="tahun_aktif" name="tahun_aktif"><br>

        <label for="id_film">Movie:</label><br>
        <select name="id_film">
            <?php foreach ($selectFilm as $select): ?>
            <option value="<?=$select['id_film'];?>"><?=$select['film'];?></option>
            <?php endforeach;?>
        </select><br>

        <label for="foto">Profile Picture:</label><br>
        <input type="file" id="foto" name="foto"><br>
        <label for="fotocard">Profile Picture:</label><br>
        <input type="file" id="foto" name="fotocard"><br>

        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>

</html>