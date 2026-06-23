<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "DB_UAS_PBO_TRPL1B_WandaTiaraLevina";

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>