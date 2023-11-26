<?php
require '../method.php';
session_start();

$query = "SELECT pemeran.id_tokoh,pemeran.nama_asli, pemeran.nama_tokoh, pemeran.foto, pemeran.biografi, film.film FROM pemeran INNER JOIN film ON pemeran.id_film=film.id_film order by film asc";
$cast = tampilsemua($query);

if (isset($_POST['hapus'])) {
    $delete = $_POST['hapus'];
    $query2 = "DELETE FROM pemeran WHERE nama_asli='$delete'";
    mysqli_query($conn, $query2);
    header("Location: data_cast.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAST</title>
</head>

<body>
    <h1>Halaman cast</h1>
    <button>
        <a href="admin_home.php">admin home</a>
    </button>
    <button>
        <a href="add_pemeran.php">Tambah Cast</a>
    </button>
    <table border="3" cellpadding="3" cellspacing="5">
        <tr>
            <th>No</th>
            <th>Action</th>
            <th>Name</th>
            <th>Character</th>
            <th>Film</th>
            <th>Foto</th>
            <th>Biografi</th>
        </tr>


        <?php $i = 1;?>
        <?php foreach ($cast as $row): ?>
        <tr>
            <td><?=$i?></td>
            <td>
                <form method="post">


                    <button>
                        <a href="edit_cast.php?id_tokoh=<?=$row['id_tokoh']?>">edit</a>
                    </button>


                    <button name="hapus" value="<?=$row['nama_asli']?>" type="submit">
                        Delete
                    </button>
                </form>
            </td>
            <td><?=$row['nama_asli']?></td>
            <td><?=$row['nama_tokoh']?></td>
            <td><?=$row['film']?></td>
            <td><img style="width:170px; height: 300px; object-fit: contain;" src="../foto/<?=$row['foto']?>"></td>
            <td><?=$row['biografi']?></td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>
    </table>
</body>

</html>