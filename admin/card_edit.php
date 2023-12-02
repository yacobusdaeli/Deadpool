<?php
require '../method.php';
session_start();

$query2 = "SELECT * FROM film";
$selectFilm = tampilsemua($query2);
$id = $_GET['id_tokoh'];
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/home.css" />
    <link rel="stylesheet" href="../assets/css/navbar.css" />
    <link rel="stylesheet" href="../assets/css/card.css" />
</head>

<body>
    <input type="hidden" name="id_tokoh" value="<?=$cast['id_tokoh']?>">
    <input type="hidden" name="fotoLama" value="<?=$film['foto']?>">
    <div class="container-card-card">
        <div class="card-img-card" style="display: flex;">




            <div class="card">
                <img style="width: 130px" src="../assets/css/card1.jpg" alt="Photo 1">
            </div>
            <img src="../assets/css/card.png" alt="Ryan Reynolds" />

        </div>


        <div class="content-card-card">
            <div class="header-desc-card">
                <span>Edit</span>
            </div>
            <div class="content-desc">
                <div class="content-desc-card">
                    <form action="" method="post">
                        <table>
                            <tr>
                                <td>
                                    <p style="color:white;">Chose Photo Card</p>
                                </td>
                                <td>:</td>
                                <td><input style="color:white;" type="file" name="foto">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="color:white;">Chose Photo Profile</p>
                                </td>
                                <td>:</td>
                                <td><input style="color:white;" type="file" name="foto">
                                </td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td><input style="background-color: grey;" type="text" name="nama_panjang"
                                        value="<?=$cast['nama_panjang']?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Nickname</td>
                                <td>:</td>
                                <td><input style="background-color: grey;" type="text" name="nama_asli"
                                        value="<?=$cast['nama_asli']?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Character</td>
                                <td>:</td>
                                <td><input style="background-color: grey;" type="text" name="nama_tokoh"
                                        value="<?=$cast['nama_tokoh']?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Born</td>
                                <td>:</td>
                                <td><input style="background-color: grey;" type="text" name="lahir"
                                        value="<?=$cast['lahir']?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Citizenship</td>
                                <td>:</td>
                                <td><input style="background-color: grey;" type="text" name="negara"
                                        value="<?=$cast['negara']?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Occupations</td>
                                <td>:</td>
                                <td><input style="background-color: grey;" type="text" name="pekerjaan"
                                        value="<?=$cast['pekerjaan']?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Years Active</td>
                                <td>:</td>
                                <td><input style="background-color: grey;" type="text" name="tahun_aktif"
                                        value="<?=$cast['tahun_aktif']?>">
                                </td>
                            </tr>
                            <tr>
                                <select name="id_film">

                                    <?php foreach ($selectFilm as $select): ?>
                                    <option value="<?=$select['id_film'];?>">
                                        <?=$select['film'];?>
                                    </option>
                                    <?php endforeach;?>

                                </select>
                            </tr>
                        </table>
                    </form>
                </div>
                <span class="desc-card-card">
                    <textarea name="biografi" style="background-color: grey;" value="<?=$cast['biografi']?>" id=""
                        cols="70" rows="5"><?=$cast['biografi']?></textarea>
                </span>
            </div>
            <button style="margin-top: 10px; margin-bottom:50px;" name="edit">Edit</button>
        </div>

        <!-- Navbar section -->
        <!-- <div class="navbar-section">
            <div class="navbar">
                <div class="logo-container">
                    <img class="logo" src="assets/css/logo.png" alt="Logo" />
                </div>
                <ul class="nav-links">
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="cast.php">Cast</a></li>
                    <li><a href="achievement.php">Achievement</a></li>
                    <li><a href="synopsis.php">Synopsis</a></li> -->

        <!-- Add more navigation links as needed -->
        <!-- </ul>
            </div>
        </div> -->
    </div>

    <div class="footer">
        <p>© 2023 Deadpool Project</p>
    </div>
</body>

</html>