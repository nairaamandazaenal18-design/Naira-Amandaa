<?php
$host = "localhost";
$user = "root";
$pass = "";
// Pastikan nama database di bawah ini sama persis (cek huruf kembar 'i' atau 'l')
$db   = "db_reservasii_hotell"; 

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>