<?php
// Pastikan file koneksi database sudah disertakan di bagian paling atas
include 'koneksi.php';

// Mengambil ID Reservasi dari URL yang akan diedit
$id_reservasi = $_GET['id'];

// Mengambil data reservasi yang lama berdasarkan ID
$query = mysqli_query($koneksi, "SELECT * FROM reservasi WHERE id_reservasi = '$id_reservasi'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>UAS Proyek Reservasi Hotel - Edit Reservasi</title>
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <style>
        body { font-family: sans-serif; background-color: #f5f5f5; padding: 20px; }
        .container { max-width: 600px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin: 0 auto; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; font-weight: bold; margin-bottom: 5px; }
        .form-control { width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { background-color: #007bff; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; font-weight: bold; }
        button:hover { background-color: #0056b3; }
    </style>
</head>
<body>

    <div class="container">
        <h2>Edit Data Reservasi</h2>
        
        <form action="update.php" method="POST">
            <!-- Input Hidden untuk melempar ID Reservasi -->
            <input type="hidden" name="id_reservasi" value="<?php echo $data['id_reservasi']; ?>">

            <!-- 1. Dropdown Pilihan Tamu (Tambahan Baru Sesuai CMD) -->
            <div class="form-group">
                <label>Pilih Tamu</label>
                <select name="id_tamu" class="form-control" required>
                    <?php 
                    $tamu_options = mysqli_query($koneksi, "SELECT * FROM tamu");
                    while($guest = mysqli_fetch_assoc($tamu_options)) {
                        $selected = ($guest['id_tamu'] == $data['id_tamu']) ? 'selected' : '';
                        echo "<option value='".$guest['id_tamu']."' $selected>".$guest['nama_tamu']."</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- 2. Dropdown Pilihan Kamar -->
            <div class="form-group">
                <label>Pilih Kamar</label>
                <select name="id_kamar" class="form-control" required>
                    <?php 
                    $kamar_options = mysqli_query($koneksi, "SELECT * FROM kamar");
                    while($room = mysqli_fetch_assoc($kamar_options)) {
                        $selected = ($room['id_kamar'] == $data['id_kamar']) ? 'selected' : '';
                        ?>
                        <option value="<?php echo $room['id_kamar']; ?>" <?php echo $selected; ?>>
                            <?php echo $room['nomor_kamar'] . " - " . $room['tipe_kamar']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <!-- 3. Dropdown Pilihan Resepsionis -->
            <div class="form-group">
                <label>Pilih Penerima Resepsionis</label>
                <select name="id_resepsionis" class="form-control" required>
                    <?php 
                    $resepsionis_options = mysqli_query($koneksi, "SELECT * FROM resepsionis");
                    while($res = mysqli_fetch_assoc($resepsionis_options)) {
                        $selected = ($res['id_resepsionis'] == $data['id_resepsionis']) ? 'selected' : '';
                        ?>
                        <option value="<?php echo $res['id_resepsionis']; ?>" <?php echo $selected; ?>>
                            <?php echo $res['nama_resepsionis']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label>Tanggal Check-In</label>
                <input type="date" name="tgl_checkin" class="form-control" value="<?php echo $data['tgl_checkin']; ?>" required>
            </div>

            <div class="form-group">
                <label>Tanggal Check-Out</label>
                <input type="date" name="tgl_checkout" class="form-control" value="<?php echo $data['tgl_checkout']; ?>" required>
            </div>

            <div class="form-group">
                <label>Total Biaya (Rp)</label>
                <input type="number" name="total_biaya" class="form-control" value="<?php echo $data['total_biaya']; ?>" required>
            </div>

            <button type="submit">Update Perubahan</button>
            <a href="laporan.php" style="margin-left: 10px; color: #555; text-decoration: none;">Batal</a>
        </form>
    </div>

</body>
</html>