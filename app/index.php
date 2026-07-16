<?php
include 'koneksi.php';

// Menggunakan aggregate function COUNT untuk ringkasan dashboard
$query_tamu = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM tamu");
$data_tamu = mysqli_fetch_assoc($query_tamu);

$query_kamar = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM kamar WHERE status_kamar='Tersedia'");
$data_kamar = mysqli_fetch_assoc($query_kamar);

$query_res = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM reservasi");
$data_res = mysqli_fetch_assoc($query_res);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - SI Reservasi Hotel</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f4f6f9; color: #333; }
        nav { background: #007bff; padding: 15px; margin-bottom: 20px; border-radius: 5px; }
        nav a { color: white; text-decoration: none; margin-right: 20px; font-weight: bold; }
        .row { display: flex; gap: 20px; margin-top: 20px; }
        .card { flex: 1; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); border-left: 5px solid #007bff; }
        .card h3 { margin: 0 0 10px 0; color: #555; }
        .card p { font-size: 24px; font-weight: bold; margin: 0; color: #007bff; }
    </style>
</head>
<body>

    <h2>Sistem Informasi Reservasi Hotel</h2>
    <nav> 
        <img src="../Assets/img/LOGO MEGA BUANA PALOPO.jpg" alt="Logo Hotel" width="50" style="border-radius: 50%; margin-right: 15px; object-fit: cover;">
        <a href="index.php" style="margin-right: 15px;">Dashboard</a>
        <a href="tambah.php" style="margin-right: 15px;">Tambah Reservasi</a>
        <a href="laporan.php">Laporan Data</a>
    </nav>

    <h3>Selamat Datang di Dashboard Admin</h3>
    <div class="row">
        <div class="card">
            <h3>Total Tamu Terdaftar</h3>
            <p><?php echo $data_tamu['total']; ?> Orang</p>
        </div>
        <div class="card">
            <h3>Kamar Tersedia</h3>
            <p><?php echo $data_kamar['total']; ?> Kamar</p>
        </div>
        <div class="card">
            <h3>Total Transaksi Reservasi</h3>
            <p><?php echo $data_res['total']; ?> Transaksi</p>
        </div>
    </div>

</body>
</html>