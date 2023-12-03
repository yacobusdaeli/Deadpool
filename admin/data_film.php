<?php
require '../method.php';
session_start();

$query = "SELECT film.film, film.id_film FROM film order by film asc";
$film = tampilsemua($query);

if (isset($_POST['hapus'])) {
    $delete = $_POST['hapus'];
    $query2 = "DELETE FROM film WHERE film='$delete'";
    mysqli_query($conn, $query2);
    header("Location: data_film.php");
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
    <title>Data FILM</title>
</head>

<body>
    <h1>Halaman Film</h1>
    <button>
        <a href="admin_home.php">admin home</a>
    </button>
    <button>
        <a href="add_film.php">Tambah Film</a>
    </button>
    <table border="3" cellpadding="3" cellspacing="5">
        <tr>
            <th>No</th>
            <th>Action</th>
            <th>Film</th>
            <th>Hapus</th>
        </tr>


        <?php $i = 1;?>
        <?php foreach ($film as $row): ?>
        <tr>
            <td><?=$i?></td>
            <td>
                <form method="post">


                    <button>
                        <a href="edit_film.php?id_film=<?=$row['id_film']?>">edit</a>
                    </button>

                    <button>
                        <a href="detail_film.php?id_film=<?=$row['id_film']?>">detail FILM</a>
                    </button>


                </form>
            </td>
            <td><?=$row['film']?></td>
            <td>

                <button name="hapus" value="<?=$row['film']?>" type="submit">
                    Delete
                </button>
            </td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>
    </table>


</body>

</html>