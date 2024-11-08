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
      <form action="form2.html">
        <div class="form-section">
          <h5>Data Anak</h5>
          <div class="row">
            <div class="col-md-6 form-group">
              <label for="namaAnak"> Nama Anak </label>
              <input
                class="form-control"
                id="namaAnak"
                placeholder="Masukkan Nama"
                type="text"
              />
            </div>
            <div class="col-md-6 form-group">
              <label for="tempatLahir"> Tempat Lahir </label>
              <input
                class="form-control"
                id="tempatLahir"
                placeholder="Tempat lahir"
                type="text"
              />
            </div>
            <div class="col-md-6 form-group">
              <label for="namaPanggilan"> Nama Panggilan anak </label>
              <input
                class="form-control"
                id="namaPanggilan"
                placeholder="Masukkan nama panggilan anak"
                type="text"
              />
            </div>
            <div class="col-md-6 form-group">
              <label for="tanggalLahir"> Tanggal Lahir </label>
              <input
                class="form-control"
                id="tanggalLahir"
                placeholder="DD/MM/YYYY"
                type="date"
              />
            </div>
            <div class="col-md-6 form-group">
              <label for="jenisKelamin"> Jenis Kelamin </label>
              <input
                class="form-control"
                id="jenisKelamin"
                placeholder="Jenis Kelamin"
                type="text"
              />
            </div>
            <div class="col-md-6 form-group">
              <label for="umurAnak"> Umur Anak </label>
              <input
                class="form-control"
                id="umurAnak"
                placeholder="Dalam Tahun dan bulan"
                type="text"
              />
            </div>
          </div>
        </div>
        <div class="form-section">
          <h5>Data Orang Tua</h5>
          <div class="row">
            <div class="col-md-6 form-group">
              <label for="namaAyah"> Nama Ayah </label>
              <input
                class="form-control"
                id="namaAyah"
                placeholder="Masukkan Nama"
                type="text"
              />
            </div>
            <div class="col-md-6 form-group">
              <label for="namaIbu"> Nama Ibu </label>
              <input
                class="form-control"
                id="namaIbu"
                placeholder="Masukkan Nama"
                type="text"
              />
            </div>
            <div class="col-md-6 form-group">
              <label for="usiaAyah"> Usia Ayah </label>
              <input
                class="form-control"
                id="usiaAyah"
                placeholder="Masukkan Usia"
                type="text"
              />
            </div>
            <div class="col-md-6 form-group">
              <label for="usiaIbu"> Usia Ibu </label>
              <input
                class="form-control"
                id="usiaIbu"
                placeholder="Masukkan Usia"
                type="text"
              />
            </div>
            <div class="col-md-6 form-group">
              <label for="agamaAyah"> Agama </label>
              <input
                class="form-control"
                id="agamaAyah"
                placeholder="Masukkan Agama"
                type="text"
              />
            </div>
            <div class="col-md-6 form-group">
              <label for="agamaIbu"> Agama </label>
              <input
                class="form-control"
                id="agamaIbu"
                placeholder="Masukkan Agama"
                type="text"
              />
            </div>
            <div class="col-md-6 form-group">
              <label for="pekerjaanAyah"> Pekerjaan </label>
              <input
                class="form-control"
                id="pekerjaanAyah"
                placeholder="Masukkan Pekerjaan Ayah"
                type="text"
              />
            </div>
            <div class="col-md-6 form-group">
              <label for="pekerjaanIbu"> Pekerjaan </label>
              <input
                class="form-control"
                id="pekerjaanIbu"
                placeholder="Masukkan Pekerjaan Ibu"
                type="text"
              />
            </div>
            <div class="col-12 form-group">
              <label for="alamatLengkap"> Alamat lengkap </label>
              <textarea
                class="form-control"
                id="alamatLengkap"
                placeholder="Masukkan Alamat lengkap"
                rows="3"
              ></textarea>
            </div>
          </div>
        </div>
        <div class="form-section">
          <h5>Data Tambahan</h5>
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
                  id="diagnosaDiberikan"
                  placeholder="Masukkan Diagnosa yang diberikan"
                  rows="3"
                ></textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="saudaraKandung"> Saudara Kandung </label>
            <div class="row">
              <div class="col-md-3 form-group">
                <label for="namaSaudara"> Nama </label>
                <input
                  class="form-control"
                  id="namaSaudara"
                  placeholder="Nama saudara"
                  type="text"
                />
              </div>
              <div class="col-md-3 form-group">
                <label for="usiaSaudara"> Usia </label>
                <input
                  class="form-control"
                  id="usiaSaudara"
                  placeholder="Usia"
                  type="text"
                />
              </div>
              <div class="col-md-3 form-group">
                <label for="jenisKelaminSaudara"> Jenis Kelamin </label>
                <input
                  class="form-control"
                  id="jenisKelaminSaudara"
                  placeholder="Jenis Kelamin"
                  type="text"
                />
              </div>
              <div class="col-md-3 form-group">
                <label for="specialNeedSaudara"> Special Need </label>
                <input
                  class="form-control"
                  id="specialNeedSaudara"
                  placeholder="Special Need"
                  type="text"
                />
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="sekolah"> Bila anak sudah sekolah </label>
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="namaSekolah"> Nama sekolah </label>
                <input
                  class="form-control"
                  id="namaSekolah"
                  placeholder="Nama sekolah"
                  type="text"
                />
              </div>
              <div class="col-md-6 form-group">
                <label for="kelas"> Kelas </label>
                <input
                  class="form-control"
                  id="kelas"
                  placeholder="Kelas"
                  type="text"
                />
              </div>
              <div class="col-md-6 form-group">
                <label for="namaGuru"> Nama Guru </label>
                <input
                  class="form-control"
                  id="namaGuru"
                  placeholder="Nama Guru"
                  type="text"
                />
              </div>
              <div class="col-md-6 form-group">
                <label for="telpGuru"> Telp </label>
                <input
                  class="form-control"
                  id="telpGuru"
                  placeholder="Telp"
                  type="text"
                />
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="terapi"> Terapi yang telah / sedang dilakukan </label>
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="jenisTerapi"> Jenis Terapi </label>
                <input
                  class="form-control"
                  id="jenisTerapi"
                  placeholder="Jenis Terapi"
                  type="text"
                />
              </div>
              <div class="col-md-6 form-group">
                <label for="namaTerapis"> Nama Terapis / klinik </label>
                <input
                  class="form-control"
                  id="namaTerapis"
                  placeholder="Nama Terapis / klinik"
                  type="text"
                />
              </div>
              <div class="col-md-6 form-group">
                <label for="durasiTerapi"> Durasi </label>
                <input
                  class="form-control"
                  id="durasiTerapi"
                  placeholder="Durasi"
                  type="text"
                />
              </div>
              <div class="col-md-6 form-group">
                <label for="telpTerapis"> Telp </label>
                <input
                  class="form-control"
                  id="telpTerapis"
                  placeholder="Telp"
                  type="text"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="text-end">
          <!-- <button class="btn btn-primary" href="{{ url('/observasi/form2')}}">Selanjutnya</button> -->
          <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('/observasi/form2') }}'">Selanjutnya</button>
        </div>
      </form>
    </div>
  </body>
</html>
