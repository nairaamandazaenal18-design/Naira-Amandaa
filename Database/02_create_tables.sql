MariaDB [db_reservasii_hotell]> CREATE TABLE tamu (
    -> id_tamu INT AUTO_INCREMENT,
    -> nama_tamu VARCHAR(100) NOT NULL,
    -> no_hp VARCHAR(15) NOT NULL,
    -> email VARCHAR(50),
    -> PRIMARY KEY (id_tamu)
    -> );
Query OK, 0 rows affected (0.019 sec)

MariaDB [db_reservasii_hotell]> CREATE TABLE kamar (
    -> id_kamar INT AUTO_INCREMENT,
    -> nomor_kamar VARCHAR(10) NOT NULL,
    -> tipe_kamar VARCHAR(50) NOT NULL,
    -> harga_per_malam DECIMAL(10,2) NOT NULL,
    -> status_kamar ENUM('Tersedia', 'Terisi') DEFAULT 'Tersedia',
    -> PRIMARY KEY (id_kamar)
    -> );
Query OK, 0 rows affected (0.018 sec)

MariaDB [db_reservasii_hotell]> CREATE TABLE resepsionis (
    -> id_resepsionis INT AUTO_INCREMENT,
    -> nama_resepsionis VARCHAR(100) NOT NULL,
    -> shift ENUM('Pagi', 'Siang', 'Malam') NOT NULL,
    -> PRIMARY KEY (id_resepsionis)
    -> );
Query OK, 0 rows affected (0.012 sec)

MariaDB [db_reservasii_hotell]> CREATE TABLE reservasi (
    -> id_reservasi INT AUTO_INCREMENT,
    -> id_tamu INT,
    -> id_kamar INT,
    -> id_resepsionis INT,
    -> tgl_checkin DATE NOT NULL,
    -> tgl_checkout DATE NOT NULL,
    -> total_biaya DECIMAL(10,2),
    -> PRIMARY KEY (id_reservasi),
    -> FOREIGN KEY (id_tamu) REFERENCES tamu(id_tamu) ON DELETE CASCADE,
    -> FOREIGN KEY (id_kamar) REFERENCES kamar(id_kamar) ON DELETE CASCADE,
    -> FOREIGN KEY (id_resepsionis) REFERENCES resepsionis(id_resepsionis) ON DELETE SET NULL
    -> );
Query OK, 0 rows affected (0.052 sec)

MariaDB [db_reservasii_hotell]> CREATE TABLE pembayaran (
    -> id_pembayaran INT AUTO_INCREMENT,
    -> id_reservasi INT,
    -> tgl_pembayaran DATETIME DEFAULT CURRENT_TIMESTAMP,
    -> jumlah_bayar DECIMAL(10,2) NOT NULL,
    -> metode_pembayaran ENUM('Tunai', 'Transfer', 'Kartu Kredit') NOT NULL,
    -> PRIMARY KEY (id_pembayaran),
    -> FOREIGN KEY (id_reservasi) REFERENCES reservasi(id_reservasi) ON DELETE CASCADE
    -> );
Query OK, 0 rows affected (0.034 sec)