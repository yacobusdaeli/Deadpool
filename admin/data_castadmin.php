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
$query = "SELECT pemeran.fotocard,pemeran.id_tokoh,pemeran.nama_asli, pemeran.nama_tokoh, pemeran.foto FROM pemeran order by nama_asli asc";
$cast = tampilsemua($query);

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
            <h1>ADD CAST</h1>
        </div>
        <div class="search-cast">
            <input type="text" placeholder="Search">
            <button type="submit" value="tambahcast"><i class="fa-solid fa-plus"></i>Add Cast</button>
        </div>
        <div class="table-data">
            <form action="">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Photo Card</th>
                        <th>Cast Name</th>
                        <th>Role</th>
                        <th>Cast Biography</th>
                        <th>Role Description</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>Photo</td>
                        <td>Photo</td>
                        <td>Ryan Renold</td>
                        <td>Deadpool</td>
                        <td>Born : Ryan Rodney Reynolds
                            23 October 1976
                            Vancouver, British Columbia, Canada
                            Citizenship : Canada - United States
                            Occupations : Actor - producer - businessman - writer
                            Years active : 1991–present</td>
                        <td>Deadpool is the alter ego of Wade Wilson, a disfigured Canadian mercenary with superhuman
                            regenerative healing abilities. He is known for his tendency to joke incessantly and break
                            the fourth wall for humorous effect</td>
                        <td class="aksi">
                            <a href="">Edit</a>
                            <a href="">Delete</a>
                        </td>
                    </tr>

                </table>
            </form>
        </div>
    </div>



    <!-- End Content   -->
</body>

</html>