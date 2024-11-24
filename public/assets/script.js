
// Fungsi untuk memastikan hanya angka yang dimasukkan pada input nomor telepon
function validatePhoneNumber(event) {
    const input = event.target; // Mendapatkan elemen input
    const errorMessage = document.getElementById("phoneError");

    // Menghapus karakter non-angka
    input.value = input.value.replace(/[^0-9]/g, '');

    // Menampilkan pesan kesalahan jika input tidak hanya angka
    if (/[^0-9]/.test(input.value)) {
        errorMessage.style.display = 'block';
    } else {
        errorMessage.style.display = 'none';
    }
}
// Fungsi untuk memastikan hanya huruf yang dimasukkan pada input nama pasien
function validateName(event) {
    const input = event.target; // Mendapatkan elemen input
    const errorMessage = document.getElementById("nameError");

    // Menghapus karakter non-huruf
    input.value = input.value.replace(/[^a-zA-Z\s]/g, '');

    // Menampilkan pesan kesalahan jika input tidak hanya huruf
    if (/[^a-zA-Z\s]/.test(input.value)) {
        errorMessage.style.display = 'block';
    } else {
        errorMessage.style.display = 'none';
    }
}