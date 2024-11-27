
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

// delete 
function deleteData(event, id) {
    event.preventDefault(); // Mencegah link membuka URL

    // Tampilkan konfirmasi penghapusan
    if (confirm('Are you sure you want to delete this data?')) {
        // URL untuk menghapus data
        const url = `/datapasien/delete/${id}`;

        // Kirim permintaan DELETE menggunakan fetch
        fetch(url, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content, // Ambil token CSRF
                'Accept': 'application/json'
            }
        })
        .then(response => {
            if (response.ok) {
                // Jika berhasil, tampilkan alert dan refresh halaman
                alert('Data berhasil dihapus!');
                location.reload();
            } else {
                // Jika gagal, tampilkan pesan error
                return response.json().then(data => {
                    alert('Gagal menghapus data: ' + (data.message || 'Unknown error'));
                });
            }
        })
        .catch(error => {
            // Tangani error jaringan atau server
            console.error('Error:', error);
            alert('An error occurred while deleting the data.');
        });
    }
}
