<?php
$host   = "localhost";
$user   = "root";
$pass   = "";
$dbname = "toko_varsity";   // ganti jika nama DB kamu berbeda

$koneksi = mysqli_connect($host, $user, $pass, $dbname);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
