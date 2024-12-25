<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pasien Baru</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo-klinik.png') }}">
    <link rel="stylesheet" href="assets/style.css">
    <script src="js/app.js" defer></script>
</head>

<body>
    <!-- Navbar -->
    @include("header")
    <!-- /.navbar -->

    <div class="container mt-4">
        @include("container")
        <h3 class="text-center mt-4">Registrasi Pasien Baru</h3>

        <form action="{{ route('registrasi.create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="namaPasien" class="form-label">Nama Pasien</label>
                <input name="namaPasien" class="form-control" id="namaPasien" placeholder="Masukkan Nama" type="text"
                    required oninput="validateName(event)" style="text-transform: capitalize;" />
                <small id="nameError" class="text-danger" style="display: none;">Hanya huruf yang diizinkan!</small>
            </div>

            <div class="mb-3">
                <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                <input name="tanggalLahir" class="form-control" id="tanggalLahir" type="date" required
                    max="{{ date('Y-m-d') }}" />
            </div>
            <div class="mb-3">
                <label for="alamatPasien" class="form-label">Alamat Pasien</label>
                <input name="alamatPasien" class="form-control" id="alamatPasien"
                    placeholder="Kelurahan, Kecamatan, Kabupaten" type="text" required
                    style="text-transform: capitalize;" />
            </div>
            <div class="mb-3">
                <label for="nomorHandphone" class="form-label">Nomor Handphone</label>
                <input name="nomorHandphone" class="form-control" id="nomorHandphone" placeholder="081234567890"
                    type="tel" required oninput="validatePhoneNumber(event)" />
                <small id="phoneError" class="text-danger" style="display: none;">Hanya angka yang diizinkan!</small>
            </div>
            <div class="mb-3">
                <label for="keluhan" class="form-label">Keluhan</label>
                <textarea name="keluhan" class="form-control" id="keluhan"
                    placeholder="Jelaskan keluhan yang ingin dikonsultasikan...." rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="keperluan" class="form-label">Keperluan</label>
                <select class="form-control" id="keperluan" name="keperluan" required>
                    <option value="" disabled selected>Keperluan</option>
                    <option value="Terapi Okupasi">Terapi Okupasi</option>
                    <option value="Terapi Wicara">Terapi Wicara</option>
                    <option value="Fisioterapi">Fisioterapi</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nama_terapis" class="form-label">Terapis</label>
                <input name="nama_terapis" class="form-control" id="nama_terapis"
                    placeholder="Nama Terapis" type="text" 
                    required oninput="validateName(event)" style="text-transform: capitalize;" />
                <small id="nameError" class="text-danger" style="display: none;">Hanya huruf yang diizinkan!</small>
            </div>
            <div class="text-end">
                <button class="btn btn-primary mb-3" type="submit">Simpan Data</button>
            </div>
        </form>


    </div>

    <!-- Alert Script -->
    <script>
        @if(session('success'))
            alert("{{ session('success') }}");
        @endif

        @if(session('failed'))
            alert("{{ session('failed') }}");
        @endif
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
    </script>
    <script>
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

// Fungsi untuk mengecek apakah nomor pasien sudah terdaftar
function checkExistingNomorPasien(event) {
    const nomorPasien = event.target.value;
    const errorMessage = document.getElementById("nomorPasienError");

    // Cek jika nomor pasien kosong
    if (!nomorPasien) {
        errorMessage.style.display = 'none';
        return;
    }

    // Lakukan pengecekan ke server jika nomor pasien sudah ada
    fetch(`/check-nomor-pasien/${nomorPasien}`)
        .then(response => response.json())
        .then(data => {
            if (data.exists) {
                errorMessage.style.display = 'block';
                errorMessage.textContent = "Nomor pasien sudah terdaftar!";
            } else {
                errorMessage.style.display = 'none';
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>