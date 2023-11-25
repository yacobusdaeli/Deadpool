<?php

//ini buat ngecek pengguna
if (!isset($_SESSION["user"])) {
    header("Location: start.php");
    exit();
}

if (!isset($_SESSION["admin"])) {
    header("Location: start.php");
    exit();
}

//ini buat logout
session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("Location: start.php");
exit();
