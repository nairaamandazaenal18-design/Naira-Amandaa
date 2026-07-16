<?php
include 'koneksi.php';

// Menangkap data yang dikirim dari form tambah.php
$id_tamu         = $_POST['id_tamu']; // <-- Tambahkan baris ini
$id_kamar        = $_POST['id_kamar']; 
$id_resepsionis  = $_POST['id_resepsionis'];
$tgl_checkin     = $_POST['tgl_checkin'];
$tgl_checkout    = $_POST['tgl_checkout'];
$total_biaya     = $_POST['total_biaya'];

// Query diperbarui dengan memasukkan id_tamu ke tabel reservasi
$query = "INSERT INTO reservasi (id_tamu, id_kamar, id_resepsionis, tgl_checkin, tgl_checkout, total_biaya) 
          VALUES ('$id_tamu', '$id_kamar', '$id_resepsionis', '$tgl_checkin', '$tgl_checkout', '$total_biaya')";

if (mysqli_query($koneksi, $query)) {
    // Jika berhasil, alihkan kembali ke halaman laporan
    header("location:laporan.php");
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}
?>