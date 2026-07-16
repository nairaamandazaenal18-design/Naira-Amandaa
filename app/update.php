<?php
include 'koneksi.php';

// Menangkap data yang dikirim dari form edit.php
$id_reservasi    = $_POST['id_reservasi'];
$id_tamu         = $_POST['id_tamu']; // <-- Tambahkan baris ini
$id_kamar        = $_POST['id_kamar']; 
$id_resepsionis  = $_POST['id_resepsionis'];
$tgl_checkin     = $_POST['tgl_checkin'];
$tgl_checkout    = $_POST['tgl_checkout'];
$total_biaya     = $_POST['total_biaya'];

// Query diperbarui agar id_tamu juga ikut ter-update di database
$query = "UPDATE reservasi SET 
          id_tamu = '$id_tamu', 
          id_kamar = '$id_kamar', 
          id_resepsionis = '$id_resepsionis', 
          tgl_checkin = '$tgl_checkin', 
          tgl_checkout = '$tgl_checkout', 
          total_biaya = '$total_biaya' 
          WHERE id_reservasi = '$id_reservasi'";

if (mysqli_query($koneksi, $query)) {
    // Jika berhasil, alihkan kembali ke halaman laporan
    header("location:laporan.php");
} else {
    echo "Gagal memperbarui data: " . mysqli_error($koneksi);
}
?>