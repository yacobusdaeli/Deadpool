<?php
require '../method.php';
session_start();

$id = $_GET['id_tokoh'];
$query2 = "SELECT * FROM film";
$selectFilm = tampilsemua($query2);
$query = "SELECT*FROM pemeran WHERE id_tokoh = $id";
$film = tampilsemua($query)[0];

if (isset($_POST['edit'])) {
    if (editCast($_POST) > 0) {
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
    <title>EDIT CAST</title>
</head>

<body>
    <h1>EDIT Pemeran</h1>
    <form method="post" enctype="multipart/form-data">
        <table style="text-align:justify;">
            <input type="hidden" name="id_tokoh" value="<?=$film['id_tokoh']?>">
            <input type="hidden" name="fotoLama" value="<?=$film['foto']?>">
            <tr>
                <th>Nama</th>
                <th><input type="text" name="nama_asli" value="<?=$film['nama_asli']?>"></th>

                <th rowspan="6">
                    <img style="width:170px; height: 300px; object-fit: contain;" src="../foto/<?=$film['foto']?>"
                        alt="">
                </th>
            </tr>
            <tr>
                <th>Karakter</th>
                <th><input type="text" name="nama_tokoh" value="<?=$film['nama_tokoh']?>"></th>
            </tr>
            <tr>
                <th>Biografi</th>
                <th><textarea name="biografi" id="" cols="40" rows="10" value="<?=$film['biografi']?>"></textarea></th>
            </tr>
            <tr>
                <th>film</th>


                <th><select name="id_film">

                        <?php foreach ($selectFilm as $select): ?>
                        <option value="<?=$select['id_film'];?>">
                            <?=$select['film'];?>
                        </option>
                        <?php endforeach;?>

                    </select></th>
            </tr>


            <tr>
                <th>Photo</th>
                <th><input type="file" name="foto">
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