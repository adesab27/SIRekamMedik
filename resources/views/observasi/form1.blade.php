<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Observasi Kebutuhan Terapi</title>
    <link
      crossorigin="anonymous"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <!-- Link to the external CSS file -->
  </head>
  <body>
    <!-- Navbar -->
    @include("header")
    <!-- /.navbar -->
    <div class="container">
    <!-- riwayat -->
    @include("observasi/riwayat")
    <!-- /.riwayat-->
    <form action="{{ route('form1.store') }}" method="POST">
    @csrf
    <div class="form-section">
        <h5>Data Anak</h5>
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="namaAnak">Nama Anak</label>
                <input class="form-control" id="namaAnak" name="nama_anak" placeholder="Masukkan Nama" type="text" />
            </div>
            <div class="col-md-6 form-group">
                <label for="tempatLahir">Tempat Lahir</label>
                <input class="form-control" id="tempatLahir" name="tempat_lahir" placeholder="Tempat lahir" type="text" />
            </div>
            <div class="col-md-6 form-group">
                <label for="namaPanggilan">Nama Panggilan Anak</label>
                <input class="form-control" id="namaPanggilan" name="nama_panggilan" placeholder="Masukkan nama panggilan anak" type="text" />
            </div>
            <div class="col-md-6 form-group">
                <label for="tanggalLahir">Tanggal Lahir</label>
                <input class="form-control" id="tanggalLahir" name="tanggal_lahir" placeholder="DD/MM/YYYY" type="date" />
            </div>
            <div class="col-md-6 form-group">
                <label for="jenisKelamin">Jenis Kelamin</label>
                <input class="form-control" id="jenisKelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" type="text" />
            </div>
            <div class="col-md-6 form-group">
                <label for="umurAnak">Umur Anak</label>
                <input class="form-control" id="umurAnak" name="umur_anak" placeholder="Dalam Tahun dan bulan" type="text" />
            </div>
        </div>
    </div>

    <div class="form-section">
        <h5>Data Orang Tua</h5>
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="namaAyah">Nama Ayah</label>
                <input class="form-control" id="namaAyah" name="nama_ayah" placeholder="Masukkan Nama Ayah" type="text" />
            </div>
            <div class="col-md-6 form-group">
                <label for="namaIbu">Nama Ibu</label>
                <input class="form-control" id="namaIbu" name="nama_ibu" placeholder="Masukkan Nama Ibu" type="text" />
            </div>
            <div class="col-md-6 form-group">
                <label for="usiaAyah">Usia Ayah</label>
                <input class="form-control" id="usiaAyah" name="usia_ayah" placeholder="Masukkan Usia Ayah" type="text" />
            </div>
            <div class="col-md-6 form-group">
                <label for="usiaIbu">Usia Ibu</label>
                <input class="form-control" id="usiaIbu" name="usia_ibu" placeholder="Masukkan Usia Ibu" type="text" />
            </div>
            <div class="col-md-6 form-group">
                <label for="agamaAyah">Agama Ayah</label>
                <input class="form-control" id="agamaAyah" name="agama_ayah" placeholder="Masukkan Agama Ayah" type="text" />
            </div>
            <div class="col-md-6 form-group">
                <label for="agamaIbu">Agama Ibu</label>
                <input class="form-control" id="agamaIbu" name="agama_ibu" placeholder="Masukkan Agama Ibu" type="text" />
            </div>
            <div class="col-md-6 form-group">
                <label for="pekerjaanAyah">Pekerjaan Ayah</label>
                <input class="form-control" id="pekerjaanAyah" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah" type="text" />
            </div>
            <div class="col-md-6 form-group">
                <label for="pekerjaanIbu">Pekerjaan Ibu</label>
                <input class="form-control" id="pekerjaanIbu" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu" type="text" />
            </div>
            <div class="col-12 form-group">
                <label for="alamatLengkap">Alamat Lengkap</label>
                <textarea class="form-control" id="alamatLengkap" name="alamat_lengkap" placeholder="Masukkan Alamat lengkap" rows="3"></textarea>
            </div>
        </div>
    </div>

    <div class="text-end">
        <button class="btn btn-primary" type="submit">Selanjutnya</button>
    </div>
</form>

    </div>
  </body>
</html>
