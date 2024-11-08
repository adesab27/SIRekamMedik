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
      <form action="form4.html">
        <div class="mt-4">
          <h5>Status Kesehatan Anak</h5>
          <p>(Kondisi atau kejadian yang dialami anak)</p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-check">
                <input
                  class="form-check-input"
                  id="penyakitSerius"
                  type="checkbox"
                />
                <label class="form-check-label" for="penyakitSerius">
                  Penyakit Serius
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  id="benturanKepala"
                  type="checkbox"
                />
                <label class="form-check-label" for="benturanKepala">
                  Benturan Di kepala
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  id="dirawatRS"
                  type="checkbox"
                />
                <label class="form-check-label" for="dirawatRS">
                  Dirawat di RS
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  id="pengobatanJangkaPanjang"
                  type="checkbox"
                />
                <label class="form-check-label" for="pengobatanJangkaPanjang">
                  Pernah atau sedang mendapat pengobatan jangka panjang
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  id="riwayatKejang"
                  type="checkbox"
                />
                <label class="form-check-label" for="riwayatKejang">
                  Memiliki riwayat kejang
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  id="riwayatFlu"
                  type="checkbox"
                />
                <label class="form-check-label" for="riwayatFlu">
                  Memiliki riwayat flu
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  id="riwayatPneumonia"
                  type="checkbox"
                />
                <label class="form-check-label" for="riwayatPneumonia">
                  Memiliki riwayat pneumonia
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  id="masalahPerkembangan"
                  type="checkbox"
                />
                <label class="form-check-label" for="masalahPerkembangan">
                  Masalah perkembangan pada pada usia 0 - 2 tahun
                </label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-check">
                <input
                  class="form-check-input"
                  id="riwayatAlergi"
                  type="checkbox"
                />
                <label class="form-check-label" for="riwayatAlergi">
                  Riwayat alergi
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  id="infeksiTelinga"
                  type="checkbox"
                />
                <label class="form-check-label" for="infeksiTelinga">
                  Infeksi telinga
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  id="dietSuplemen"
                  type="checkbox"
                />
                <label class="form-check-label" for="dietSuplemen">
                  melakukan diet / suplemen tertentu
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  id="menggunakanKacamata"
                  type="checkbox"
                />
                <label class="form-check-label" for="menggunakanKacamata">
                  Menggunakan kacamata
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  id="riwayatAsma"
                  type="checkbox"
                />
                <label class="form-check-label" for="riwayatAsma">
                  Memiliki riwayat Asma
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  id="riwayatSinusitis"
                  type="checkbox"
                />
                <label class="form-check-label" for="riwayatSinusitis">
                  Memiliki riwayat sinusitis
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  id="tesPendengaranPenglihatan"
                  type="checkbox"
                />
                <label class="form-check-label" for="tesPendengaranPenglihatan">
                  Melakukan tes (pendengaran / penglihatan)
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-4">
          <h5>Perkembangan Anak</h5>
          <div class="row">
            <div class="col-md-12">
              <h6>Riwayat Perkembangan Motorik</h6>
              <div class="d-flex justify-content-between">
                <div>
                  <label for="tengkurap"> Tengkurap </label>
                  <input
                    class="form-control"
                    id="tengkurap"
                    placeholder="Bulan"
                    type="text"
                  />
                </div>
                <div>
                  <label for="duduk"> Duduk </label>
                  <input
                    class="form-control"
                    id="duduk"
                    placeholder="Bulan"
                    type="text"
                  />
                </div>
                <div>
                  <label for="merangkak"> Merangkak </label>
                  <input
                    class="form-control"
                    id="merangkak"
                    placeholder="Bulan"
                    type="text"
                  />
                </div>
                <div>
                  <label for="berdiri"> Berdiri </label>
                  <input
                    class="form-control"
                    id="berdiri"
                    placeholder="Bulan"
                    type="text"
                  />
                </div>
                <div>
                  <label for="berjalan"> Berjalan </label>
                  <input
                    class="form-control"
                    id="berjalan"
                    placeholder="Bulan"
                    type="text"
                  />
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-4">
              <h6>Riwayat Perkembangan Bahasa</h6>
              <div class="d-flex justify-content-between">
                <div>
                  <label for="bubbling"> Bubbling </label>
                  <input
                    class="form-control"
                    id="bubbling"
                    placeholder="Bulan"
                    type="text"
                  />
                </div>
                <div>
                  <label for="kataPertama"> Kata Pertama </label>
                  <input
                    class="form-control"
                    id="kataPertama"
                    placeholder="Bulan"
                    type="text"
                  />
                </div>
                <div>
                  <label for="mengulangKata"> Mengulang kata </label>
                  <input
                    class="form-control"
                    id="mengulangKata"
                    placeholder="Bulan"
                    type="text"
                  />
                </div>
                <div>
                  <label for="kalimatPertama"> Kalimat pertama </label>
                  <input
                    class="form-control"
                    id="kalimatPertama"
                    placeholder="Bulan"
                    type="text"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-4">
          <h5>Catatan Tambahan</h5>
          <textarea class="form-control w-100" rows="4"></textarea>
        </div>
        <div class="mt-4 text-end">
        <button class="btn btn-secondary me-2" type="button" onclick="window.history.back()">Sebelumnya</button>
        <button class="btn btn-primary" type="button" onclick="window.location.href='{{ url('/observasi/form4') }}'">Selanjutnya</button>
        </div>
      </form>
    </div>
  </body>
</html>
