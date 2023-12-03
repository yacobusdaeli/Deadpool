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
global $conn;

$query = "SELECT*FROM role ORDER BY role ASC";
$user = tampilsemua($query);

if (isset($_POST['hapus'])) {
    $delete = $_POST['hapus'];
    $query2 = "DELETE FROM role WHERE username='$delete'";
    mysqli_query($conn, $query2);
    header("Location: admin_home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
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

            <h1>Halaman admin</h1>

            <a class="link" href="data_cast.php"><button>data cast</button></a>


            <a class="link" href="data_film.php"><button>data film</button></a>

            <table border="3" cellpadding="3" cellspacing="10">
                <tr>
                    <th>No</th>
                    <!-- <th>Aksi</th> -->
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>


                <?php $i = 1?>
                <?php foreach ($user as $row): ?>
                <tr>
                    <td><?=$i?></td>
                    <!-- <form method="post">
                        <td>
                            <button name="hapus" value="<?=$row['username']?>">
                                hapus
                            </button>
                        </td>
                    </form> -->
                    <td><?=$row['username']?></td>
                    <td><?=$row['email']?></td>

                    <td><?=$row['role']?></td>
                </tr>
                <?php $i++?>
                <?php endforeach;?>

            </table>
        </div>
    </div>
</body>

</html>