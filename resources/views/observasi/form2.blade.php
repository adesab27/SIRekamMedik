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
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
  </head>
  <body>
    <!-- Navbar -->
    @include("header")
    
    <div class="container">
      <!-- Riwayat -->
      @include("observasi/riwayat")

      <!-- Form Data Tambahan -->
      <form method="POST" action="{{ route('form2.store') }}">
        @csrf
        <div class="form-section">
          <h5>Data Tambahan</h5>
          
          <!-- Riwayat Diagnosa -->
          <div class="form-group">
            <label for="riwayatDiagnosa">
              Riwayat Diagnosa
              <small> (apabila sudah ada diagnosa) </small>
            </label>
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="diagnosaOleh"> Diagnosa diberikan oleh : </label>
                <input
                  class="form-control"
                  name="diagnosaOleh"
                  id="diagnosaOleh"
                  placeholder="Nama dokter atau ahli"
                  type="text"
                />
              </div>
              <div class="col-md-6 form-group">
                <label for="diagnosaUsia">
                  Diusia berapa diagnosa diberikan
                </label>
                <input
                  class="form-control"
                  name="diagnosaUsia"
                  id="diagnosaUsia"
                  placeholder="Tanggal atau umur"
                  type="text"
                />
              </div>
              <div class="col-12 form-group">
                <label for="diagnosaDiberikan">
                  Diagnosa yang diberikan :
                </label>
                <textarea
                  class="form-control"
                  name="diagnosaDiberikan"
                  id="diagnosaDiberikan"
                  placeholder="Masukkan Diagnosa yang diberikan"
                  rows="3"
                ></textarea>
              </div>
            </div>
          </div>
          
          <!-- Saudara Kandung -->
          <div class="form-group">
            <label for="saudaraKandung"> Saudara Kandung </label>
            <div class="row">
              <div class="col-md-3 form-group">
                <label for="namaSaudara"> Nama </label>
                <input
                  class="form-control"
                  name="namaSaudara"
                  id="namaSaudara"
                  placeholder="Nama saudara"
                  type="text"
                />
              </div>
              <div class="col-md-3 form-group">
                <label for="usiaSaudara"> Usia </label>
                <input
                  class="form-control"
                  name="usiaSaudara"
                  id="usiaSaudara"
                  placeholder="Usia"
                  type="text"
                />
              </div>
              <div class="col-md-3 form-group">
                <label for="jenisKelaminSaudara"> Jenis Kelamin </label>
                <input
                  class="form-control"
                  name="jenisKelaminSaudara"
                  id="jenisKelaminSaudara"
                  placeholder="Jenis Kelamin"
                  type="text"
                />
              </div>
              <div class="col-md-3 form-group">
                <label for="specialNeedSaudara"> Special Need </label>
                <input
                  class="form-control"
                  name="specialNeedSaudara"
                  id="specialNeedSaudara"
                  placeholder="Special Need"
                  type="text"
                />
              </div>
            </div>
          </div>

          <!-- Sekolah -->
          <div class="form-group">
            <label for="sekolah"> Bila anak sudah sekolah </label>
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="namaSekolah"> Nama sekolah </label>
                <input
                  class="form-control"
                  name="namaSekolah"
                  id="namaSekolah"
                  placeholder="Nama sekolah"
                  type="text"
                />
              </div>
              <div class="col-md-6 form-group">
                <label for="kelas"> Kelas </label>
                <input
                  class="form-control"
                  name="kelas"
                  id="kelas"
                  placeholder="Kelas"
                  type="text"
                />
              </div>
              <div class="col-md-6 form-group">
                <label for="namaGuru"> Nama Guru </label>
                <input
                  class="form-control"
                  name="namaGuru"
                  id="namaGuru"
                  placeholder="Nama Guru"
                  type="text"
                />
              </div>
              <div class="col-md-6 form-group">
                <label for="telpGuru"> Telp </label>
                <input
                  class="form-control"
                  name="telpGuru"
                  id="telpGuru"
                  placeholder="Telp"
                  type="text"
                />
              </div>
            </div>
          </div>

          <!-- Terapi yang telah / sedang dilakukan -->
          <div class="form-group">
            <label for="terapi"> Terapi yang telah / sedang dilakukan </label>
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="jenisTerapi"> Jenis Terapi </label>
                <input
                  class="form-control"
                  name="jenisTerapi"
                  id="jenisTerapi"
                  placeholder="Jenis Terapi"
                  type="text"
                />
              </div>
              <div class="col-md-6 form-group">
                <label for="namaTerapis"> Nama Terapis / klinik </label>
                <input
                  class="form-control"
                  name="namaTerapis"
                  id="namaTerapis"
                  placeholder="Nama Terapis / klinik"
                  type="text"
                />
              </div>
              <div class="col-md-6 form-group">
                <label for="durasiTerapi"> Durasi </label>
                <input
                  class="form-control"
                  name="durasiTerapi"
                  id="durasiTerapi"
                  placeholder="Durasi"
                  type="text"
                />
              </div>
              <div class="col-md-6 form-group">
                <label for="telpTerapis"> Telp </label>
                <input
                  class="form-control"
                  name="telpTerapis"
                  id="telpTerapis"
                  placeholder="Telp"
                  type="text"
                />
              </div>
            </div>
          </div>
        </div>

        <!-- Tombol Navigasi -->
        <div class="text-end">
          <button class="btn btn-secondary me-2" type="button" onclick="window.history.back()">Sebelumnya</button>
          <button class="btn btn-primary" type="submit">Selanjutnya</button>
        </div>
      </form>
    </div>
  </body>
</html>
