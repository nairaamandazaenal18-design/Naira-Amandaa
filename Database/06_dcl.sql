MariaDB [db_reservasii_hotell]> CREATE USER 'admin_hotel'@'localhost' IDENTIFIED BY 'AdminHotel2026!';
Query OK, 0 rows affected (0.008 sec)

MariaDB [db_reservasii_hotell]> GRANT ALL PRIVILEGES ON sistem_reservasi_hotel.* TO 'admin_hotel'@'localhost';
Query OK, 0 rows affected (0.007 sec)

MariaDB [db_reservasii_hotell]> GRANT SELECT, INSERT, UPDATE ON sistem_reservasi_hotel.tamu TO 'staff_resepsionis'@'localhost';
ERROR 1146 (42S02): Table 'sistem_reservasi_hotel.tamu' doesn't exist
MariaDB [db_reservasii_hotell]> Bye
Ctrl-C -- exit!

c:\xampp\mysql\bin>mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 12
Server version: 10.4.32-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> USE db_reservasii_hotell;
Database changed
MariaDB [db_reservasii_hotell]> GRANT ALL PRIVILEGES ON db_reservasii_hotell.* TO 'admin_hotel'@'localhost';
Query OK, 0 rows affected (0.007 sec)

MariaDB [db_reservasii_hotell]> GRANT SELECT, INSERT, UPDATE ON db_reservasii_hotell.tamu TO 'staff_resepsionis'@'localhost';
Query OK, 0 rows affected (0.007 sec)

MariaDB [db_reservasii_hotell]> GRANT SELECT, INSERT, UPDATE ON db_reservasii_hotell.tamu TO 'staff_resepsionis'@'localhost';
Query OK, 0 rows affected (0.007 sec)

MariaDB [db_reservasii_hotell]> GRANT SELECT, INSERT, UPDATE ON db_reservasii_hotell.reservasi TO 'staff_resepsionis'@'localhost';
Query OK, 0 rows affected (0.007 sec)

MariaDB [db_reservasii_hotell]> GRANT SELECT, UPDATE ON db_reservasii_hotell.kamar TO 'staff_resepsionis'@'localhost';
Query OK, 0 rows affected (0.007 sec)

MariaDB [db_reservasii_hotell]> GRANT SELECT ON db_reservasii_hotell.laporan_reservasi_lengkap TO 'staff_resepsionis'@'localhost';
ERROR 1146 (42S02): Table 'db_reservasii_hotell.laporan_reservasi_lengkap' doesn't exist
MariaDB [db_reservasii_hotell]> REVOKE UPDATE ON db_reservasii_hotell.kamar FROM 'staff_resepsionis'@'localhost';
Query OK, 0 rows affected (0.007 sec)

MariaDB [db_reservasii_hotell]> FLUSH PRIVILEGES;
Query OK, 0 rows affected (0.001 sec)

MariaDB [db_reservasii_hotell]> SHOW GRANTS FOR 'staff_resepsionis'@'localhost';
+-------------------------------------------------------------------------------------------------------+
| Grants for staff_resepsionis@localhost                                                                |
+-------------------------------------------------------------------------------------------------------+
| GRANT USAGE ON *.* TO `staff_resepsionis`@`localhost`                                                 |
| GRANT SELECT ON `db_reservasii_hotell`.`kamar` TO `staff_resepsionis`@`localhost`                     |
| GRANT SELECT, INSERT, UPDATE ON `db_reservasii_hotell`.`reservasi` TO `staff_resepsionis`@`localhost` |
| GRANT SELECT, INSERT, UPDATE ON `db_reservasii_hotell`.`tamu` TO `staff_resepsionis`@`localhost`      |
+-------------------------------------------------------------------------------------------------------+
4 rows in set (0.000 sec)