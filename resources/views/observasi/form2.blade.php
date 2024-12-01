<div id="datatambahan-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
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
          <input class="form-control" name="diagnosaOleh" id="diagnosaOleh" placeholder="Nama dokter atau ahli"
            type="text" required />
        </div>
        <div class="col-md-6 form-group">
          <label for="diagnosaUsia">
            Diusia berapa diagnosa diberikan
          </label>
          <input class="form-control" name="diagnosaUsia" id="diagnosaUsia" placeholder="Tanggal atau umur" type="text"
            required />
        </div>
        <div class="col-12 form-group">
          <label for="diagnosaDiberikan">
            Diagnosa yang diberikan :
          </label>
          <textarea class="form-control" name="diagnosaDiberikan" id="diagnosaDiberikan"
            placeholder="Masukkan Diagnosa yang diberikan" rows="3" required></textarea>
        </div>
      </div>
    </div>

    <!-- Saudara Kandung -->
    <div class="form-group">
      <label for="saudaraKandung"> Saudara Kandung </label>
      <div class="row">
        <div class="col-md-3 form-group">
          <label for="namaSaudara"> Nama </label>
          <input class="form-control" name="namaSaudara" id="namaSaudara" placeholder="Nama saudara" type="text"
            required />
        </div>
        <div class="col-md-3 form-group">
          <label for="usiaSaudara"> Usia </label>
          <input class="form-control" name="usiaSaudara" id="usiaSaudara" placeholder="Usia" type="text" required />
        </div>
        <div class="col-md-3 form-group">
          <label for="jenisKelaminSaudara"> Jenis Kelamin </label>
          <select class="form-control" name="jenisKelaminSaudara" id="jenisKelaminSaudara" required>
            <option value="" disabled selected>Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
            <option value="Perempuan">Tidak ada</option>
          </select>
        </div>
        <div class="col-md-3 form-group">
          <label for="specialNeedSaudara"> Special Need </label>
          <input class="form-control" name="specialNeedSaudara" id="specialNeedSaudara" placeholder="Special Need"
            type="text" required />
        </div>
      </div>
    </div>

    <!-- Sekolah -->
    <div class="form-group">
      <label for="sekolah"> Bila anak sudah sekolah </label>
      <div class="row">
        <div class="col-md-6 form-group">
          <label for="namaSekolah"> Nama sekolah </label>
          <input class="form-control" name="namaSekolah" id="namaSekolah" placeholder="Nama sekolah" type="text"
            required />
        </div>
        <div class="col-md-6 form-group">
          <label for="kelas"> Kelas </label>
          <input class="form-control" name="kelas" id="kelas" placeholder="Kelas" type="text" required />
        </div>
        <div class="col-md-6 form-group">
          <label for="namaGuru"> Nama Guru </label>
          <input class="form-control" name="namaGuru" id="namaGuru" placeholder="Nama Guru" type="text" required />
        </div>
        <div class="col-md-6 form-group">
          <label for="telpGuru"> Telp </label>
          <input class="form-control" name="telpGuru" id="telpGuru" placeholder="Telp" type="text" required />
        </div>
      </div>
    </div>

    <!-- Terapi yang telah / sedang dilakukan -->
    <div class="form-group">
      <label for="terapi"> Terapi yang telah / sedang dilakukan </label>
      <div class="row">
        <div class="col-md-6 form-group">
          <label for="jenisTerapi"> Jenis Terapi </label>
          <input class="form-control" name="jenisTerapi" id="jenisTerapi" placeholder="Jenis Terapi" type="text"
            required />
        </div>
        <div class="col-md-6 form-group">
          <label for="namaTerapis"> Nama Terapis / klinik </label>
          <input class="form-control" name="namaTerapis" id="namaTerapis" placeholder="Nama Terapis / klinik"
            type="text" required />
        </div>
        <div class="col-md-6 form-group">
          <label for="durasiTerapi"> Durasi </label>
          <input class="form-control" name="durasiTerapi" id="durasiTerapi" placeholder="Durasi" type="text" required />
        </div>
        <div class="col-md-6 form-group">
          <label for="telpTerapis"> Telp </label>
          <input class="form-control" name="telpTerapis" id="telpTerapis" placeholder="Telp" type="text" required />
        </div>
      </div>
    </div>
  </div>
  <div class="text-end d-flex justify-content-end gap-2 mt-4">
    <button class="btn btn-secondary" type="button" onclick="stepper.previous()">Sebelumnya</button>
    <button type="button" class="btn btn-primary" onclick="nextStep()">Selanjutnya</button>
  </div>
</div>