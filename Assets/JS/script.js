// Validasi Input Kosong untuk Halaman Tambah & Edit Reservasi
function validasiForm() {
    let idTamu = document.getElementById('id_tamu').value;
    let idKamar = document.getElementById('id_kamar').value;
    let checkin = document.getElementById('tgl_checkin').value;
    let checkout = document.getElementById('tgl_checkout').value;
    let biaya = document.getElementById('total_biaya').value;

    if (idTamu === "" || idKamar === "" || checkin === "" || checkout === "" || biaya === "") {
        alert("Peringatan: Semua data form reservasi wajib diisi!");
        return false; // Membatalkan proses submit form
    }
    return true; // Mengizinkan proses submit form
}