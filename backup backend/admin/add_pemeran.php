<?php
require '../method.php';
session_start();

$query = "SELECT*FROM film";
$film = tampilsemua($query);
if (isset($_POST['tambah'])) {
    if (addCast($_POST) > 0) {
        echo "
        <script>
        alert('Pemeran berhasil ditampilkan');
        document.location.href = 'data_cast.php';
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
    <title>ADD CAST</title>
</head>

<body>
    <h1>Tambah Pemeran</h1>
    <form method="post" enctype="multipart/form-data">
        <table style="text-align:justify;">
            <tr>
                <th>Nama</th>
                <th><input type="text" name="nama_asli"></th>
            </tr>
            <tr>
                <th>Karakter</th>
                <th><input type="text" name="nama_tokoh"></th>
            </tr>
            <tr>
                <th>Biografi</th>
                <th><textarea name="biografi" id="" cols="40" rows="10"></textarea></th>
            </tr>
            <tr>
                <th>film</th>
                <th>
                    <select name="id_film">
                        <?php foreach ($film as $row): ?>
                        <option value="<?=$row['id_film']?>">
                            <?=$row['film']?>
                        </option>
                        <?php endforeach;?>
                    </select>
                </th>
            </tr>
            <tr>
                <th>Photo</th>
                <th><input type="file" name="foto"></th>
            </tr>
            <tr>
                <th>
                    <button type="submit" name="tambah">tambah</button>
                </th>
            </tr>
        </table>
    </form>
</body>

</html>