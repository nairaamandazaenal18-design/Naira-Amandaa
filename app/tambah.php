<?php
// Mengaktifkan pelaporan eror PHP agar jika ada salah ketik langsung kelihatan
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Hubungkan ke database
include 'koneksi.php';

// Cek apakah koneksi database berhasil
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Transaksi Reservasi</title>
    <style>
        body { font-family: sans-serif; background-color: #f5f5f5; margin: 0; padding: 20px; }
        .container { max-width: 600px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-top: 20px; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; font-weight: bold; margin-bottom: 5px; }
        .form-control { width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .btn-simpan { background-color: #28a745; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; font-weight: bold; }
        .btn-simpan:hover { background-color: #218838; }
        .navbar { background-color: #007bff; padding: 15px; border-radius: 4px; margin-bottom: 20px; }
        .navbar a { color: white; text-decoration: none; margin-right: 20px; font-weight: bold; }
        .error-msg { color: red; font-style: italic; font-size: 13px; }
    </style>
</head>
<body>

    <h2>Tambah Transaksi Reservasi</h2>

    <div class="container">
        <form action="simpan.php" method="POST">
            
            <!-- 1. Pilihan Tamu -->
            <div class="form-group">
                <label>Pilih Tamu</label>
                <select name="id_tamu" class="form-control" required>
                    <option value="">-- Pilih Tamu --</option>
                    <?php 
                    // Mengambil data tamu, jika gagal akan langsung memunculkan pesan eror database
                    $tamu_options = mysqli_query($koneksi, "SELECT * FROM tamu") or die("<option class='error-msg'>Eror Tamu: ".mysqli_error($koneksi)."</option>");
                    while($row_tamu = mysqli_fetch_assoc($tamu_options)) {
                        // Catatan: Jika nama kolom di tabelmu bukan 'nama_tamu', ubah bagian bawah ini
                        echo "<option value='".$row_tamu['id_tamu']."'>".$row_tamu['nama_tamu']."</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- 2. Pilihan Kamar -->
            <div class="form-group">
                <label>Pilih Kamar</label>
                <select name="id_kamar" class="form-control" required>
                    <option value="">-- Pilih Kamar (Tersedia) --</option>
                    <?php 
                    // Mengambil data kamar, jika gagal akan langsung memunculkan pesan eror database
                    $kamar_options = mysqli_query($koneksi, "SELECT * FROM kamar") or die("<option class='error-msg'>Eror Kamar: ".mysqli_error($koneksi)."</option>");
                    while($row_kamar = mysqli_fetch_assoc($kamar_options)) {
                        // Catatan: Menampilkan nomor kamar dan tipenya
                        echo "<option value='".$row_kamar['id_kamar']."'>".$row_kamar['nomor_kamar']." - ".$row_kamar['tipe_kamar']."</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- 3. Pilihan Resepsionis -->
            <div class="form-group">
                <label>Pilih Resepsionis</label>
                <select name="id_resepsionis" class="form-control" required>
                    <option value="">-- Pilih Resepsionis --</option>
                    <?php 
                    // Mengambil data resepsionis, jika gagal akan memunculkan pesan eror database
                    $resepsionis_options = mysqli_query($koneksi, "SELECT * FROM resepsionis") or die("<option class='error-msg'>Eror Resepsionis: ".mysqli_error($koneksi)."</option>");
                    while($row_res = mysqli_fetch_assoc($resepsionis_options)) {
                        // Catatan: Menampilkan nama resepsionis
                        echo "<option value='".$row_res['id_resepsionis']."'>".$row_res['nama_resepsionis']."</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label>Tanggal Check-In</label>
                <input type="date" name="tgl_checkin" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Tanggal Check-Out</label>
                <input type="date" name="tgl_checkout" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Total Biaya</label>
                <input type="number" name="total_biaya" class="form-control" placeholder="Contoh: 700000" required>
            </div>

            <button type="submit" class="btn-simpan">Simpan Transaksi</button>
        </form>
    </div>

</body>
</html>