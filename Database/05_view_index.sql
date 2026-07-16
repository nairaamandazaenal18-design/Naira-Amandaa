MariaDB [db_reservasii_hotell]> CREATE VIEW laporan_reservasii_lengkap AS
    -> SELECT
    -> r.id_reservasi,
    -> t.nama_tamu,
    -> k.nomor_kamar,
    -> r.tgl_checkin,
    -> r.tgl_checkout,
    -> r.total_biaya
    -> FROM reservasi r
    -> JOIN tamu t ON r.id_tamu = t.id_tamu
    -> JOIN kamar k ON r.id_kamar = k.id_kamar;
Query OK, 0 rows affected (0.009 sec)

MariaDB [db_reservasii_hotell]> SELECT * FROM laporan_reservasii_lengkap;
+--------------+-----------+-------------+-------------+--------------+-------------+
| id_reservasi | nama_tamu | nomor_kamar | tgl_checkin | tgl_checkout | total_biaya |
+--------------+-----------+-------------+-------------+--------------+-------------+
|            1 | Becce     | 101         | 2026-07-10  | 2026-07-12   |   700000.00 |
|            2 | Baco      | 102         | 2026-07-14  | 2026-07-17   |  1800000.00 |
+--------------+-----------+-------------+-------------+--------------+-------------+
2 rows in set (0.001 sec)

MariaDB [db_reservasii_hotell]> CREATE INDEX idx_nomor_kamar ON kamar(nomor_kamar);
Query OK, 0 rows affected (0.021 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [db_reservasii_hotell]> CREATE USER 'admin_hotel'@'localhost' IDENTIFIED BY 'AdminHotel2026!';
Query OK, 0 rows affected (0.008 sec)