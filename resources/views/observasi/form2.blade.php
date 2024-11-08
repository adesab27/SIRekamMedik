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
    <script src="assets/script.js" defer></script>
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
      <form action="form3.html">
        <div class="mb-3 row">
          <div class="col-md-6">
            <label class="form-label" for="usiaIbu">
              Usia Ibu Ketika Hamil
            </label>
            <input class="form-control" id="usiaIbu" type="text" />
          </div>
          <div class="col-md-6">
            <label class="form-label" for="beratBadanIbu">
              Berat Badan Ibu Ketika Hamil
            </label>
            <input class="form-control" id="beratBadanIbu" type="text" />
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="hasilPemeriksaan">
            Hasil Pemeriksaan TORSCH (Jika Ada)
          </label>
          <textarea
            class="form-control"
            id="hasilPemeriksaan"
            rows="3"
          ></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label"> Keluhan Saat Hamil (Checklist) </label>
          <div class="form-check">
            <input class="form-check-input" id="keluhan1" type="checkbox" />
            <label class="form-check-label" for="keluhan1">
              Pernah Mengalami Keguguran
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" id="keluhan2" type="checkbox" />
            <label class="form-check-label" for="keluhan2">
              Mengalami stress psikologis, sakit atau komplikasi
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" id="keluhan3" type="checkbox" />
            <label class="form-check-label" for="keluhan3">
              Mengkonsumsi obat-obatan selama kehamilan
            </label>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Proses Persalinan</label>
        <div class="form-check">
            <input class="form-check-input" id="persalinan1" type="radio" name="persalinan" value="spontan" onchange="checkPregnancyDuration()" />
            <label class="form-check-label" for="persalinan1">Spontan</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" id="persalinan2" type="radio" name="persalinan" value="forceps" onchange="checkPregnancyDuration()" />
            <label class="form-check-label" for="persalinan2">Forceps</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" id="persalinan3" type="radio" name="persalinan" value="vacuum" onchange="checkPregnancyDuration()" />
            <label class="form-check-label" for="persalinan3">Vacuum</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" id="persalinan4" type="radio" name="persalinan" value="c-section" onchange="checkPregnancyDuration()" />
            <label class="form-check-label" for="persalinan4">C-Section</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" id="persalinan5" type="radio" name="persalinan" value="pre-mature" onchange="checkPregnancyDuration()" />
            <label class="form-check-label" for="persalinan5">Pre-mature</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" id="persalinan6" type="radio" name="persalinan" value="post-mature" onchange="checkPregnancyDuration()" />
            <label class="form-check-label" for="persalinan6">Post-mature</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" id="persalinan7" type="radio" name="persalinan" value="full-term" onchange="checkPregnancyDuration()" />
            <label class="form-check-label" for="persalinan7">Full-term</label>
        </div>
        <div class="mb-3" id="lamaKehamilanContainer" style="display: none;">
            <label class="form-label" for="lamaKehamilan">Lama Kehamilan (dalam minggu)</label>
            <input class="form-control" id="lamaKehamilan" type="number" min="1" />
        </div>
        <div class="mb-3">
          <label class="form-label">
            Kondisi Lahir (isi sesuai kondisi dan centang yang diperlukan)
          </label>
          <div class="row">
            <div class="col-md-3">
              <label class="form-label" for="beratBadanLahir">
                Berat Badan
              </label>
              <input
                class="form-control"
                id="beratBadanLahir"
                placeholder="kg"
                type="text"
              />
            </div>
            <div class="col-md-3">
              <label class="form-label" for="panjangBadanLahir">
                Panjang Badan
              </label>
              <input
                class="form-control"
                id="panjangBadanLahir"
                placeholder="cm"
                type="text"
              />
            </div>
            <div class="col-md-3">
              <label class="form-label" for="lingkarKepalaLahir">
                Lingkar Kepala
              </label>
              <input
                class="form-control"
                id="lingkarKepalaLahir"
                placeholder="cm"
                type="text"
              />
            </div>
            <div class="col-md-3">
              <label class="form-label" for="skorAPGAR"> Skor APGAR </label>
              <input class="form-control" id="skorAPGAR" type="text" />
            </div>
          </div>
        </div>
        <div class="mb-3">
          <div class="form-check">
            <input
              class="form-check-input"
              id="kondisiLahir1"
              type="checkbox"
            />
            <label class="form-check-label" for="kondisiLahir1">
              Komplikasi / Kesulitan selama proses kelahiran
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              id="kondisiLahir2"
              type="checkbox"
            />
            <label class="form-check-label" for="kondisiLahir2">
              Langsung menangis ketika lahir
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              id="kondisiLahir3"
              type="checkbox"
            />
            <label class="form-check-label" for="kondisiLahir3">
              Memerlukan perawatan khusus setelah masa kelahiran
            </label>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="catatanTambahan">
            Catatan Tambahan
          </label>
          <textarea
            class="form-control"
            id="catatanTambahan"
            rows="3"
          ></textarea>
        </div>
        <div class="text-end">
          <button class="btn btn-secondary me-2" type="button" onclick="window.history.back()">Sebelumnya</button>
          <button class="btn btn-primary" type="submit">Selanjutnya</button>
        </div>
      </form>
    </div>
  </body>
</html>
