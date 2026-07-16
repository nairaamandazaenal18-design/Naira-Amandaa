MariaDB [db_reservasii_hotell]> START TRANSACTION;
Query OK, 0 rows affected (0.000 sec)

MariaDB [db_reservasii_hotell]> INSERT INTO reservasi (id_tamu, id_kamar, id_resepsionis, tgl_checkin, tgl_checkout, total_biaya)
    -> VALUES (3, 3, 1, '2026-08-01', '2026-08-03', 2400000.00);
Query OK, 1 row affected (0.006 sec)

MariaDB [db_reservasii_hotell]> UPDATE kamar SET status_kamar = 'Terisi' WHERE id_kamar = 3;
Query OK, 1 row affected (0.001 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [db_reservasii_hotell]> COMMIT;
Query OK, 0 rows affected (0.007 sec)