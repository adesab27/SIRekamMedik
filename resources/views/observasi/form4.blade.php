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
      <form  action="datapasien.html">
        <div class="mb-3">
          <label class="form-label" for="sleepPattern">
            Apakah anak memiliki gangguan pola tidur? Jam berapa anak tidur
            malam? Jelaskan!
          </label>
          <textarea class="form-control" id="sleepPattern" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label" for="wakeUpPattern">
            Berapa kali dalam semalam anak terbangun? Apa yang anak kerjakan
            ketika terbangun? Jelaskan!
          </label>
          <textarea class="form-control" id="wakeUpPattern" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label">
            Centang kebiasaan yang dimiliki anak!
          </label>
          <div class="form-check">
            <input class="form-check-input" id="habit1" type="checkbox" />
            <label class="form-check-label" for="habit1">
              Kemampuan sedot yang kuat di masa bayi
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" id="habit2" type="checkbox" />
            <label class="form-check-label" for="habit2">
              Memiliki riwayat sering muntah, tersedak (reflux)
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" id="habit3" type="checkbox" />
            <label class="form-check-label" for="habit3">
              Memiliki riwayat masalah nafsu makan atau sulit menaikkan Berat
              badan
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" id="habit4" type="checkbox" />
            <label class="form-check-label" for="habit4">
              Memiliki kecenderungan menghindari / memilih makanan berdasarkan
              karakteristik tertentu
            </label>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="additionalNotes">
            Catatan Tambahan
            <span class="text-muted">
              (Berikan penjelasan terkait pernyataan diatas)
            </span>
          </label>
          <textarea
            class="form-control"
            id="additionalNotes"
            rows="3"
          ></textarea>
        </div>
        <div class="text-end">
        <button class="btn btn-secondary me-2" type="button" onclick="window.history.back()">Sebelumnya</button>
          <button class="btn btn-primary" type="submit">Simpan Data</button>
        </div>
      </form>
      <script>
        function showAlert() {
          alert("Data berhasil disimpan!");
          return true; // Allow the form to submit
        }
      </script>
    </div>
  </body>
</html>
