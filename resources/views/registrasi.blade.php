<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pasien Baru</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
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
        <form class="mt-4" action="{{ route('datapasien') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="namaPasien" class="form-label">Nama Pasien</label>
                    <input name="namaPasien" class="form-control" id="namaPasien" placeholder="Masukkan Nama"
                        type="text" required />
                </div>
                <div class="col-md-6">
                    <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                    <input name="tanggalLahir" class="form-control" id="tanggalLahir" type="date" required />
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="alamatPasien" class="form-label">Alamat Pasien</label>
                    <input name="alamatPasien" class="form-control" id="alamatPasien"
                        placeholder="Kelurahan, Kecamatan, Kabupaten" type="text" required />
                </div>
                <div class="col-md-6">
                    <label for="nomorHandphone" class="form-label">Nomor Handphone</label>
                    <input name="nomorHandphone" class="form-control" id="nomorHandphone" placeholder="081234567890"
                        type="tel" required onkeypress="return isNumber(event)" />
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="keluhan" class="form-label">Keluhan</label>
                    <textarea name="keluhan" class="form-control" id="keluhan"
                        placeholder="Jelaskan keluhan yang ingin dikonsultasikan...." rows="3"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="keperluan" class="form-label">Keperluan</label>
                    <textarea name="keperluan" class="form-control" id="keperluan"
                        placeholder="Jelaskan Keperluan yang dibutuhkan..." rows="3"></textarea>
                </div>
            </div>
            <div class="text-end">
                <button class="btn btn-primary" type="submit">Simpan Data</button>
            </div>
        </form>

    </div>
    <script>
        @if (session('success'))
                    < div class="alert alert-success" >
                {{ session('success') }}
            </div >
        @endif

        @if (session('failed'))
                    < div class="alert alert-danger" >
                {{ session('failed') }}
            </div >
        @endif

    </script>
</body>

</html>