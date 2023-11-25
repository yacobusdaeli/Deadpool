<?php
require '../method.php';
session_start();

$query = "SELECT*FROM film order by film asc";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAST</title>
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
            <th>Trailer</th>
            <th>Penghargaan</th>
            <th>Sinopsis</th>
            <th>Trailer</th>
        </tr>


        <?php $i = 1;?>
        <?php foreach ($film as $row): ?>
        <tr>
            <td><?=$i?></td>
            <td>
                <form method="post">


                    <button name=sabeb>
                        <a href="edit_film.php?id_film=<?=$row['id_film']?>">edit</a>
                    </button>

                    <button>
                        <a href="detail_film.php?id_film=<?=$row['id_film']?>">detail FILM</a>
                    </button>


                    <button name="hapus" value="<?=$row['film']?>" type="submit">
                        Delete
                    </button>
                </form>
            </td>
            <td><?=$row['film']?></td>
            <td><?=$row['sinopsis']?></td>
            <td><?=$row['trailer']?></td>
            <td><?=$row['penghargaan']?></td>

            <td>
                <iframe width="640" height="360" src="https://www.youtube.com/embed/<?=$row['trailer']?>"
                    frameborder="0" allowfullscreen>
                    <p><strong>Trailer:</strong></p>
                </iframe>

            </td>

        </tr>
        <?php $i++;?>
        <?php endforeach;?>
    </table>
</body>

</html>