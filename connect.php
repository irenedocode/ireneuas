<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "irene";

$koneksi  = mysqli_connect ($host, $user, $pass, $db);

if (!$koneksi) {

    die("tidak ada koneksi");
}
?>