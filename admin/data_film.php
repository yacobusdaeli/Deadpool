<?php
require '../method.php';
session_start();
if (!isset($_SESSION["admin"])) {
    echo "
    <script> alert('Anda melakukan hal ilegal');
    document.location.href= 'login.php';
    </script>
    ";
    exit();
}

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
    <style>
    a {
        text-decoration: none;
        color: black;
    }

    .container-fluid {
        display: flex;
        justify-content: center;
    }

    .link {
        text-decoration: none;
    }

    .link button {
        margin-bottom: 30px;
    }

    .container {
        margin: 70px;
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <h1>Halaman Film</h1>

            <a class="link" href="admin_home.php"><button>admin home </button></a>


            <a class="link" href="add_film.php"><button>Tambah Film</button></a>

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
                        <form method="post">
                            <button name="hapus" value="<?=$row['film']?>" type="submit">
                                Delete
                            </button>

                        </form>

                    </td>
                </tr>
                <?php $i++;?>
                <?php endforeach;?>
            </table>

        </div>
    </div>



</body>

</html>