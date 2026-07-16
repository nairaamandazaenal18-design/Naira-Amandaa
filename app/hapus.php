<?php
include 'koneksi.php';

$id = $_GET['id'];

if (isset($id)) {
    // Mencari ID Kamar terlebih dahulu agar kamar tersebut statusnya bisa dikembalikan menjadi 'Tersedia'
    $query_cari = mysqli_query($koneksi, "SELECT id_kamar FROM reservasi WHERE id_reservasi = '$id'");
    $data_res = mysqli_fetch_assoc($query_cari);
    $id_kamar = $data_res['id_kamar'];

    // Menjalankan query hapus data
    $query_hapus = "DELETE FROM reservasi WHERE id_reservasi = '$id'";
    
    if (mysqli_query($koneksi, $query_hapus)) {
        // Mengubah status kamar kembali menjadi 'Tersedia' karena reservasi dihapus/dibatalkan
        mysqli_query($koneksi, "UPDATE kamar SET status_kamar = 'Tersedia' WHERE id_kamar = '$id_kamar'");
        
        echo "<script>alert('Data reservasi berhasil dihapus dan status kamar telah dikosongkan!'); window.location='laporan.php';</script>";
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
    header("Location: laporan.php");
}
?>