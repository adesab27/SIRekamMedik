<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pasien Baru</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/script.js" defer></script>
</head>

<body>
    <div class="container mt-4">
        <h3 class="text-center mt-4">Edit Data Pasien</h3>
        <form class="mt-4" action="{{ route('updateDatapasien', $pasien->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="namaPasien" class="form-label">Nama Pasien</label>
                    <input name="namaPasien" class="form-control" id="namaPasien" placeholder="Masukkan Nama"
                        type="text" value="{{ $pasien->namaPasien }}" required oninput="validateName(event)"  />
                        <small id="nameError" class="text-danger" style="display: none;">Hanya huruf yang diizinkan!</small>
                </div>
                <div class="col-md-6">
                    <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                    <input name="tanggalLahir" class="form-control" id="tanggalLahir" type="date"
                        value="{{ $pasien->tanggalLahir }}" equired
                        max="{{ date('Y-m-d') }}" />
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="alamatPasien" class="form-label">Alamat Pasien</label>
                    <input name="alamatPasien" class="form-control" id="alamatPasien"
                        placeholder="Kelurahan, Kecamatan, Kabupaten" type="text" value="{{ $pasien->alamatPasien }}"
                        required />
                </div>
                <div class="col-md-6">
                    <label for="nomorHandphone" class="form-label">Nomor Handphone</label>
                    <input name="nomorHandphone" class="form-control" id="nomorHandphone" placeholder="081234567890"
                        type="tel" value="{{ $pasien->nomorHandphone }}" oninput="validatePhoneNumber(event)" />
                    <small id="phoneError" class="text-danger" style="display: none;">Hanya angka yang diizinkan!</small>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="keluhan" class="form-label">Keluhan</label>
                    <textarea name="keluhan" class="form-control" id="keluhan"
                        placeholder="Jelaskan keluhan yang ingin dikonsultasikan...."
                        rows="3">{{ $pasien->keluhan }}</textarea>
                </div>
                <div class="col-md-6">
                    <label for="keperluan" class="form-label">Keperluan</label>
                    <textarea name="keperluan" class="form-control" id="keperluan"
                        placeholder="Jelaskan Keperluan yang dibutuhkan..." rows="3">{{ $pasien->keperluan }}</textarea>
                </div>
            </div>
            <div class="text-end">
                <button class="btn btn-primary" type="submit">Simpan Data</button>
            </div>
        </form>

    </div>

    <!-- Alert Script -->
    <script>
        @if (session('success'))
            alert("{{ session('success') }}");
        @endif

        @if (session('failed'))
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
</body>

</html>