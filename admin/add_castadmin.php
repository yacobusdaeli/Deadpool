<?php
require '../method.php';
session_start();
if (!$_SESSION["admin"]) {
    echo "
    <script> alert('Anda melakukan hal ilegal');
    document.location.href= '../login.php';
    </script>
    ";
    exit();
}

$query2 = "SELECT * FROM film";
$selectFilm = tampilsemua($query2);

if (isset($_POST['tambah'])) {
    if (addCast($_POST) > 0) {
        echo "
        <script>
        alert('Pemeran berhasil ditambahkan');
        document.location.href = 'data_castadmin.php';
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
    <title>Admin page | ADD CAST</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/adminpage.css">
</head>

<body>

    <!-- Start Sidebar -->
    <nav>
        <ul>
            <!-- Icon  -->
            <li>
                <a href="homeadmin.php">
                    <div class="logo-image">
                        <img src="../assets/css/profil-img.jpg" alt=""></img>
                    </div>
                    <div class="logo-text">
                        <span><?=$_SESSION['username']?></span>
                        <span>[Admin]</span>
                    </div>
                </a>
            </li>
            <div class="content-sidebar">
                <li>
                    <a href="data_castadmin.php" class="text-cast">
                        <i class="fa-solid fa-user-pen"></i>
                        <span class="nav-item">Add Cast</span>
                    </a>
                </li>
                <li>
                    <a href="userdata.php">
                        <i class="fa-regular fa-clipboard"></i>
                        <span class="nav-item">User Data</span>
                    </a>
                </li>
                <li>
                    <a href="changepassword.php">
                        <i class="fa-solid fa-lock"></i>
                        <span class="nav-item">Change Password</span>
                    </a>
                </li>
                <li>
                    <a href="../logout.php" class="logout">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span class="nav-item">{Logout}</span>
                    </a>
                </li>
            </div>
        </ul>
    </nav>

    <!-- End Side Bar -->

    <!-- Start content  -->
    <div class="container">
        <div class="content-header-cast">
            <h1>ADD CAST</h1>
        </div>
        <div class="table-data">
            <form method="post" enctype="multipart/form-data">
                <table cellspacing="10">
                    <tr>
                        <th> Full Name</th>
                        <th>:</th>
                        <th><input type="text" name="nama_panjang">
                        </th>
                    </tr>
                    <tr>
                        <th> Nickname</th>
                        <th>:</th>
                        <th><input type="text" name="nama_asli">
                        </th>
                    </tr>
                    <tr>
                        <th>Character</th>
                        <th>:</th>
                        <th><input type="text" name="nama_tokoh">
                        </th>
                    </tr>
                    <tr>
                        <th>Born</th>
                        <th>:</th>
                        <th><input type="text" name="lahir">
                        </th>
                    </tr>
                    <tr>
                        <th>Born</th>
                        <th>:</th>
                        <th><input type="text" name="lahir">
                        </th>
                    </tr>

                    <tr>
                        <th>Citizenship</th>
                        <th>:</th>
                        <th><input type="text" name="negara">
                        </th>
                    </tr>
                    <tr>
                        <th>Occupation</th>
                        <th>:</th>
                        <th><input type="text" name="pekerjaan">
                        </th>
                    </tr>
                    <tr>
                        <th>Years Active:</th>
                        <th>:</th>
                        <th><input type="text" name="tahun_aktif">
                        </th>
                    </tr>
                    <tr>
                        <th>Biography:</th>
                        <th>:</th>
                        <th>
                            <textarea name="biografi" id="" cols="70" rows="5"></textarea>
                        </th>
                    </tr>
                    <tr>
                        <th>Movie</th>
                        <th>:</th>
                        <th>
                            <select name="id_film">
                                <?php foreach ($selectFilm as $select): ?>
                                <option value="<?=$select['id_film'];?>"><?=$select['film'];?></option>
                                <?php endforeach;?>
                            </select><br>
                        </th>
                    </tr>
                    <tr>
                        <th>Profile Picture</th>
                        <th>:</th>
                        <th><input type="file" name="foto"></th>
                    </tr>
                    <tr>
                        <th>Profile Card</th>
                        <th>:</th>
                        <th><input type="file" name="fotocard"></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th><button style="background-color: blue; color:white; width:30px" name="tambah">Add
                                Cast</button></th>
                    </tr>
                </table>
            </form>
        </div>
    </div>



    <!-- End Content   -->
</body>

</html>