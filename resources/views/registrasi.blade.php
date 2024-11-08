<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pasien Baru</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/style.css"> <!-- Link to the external CSS file -->
    <script src="assets/script.js" defer></script>
</head>
<body>
    <!-- Navbar -->
    @include("header")
    <!-- /.navbar -->
    <div class="container mt-4">
        <!-- container -->
        @include("container")
        <!-- /.container-->
        <h3 class="text-center mt-4">Registrasi Pasien Baru</h3>
        <form class="mt-4" onsubmit="handleSubmit(event)">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label" for="namaPasien">Nama Pasien</label>
                    <input class="form-control" id="namaPasien" placeholder="Masukkan Nama" type="text"/>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="tanggalLahir">Tanggal Lahir</label>
                    <input class="form-control" id="tanggalLahir" type="date" required/>
                </div>                
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label" for="alamatPasien">Alamat Pasien</label>
                    <input class="form-control" id="alamatPasien" placeholder="Kelurahan, Kecamatan, Kabupaten" type="text"/>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="nomorHandphone">Nomor Handphone</label>
                    <input class="form-control" id="nomorHandphone" placeholder="081234567890" type="tel" required onkeypress="return isNumber(event)"/>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label" for="keluhan">Keluhan</label>
                    <textarea class="form-control" id="keluhan" placeholder="Jelaskan keluhan yang ingin dikonsultasikan...." rows="3"></textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="keperluan">Keperluan</label>
                    <textarea class="form-control" id="keperluan" placeholder="Jelaskan Keperluan yang dibutuhkan..." rows="3"></textarea>
                </div>
            </div>
            <div class="text-end">
                <button class="btn btn-primary" type="submit">Simpan Data</button>
            </div>
        </form>
    </div>
    <script>
        function isNumber(event) {
            const key = event.charCode || event.keyCode;
            // Memeriksa jika karakter yang ditekan adalah angka
            if (key < 48 || key > 57) {
                alert("Harap masukkan angka saja untuk nomor handphone."); // Menampilkan alert
                event.preventDefault(); // Mencegah input karakter bukan angka
                return false;
            }
            return true;
        }
    </script>
</body>
</html>