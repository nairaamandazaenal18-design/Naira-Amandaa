[db_reservasii_hotell]> SELECT
    -> r.id_reservasi,
    -> t.nama_tamu,
    -> k.nomor_kamar,
    -> k.tipe_kamar,
    -> r.tgl_checkin,
    -> r.tgl_checkout,
    -> r.total_biaya
    -> FROM reservasi r
    -> INNER JOIN tamu t ON r.id_tamu = t.id_tamu
    -> INNER JOIN kamar k ON r.id_kamar = k.id_kamar;
 [db_reservasii_hotell]> SELECT
    -> r.id_reservasi,
    -> t.nama_tamu,
    -> res.nama_resepsionis,
    -> res.shift
    -> FROM reservasi r
    -> INNER JOIN tamu t ON r.id_tamu = t.id_tamu
    -> INNER JOIN resepsionis res ON r.id_resepsionis = res.id_resepsionis;


[db_reservasii_hotell]> SELECT
    -> COUNT(id_reservasi) AS total_transaksi_sukses,
    -> SUM(total_biaya) AS total_pendapatan_hotel
    -> FROM reservasi;
 [db_reservasii_hotell]> SELECT
    -> k.tipe_kamar,
    -> COUNT(r.id_reservasi) AS jumlah_pemesan,
    -> AVG(r.total_biaya) AS rata_rata_biaya_kamar
    -> FROM reservasi r
    -> INNER JOIN kamar k ON r.id_kamar = k.id_kamar
    -> GROUP BY k.tipe_kamar;
