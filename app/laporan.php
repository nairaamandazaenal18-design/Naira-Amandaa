<?php
include 'koneksi.php';

// Menampilkan data dengan memanfaatkan kombinasi query JOIN lanjutan
$query = "SELECT r.id_reservasi, t.nama_tamu, k.nomor_kamar, k.tipe_kamar, 
                 p.nama_resepsionis, r.tgl_checkin, r.tgl_checkout, r.total_biaya
          FROM reservasi r
          JOIN tamu t ON r.id_tamu = t.id_tamu
          JOIN kamar k ON r.id_kamar = k.id_kamar
          LEFT JOIN resepsionis p ON r.id_resepsionis = p.id_resepsionis";

$result = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Reservasi</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f4f6f9; }
        nav { background: #007bff; padding: 15px; margin-bottom: 20px; border-radius: 5px; }
        nav a { color: white; text-decoration: none; margin-right: 20px; font-weight: bold; }
        table { width: 100%; border-collapse: collapse; background: white; margin-top: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #007bff; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .btn-edit { background: #ffc107; color: black; padding: 5px 10px; text-decoration: none; border-radius: 3px; font-weight: bold; }
        .btn-hapus { background: #dc3545; color: white; padding: 5px 10px; text-decoration: none; border-radius: 3px; font-weight: bold; }
    </style>
</head>
<body>

    <h2>Laporan Transaksi Reservasi Hotel</h2>
    <nav>
        <a href="index.php">Dashboard</a>
        <a href="tambah.php">Tambah Reservasi</a>
        <a href="laporan.php">Laporan Data</a>
    </nav>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Tamu</th>
                <th>No. Kamar</th>
                <th>Tipe Kamar</th>
                <th>Resepsionis</th>
                <th>Check-In</th>
                <th>Check-Out</th>
                <th>Total Biaya</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id_reservasi']; ?></td>
                <td><?php echo $row['nama_tamu']; ?></td>
                <td><?php echo $row['nomor_kamar']; ?></td>
                <td><?php echo $row['tipe_kamar']; ?></td>
                <td><?php echo $row['nama_resepsionis']; ?></td>
                <td><?php echo $row['tgl_checkin']; ?></td>
                <td><?php echo $row['tgl_checkout']; ?></td>
                <td>Rp <?php echo number_format($row['total_biaya'], 2, ',', '.'); ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id_reservasi']; ?>" class="btn-edit">Edit</a>
                    <!-- Fitur konfirmasi sebelum menghapus data (Sesuai Aturan Ketentuan Web) -->
                    <a href="hapus.php?id=<?php echo $row['id_reservasi']; ?>" class="btn-hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data reservasi ini?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>