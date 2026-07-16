# 🏨 Sistem Informasi Reservasi Hotel

## Deskripsi
Aplikasi Sistem Informasi Reservasi Hotel ini merupakan proyek terintegrasi antara mata kuliah **Sistem Database** dan **Pemrograman Web**. Aplikasi berbasis web sederhana ini dirancang untuk mengelola data master (tamu, kamar, dan resepsionis) serta memproses transaksi reservasi dan pembayaran kamar secara otomatis, rapi, dan terintegrasi dengan basis data MariaDB/MySQL[cite: 10, 11, 16].


## Fitur Aplikasi
Sistem ini dilengkapi dengan berbagai fitur utama yang telah memenuhi kriteria proyek:
**Dashboard / Halaman Utama**: Menampilkan informasi ringkasan data hotel.
**Tambah Data**: Formulir interaktif untuk menginput transaksi reservasi baru.
**Tampil Data**: Menyajikan data dari database ke dalam tabel HTML yang rapi.
**Edit Data**: Formulir untuk memperbarui detail transaksi yang sudah ada.
**Hapus Data**: Menghapus data transaksi lengkap dengan konfirmasi sebelum proses hapus.
**Laporan Data**: Halaman khusus yang menyajikan laporan data reservasi terperinci.
**Validasi Input**: Validasi sederhana untuk memastikan input data tidak boleh kosong.


## Teknologi yang Digunakan
**PHP** (Pemrograman Server-side)
**MySQL/MariaDB** (Sistem Manajemen Database)
**HTML** (Struktur Halaman Web)
**CSS** (Penataan Gaya Tampilan/Styling)
**JavaScript** (Interaksi Sederhana & Validasi)
**XAMPP** (Server Lokal & Engine Database)
**GitHub** (Media Kolaborasi & Version Control)


## Struktur Database
Aplikasi ini berjalan menggunakan database **`db_reservasii_hotell`** yang terdiri dari 5 tabel utama
**`tamu`**: Menyimpan data identitas tamu (ID, Nama, No. HP, Email)
**`kamar`**: Menyimpan detail kamar (ID, Nomor, Tipe, Harga per malam, Status ketersediaan).
**`resepsionis`**: Menyimpan data staf penerima tamu (ID, Nama, Shift kerja).
**`reservasi`**: Menyimpan detail transaksi sewa kamar yang menghubungkan tamu, kamar, dan resepsionis.
**`pembayaran`**: Menyimpan riwayat pembayaran sewa kamar

## Tujuan Proyek
Berdasarkan panduan akademis UAS Proyek Terintegrasi, penyelesaian proyek ini bertujuan agar mahasiswa mampu:
**Menganalisis Kebutuhan Data**: Mampu melakukan analisis kebutuhan data dari studi kasus nyata sistem reservasi hotel.
**Merancang Database**: Merancang arsitektur basis data yang terstruktur menggunakan *Entity Relationship Diagram* (ERD).
**Transformasi Skema Relasional**: Mentransformasikan rancangan ERD menjadi tabel-tabel relasional yang siap pakai.
**Menerapkan Normalisasi**: Memastikan integritas data terjamin dengan melakukan normalisasi database minimal hingga bentuk normal ketiga (3NF).
**Implementasi SQL**: Mengimplementasikan basis data secara langsung di MySQL/MariaDB menggunakan perintah DDL, DML, Query Lanjutan (JOIN/Aggregate), View, Index, DCL (Hak Akses), hingga Transaksi.
**Koneksi Database & CRUD**: Membangun aplikasi web berbasis PHP yang terhubung langsung dengan database serta memiliki fungsi *Create, Read, Update,* dan *Delete* (CRUD) yang berfungsi penuh.
**Validasi & Laporan**: Menerapkan validasi input sederhana untuk mencegah data kosong serta menyajikan halaman laporan data yang dinamis.
**Dokumentasi & Kolaborasi**: Menyusun dokumentasi proyek yang sistematis serta berkolaborasi secara tim memanfaatkan platform GitHub.


## Anggota Kelompok
1. **Amelia Agestina**  
NIM:(IK2511016)
Tugas:(Laporan)
2. **Gabriella Elyazar Palumpun**
NIM:(IKK2511053)
Tugas:(Buat PHP)
3. **Naira Amanda Zaenal**
NIM:(IK2511002)
Tugas:(Buat ERD, buat readme)
4. **Rifka Khairunnisa**
NIM:(IK2511029)
Tugas:(Buat Database, readme, Buat PHP)
