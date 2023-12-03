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
$query = "SELECT pemeran.fotocard,pemeran.id_tokoh,pemeran.nama_asli, pemeran.nama_tokoh, pemeran.foto FROM pemeran order by nama_asli asc";
$cast = tampilsemua($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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
            <h1>Halaman Cast</h1>
            <a class="link" href="admin_home.php">
                <button>Home</button>
            </a>

            <a class="link" href="add_cast.php">
                <button>Tambah Cast</button>
            </a>

            <table border="3" cell>
                <tr>
                    <th>Aksi</th>
                    <th>Foto Card</th>
                </tr>

                <?php foreach ($cast as $baris): ?>
                <tr>
                    <th style="display: flex">
                        <a href="edit_cast.php?id_tokoh=<?=$baris['id_tokoh']?>"
                            class="card-link"><button>Edit</button></a>

                        <form method="post">
                            <button name="hapus" value="<?=$baris['nama_tokoh']?>">Hapus</button>
                        </form>

                    </th>
                    <th>
                        <div class="card">
                        </div><img style="width : 160px" src="../fotocard/<?=$baris['fotocard']?>" alt="Photo 1">
                    </th>

                </tr>
                <?php endforeach?>

            </table>
        </div>

    </div>






    <!-- Start Content Cast -->
    <!-- Start Content Cast -->


</body>

<!-- JavaScript for toggling navbar on small screens -->
<script>
function toggleNavbar() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('show');
}
</script>


</html>