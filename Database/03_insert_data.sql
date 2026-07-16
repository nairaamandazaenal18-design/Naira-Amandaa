MariaDB [db_reservasii_hotell]> INSERT INTO kamar (nomor_kamar, tipe_kamar, harga_per_malam, status_kamar) VALUES
    -> ('101', 'Standard', 350000.00, 'Terisi'),
    -> ('102', 'Deluxe', 600000.00, 'Terisi'),
    -> ('201', 'Suite', 1200000.00, 'Tersedia');
Query OK, 3 rows affected (0.009 sec)
Records: 3  Duplicates: 0  Warnings: 0

MariaDB [db_reservasii_hotell]> INSERT INTO resepsionis (nama_resepsionis, shift) VALUES
    -> ('Nunu', 'Pagi'),
    -> ('Nini', 'Siang');
Query OK, 2 rows affected (0.013 sec)
Records: 2  Duplicates: 0  Warnings: 0

MariaDB [db_reservasii_hotell]> INSERT INTO reservasi (id_tamu, id_kamar, id_resepsionis, tgl_checkin, tgl_checkout, total_biaya) VALUES
    -> (1, 1, 1, '2026-07-10', '2026-07-12', 700000.00),
    -> (2, 2, 2, '2026-07-14', '2026-07-17', 1800000.00);
Query OK, 2 rows affected (0.009 sec)
Records: 2  Duplicates: 0  Warnings: 0

MariaDB [db_reservasii_hotell]> INSERT INTO pembayaran (id_reservasi, jumlah_bayar, metode_pembayaran) VALUES
    -> (1, 700000.00, 'Tunai'),
    -> (2, 1800000.00, 'Transfer');
Query OK, 2 rows affected (0.009 sec)
Records: 2  Duplicates: 0  Warnings: 0