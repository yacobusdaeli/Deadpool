<?php
require '../method.php';
$query2 = "SELECT * FROM film";
$selectFilm = tampilsemua($query2);
$id = 9;
$query = "SELECT * FROM pemeran WHERE id_tokoh = $id";
$cast = tampilsemua($query)[0];

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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <img src="../foto/<?=$cast['foto']?>" alt="" />
</body>

</html>