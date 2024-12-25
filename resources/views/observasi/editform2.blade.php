<div id="datatambahan-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
  <div class="form-section">
    <h5>Data Tambahan</h5>

    <!-- Riwayat Diagnosa -->
    <div class="form-group">
      <label for="riwayatDiagnosa">Riwayat Diagnosa <small> (apabila sudah ada diagnosa) </small></label>
      <div class="row">
        <div class="col-md-6 form-group">
          <label for="diagnosaOleh">Diagnosa diberikan oleh:</label>
          <input class="form-control @error('diagnosaOleh') is-invalid @enderror" name="diagnosaOleh" id="diagnosaOleh"
            placeholder="Nama dokter atau ahli" type="text" required pattern="[A-Za-z\s\-.]+"
            title="Hanya diperbolehkan huruf, spasi, tanda hubung (-), dan titik (.)"
            value="{{ old('diagnosaOleh', $data->diagnosaOleh ?? '') }}" />
          @error('diagnosaOleh')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
        </div>

        <div class="col-md-6 form-group">
          <label for="diagnosaUsia">Diusia berapa diagnosa diberikan</label>
          <input class="form-control" name="diagnosaUsia" id="diagnosaUsia" placeholder="Tanggal atau umur" type="text"
            required value="{{ old('diagnosaUsia', $data->diagnosaUsia ?? '') }}" />
          <div class="invalid-feedback">
            Harap masukkan data yang sesuai
          </div>
        </div>
        <div class="col-12 form-group">
          <label for="diagnosaDiberikan">Diagnosa yang diberikan:</label>
          <textarea class="form-control" name="diagnosaDiberikan" id="diagnosaDiberikan"
            placeholder="Masukkan Diagnosa yang diberikan" rows="3"
            required>{{ old('diagnosaDiberikan', $data->diagnosaDiberikan ?? '') }}</textarea>
          <div class="invalid-feedback">
            Harap masukkan data yang sesuai
          </div>
        </div>
      </div>
    </div>

    <!-- Saudara Kandung -->
    <div class="form-group">
      <label for="saudaraKandung">Saudara Kandung</label>
      <div class="row">
        <div class="col-md-3 form-group">
          <label for="namaSaudara">Nama</label>
          <input class="form-control" name="namaSaudara" id="namaSaudara" placeholder="Nama saudara" type="text"
            required pattern="[A-Za-z\s\-]+" title="Hanya diperbolehkan huruf, spasi, dan tanda hubung (-)."
            value="{{ old('namaSaudara', $data->namaSaudara ?? '') }}" />
          <div class="invalid-feedback">
            Harap masukkan data yang sesuai
          </div>
        </div>
        <div class="col-md-3 form-group">
          <label for="usiaSaudara">Usia</label>
          <input class="form-control" name="usiaSaudara" id="usiaSaudara" placeholder="Usia" type="text" required
            pattern="^-?\d*$" title="Harap masukkan angka atau tanda minus."
            value="{{ old('usiaSaudara', $data->usiaSaudara ?? '') }}" />
          <div class="invalid-feedback">
            Harap masukkan data yang sesuai
          </div>
        </div>
        <div class="col-md-3 form-group">
          <label for="jenisKelaminSaudara">Jenis Kelamin</label>
          <select class="form-control" name="jenisKelaminSaudara" id="jenisKelaminSaudara" required>
            <option value="" disabled selected>Pilih Jenis Kelamin</option>
            <option value="Laki-laki" {{ old('jenisKelaminSaudara', $data->jenisKelaminSaudara ?? '') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="Perempuan" {{ old('jenisKelaminSaudara', $data->jenisKelaminSaudara ?? '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            <option value="Tidak ada" {{ old('jenisKelaminSaudara', $data->jenisKelaminSaudara ?? '') == 'Tidak ada' ? 'selected' : '' }}>Tidak ada</option>
          </select>
        </div>
        <div class="col-md-3 form-group">
          <label for="specialNeedSaudara">Special Need</label>
          <input class="form-control" name="specialNeedSaudara" id="specialNeedSaudara" placeholder="Special Need"
            type="text" required pattern="[A-Za-z\s\-]*" title="Hanya diperbolehkan huruf, spasi, dan tanda hubung (-)."
            value="{{ old('specialNeedSaudara', $data->specialNeedSaudara ?? '') }}" />
          <div class="invalid-feedback">
            Harap masukkan data yang sesuai
          </div>
        </div>
      </div>
    </div>

    <!-- Sekolah -->
    <div class="form-group">
      <label for="sekolah">Bila anak sudah sekolah</label>
      <div class="row">
        <div class="col-md-6 form-group">
          <label for="namaSekolah">Nama sekolah</label>
          <input class="form-control" name="namaSekolah" id="namaSekolah" placeholder="Nama sekolah" type="text"
            required value="{{ old('namaSekolah', $data->namaSekolah ?? '') }}" />
        </div>
        <div class="col-md-6 form-group">
          <label for="kelas">Kelas</label>
          <input class="form-control" name="kelas" id="kelas" placeholder="Kelas" type="text" required
            value="{{ old('kelas', $data->kelas ?? '') }}" />
        </div>
        <div class="col-md-6 form-group">
          <label for="namaGuru">Nama Guru</label>
          <input class="form-control" name="namaGuru" id="namaGuru" placeholder="Nama Guru" type="text" required
            pattern="[A-Za-z\s\-]+" title="Hanya diperbolehkan huruf, spasi, dan tanda hubung (-)."
            value="{{ old('namaGuru', $data->namaGuru ?? '') }}" />
          <div class="invalid-feedback">
            Harap masukkan data yang sesuai
          </div>
        </div>
        <div class="col-md-6 form-group">
          <label for="telpGuru">Telp</label>
          <input class="form-control" name="telpGuru" id="telpGuru" placeholder="Telp" type="text" required
            pattern="^-?\d*$" title="Harap masukkan angka atau tanda minus."
            value="{{ old('telpGuru', $data->telpGuru ?? '') }}" />
          <div class="invalid-feedback">
            Harap masukkan hanya angka.
          </div>
        </div>
      </div>
    </div>

    <!-- Terapi yang telah / sedang dilakukan -->
    <div class="form-group">
      <label for="terapi">Terapi yang telah / sedang dilakukan</label>
      <div class="row">
        <div class="col-md-6 form-group">
          <label for="jenisTerapi">Jenis Terapi</label>
          <input class="form-control" name="jenisTerapi" id="jenisTerapi" placeholder="Jenis Terapi" type="text"
            required pattern="[A-Za-z\s\-]*" title="Hanya diperbolehkan huruf, spasi, dan tanda hubung (-)."
            value="{{ old('jenisTerapi', $data->jenisTerapi ?? '') }}" />
          <div class="invalid-feedback">
            Harap masukkan data yang sesuai
          </div>
        </div>
        <div class="col-md-6 form-group">
          <label for="namaTerapis">Nama Terapis / Klinik</label>
          <input class="form-control" name="namaTerapis" id="namaTerapis" placeholder="Nama Terapis / klinik"
            type="text" required pattern="[A-Za-z\s\-]*" title="Hanya diperbolehkan huruf, spasi, dan tanda hubung (-)."
            value="{{ old('namaTerapis', $data->namaTerapis ?? '') }}" />
          <div class="invalid-feedback">
            Harap masukkan data yang sesuai
          </div>
        </div>
        <div class="col-md-6 form-group">
          <label for="durasiTerapi">Durasi</label>
          <input class="form-control" name="durasiTerapi" id="durasiTerapi" placeholder="Durasi" type="text" required
            value="{{ old('durasiTerapi', $data->durasiTerapi ?? '') }}" />
        </div>
        <div class="col-md-6 form-group">
          <label for="telpTerapis">Telp</label>
          <input class="form-control" name="telpTerapis" id="telpTerapis" placeholder="Telp" type="text" required
            pattern="^-?\d*$" title="Harap masukkan angka atau tanda minus."
            value="{{ old('telpTerapis', $data->telpTerapis ?? '') }}" />
          <div class="invalid-feedback">
            Harap masukkan data yang sesuai
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="text-end d-flex justify-content-end gap-2 mt-4">
    <button class="btn btn-secondary" type="button" onclick="stepper.previous()">Sebelumnya</button>
    <button type="button" class="btn btn-primary" onclick="nextStep()">Selanjutnya</button>
  </div>
</div>