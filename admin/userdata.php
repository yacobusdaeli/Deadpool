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
    <title>Admin page | ADD CAST</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/userdata.css">
</head>

<body>

    <!-- Start Sidebar -->
    <nav>
        <ul>
            <!-- Icon  -->
            <li>
                <a href="#">
                    <div class="logo-image">
                        <img src="assets/css/profil-img.jpg" alt=""></img>
                    </div>
                    <div class="logo-text">
                        <span><?=$_SESSION['username']?></span>
                        <span>[Admin]</span>
                    </div>
                </a>
            </li>
            <div class="content-sidebar">
                <li>
                    <a href="addcastadmin.html" class="text-cast">
                        <i class="fa-solid fa-user-pen"></i>
                        <span class="nav-item">Add Cast</span>
                    </a>
                </li>
                <li>
                    <a href="userdata.html">
                        <i class="fa-regular fa-clipboard"></i>
                        <span class="nav-item">User Data</span>
                    </a>
                </li>
                <li>
                    <a href="changepassword.html">
                        <i class="fa-solid fa-lock"></i>
                        <span class="nav-item">Change Password</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="logout">
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
            <h1>USER DATA</h1>
        </div>
        <div class="search-cast">
            <input type="text" placeholder="Search">
        </div>
        <div class="table-data">
            <form action="">
                <table>
                    <tr>
                        <th>NO</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>

                    </tr>
                    <?php $i = 1?>
                    <?php foreach ($user as $row): ?>
                    <tr>
                        <td><?=$i?></td>
                        <td><?=$row['username']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['role']?></td>
                    </tr>
                    <?php $i++?>
                    <?php endforeach;?>


                </table>
            </form>
        </div>
    </div>



    <!-- End Content   -->
</body>

</html>