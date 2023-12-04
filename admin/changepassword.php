<?php
require '../method.php';
session_start();
global $conn;

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_SESSION['username'];

if (isset($_POST['done'])) {

    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $newpassword = mysqli_real_escape_string($conn, $_POST["newpassword"]);
    $newpassword2 = mysqli_real_escape_string($conn, $_POST["newpassword2"]);

    $result = mysqli_query($conn, "SELECT * FROM role WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_array($result);

        if ($password == $row["password"] && $newpassword == $newpassword2) {
            $updateQuery = "UPDATE role SET password='$newpassword' WHERE username='$username'";
            if (mysqli_query($conn, $updateQuery)) {
                echo "
                <script>
                alert('Change Password Done');
                document.location.href= 'changepassword.php';
                </script>
                ";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        } else {
            echo "Passwords don't match.";
        }
    } else {
        echo "User not found.";
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
    <link rel="stylesheet" href="../assets/css/changepassword.css">
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
                        <span>Admin</span>
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
                    <a href="#">
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
            <h1>CHANGE PASSWORD</h1>
        </div>
        <div class="container-password">
            <form method="post">
                <input type="password" name="password" id="currentpassword" placeholder="Current Password">
                <input type="password" name="newpassword" id="newpassword" placeholder="New Password">
                <input type="password" name="newpassword2" id="newpassword2" placeholder="Re-type New Password">
                <button type="submit" name="done">Done</button>
            </form>
        </div>
        </form>
    </div>
    </div>



    <!-- End Content   -->
</body>

</html>