<div id="datariwayat-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
    <div class="form-section">
        <div class="mb-3 row">
            <div class="col-md-6">
                <label class="form-label" for="usiaIbu">Usia Ibu Ketika Hamil</label>
                <input class="form-control" id="usiaIbu" name="usia_ibu" type="number" placeholder="Tahun" required
                    min="0" value="{{ old('usia_ibu', $form3Data->usia_ibu ?? '') }}" />
                <div class="invalid-feedback">Harap masukkan data yang sesuai</div>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="beratBadanIbu">Berat Badan Ibu Ketika Hamil</label>
                <input class="form-control" id="beratBadanIbu" name="berat_badan_ibu" type="number" placeholder="kg"
                    required min="0" step="0.01" value="{{ old('berat_badan_ibu', $form3Data->berat_badan_ibu ?? '') }}" />
                <div class="invalid-feedback">Harap masukkan data yang sesuai</div>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="hasilPemeriksaan">Hasil Pemeriksaan Medis (Jika Ada)</label>
            <textarea class="form-control" id="hasilPemeriksaan" name="hasil_pemeriksaan" rows="3" required>{{ old('hasil_pemeriksaan', $form3Data->hasil_pemeriksaan ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Keluhan Saat Hamil (Checklist)</label>
            @foreach ($form3 as $f)
                <div class="form-check">
                    <input class="form-check-input" id="keluhan{{ $f['id'] }}" name="{{ $f['name'] }}" type="checkbox"
                    {{ old($f['name'], $form3Data->{$f['name']} ?? false) ? 'checked' : '' }} />
                    <label class="form-check-label" for="keluhan{{ $f['id'] }}">{{ $f['value'] }}</label>
                </div>
            @endforeach
        </div>

        <div class="mb-3">
            <label class="form-label" for="prosesPersalinan">Proses Persalinan</label>
            <select class="form-select" id="prosesPersalinan" name="proses_persalinan" required>
                <option value="" disabled {{ old('proses_persalinan', $form3Data->proses_persalinan ?? '') == '' ? 'selected' : '' }}>Pilih Proses Persalinan</option>
                <option value="spontan" {{ old('proses_persalinan', $form3Data->proses_persalinan ?? '') == 'spontan' ? 'selected' : '' }}>Spontan</option>
                <option value="forceps" {{ old('proses_persalinan', $form3Data->proses_persalinan ?? '') == 'forceps' ? 'selected' : '' }}>Forceps</option>
                <option value="vacuum" {{ old('proses_persalinan', $form3Data->proses_persalinan ?? '') == 'vacuum' ? 'selected' : '' }}>Vacuum</option>
                <option value="c-section" {{ old('proses_persalinan', $form3Data->proses_persalinan ?? '') == 'c-section' ? 'selected' : '' }}>C-Section</option>
                <option value="pre-mature" {{ old('proses_persalinan', $form3Data->proses_persalinan ?? '') == 'pre-mature' ? 'selected' : '' }}>Pre-mature</option>
                <option value="post-mature" {{ old('proses_persalinan', $form3Data->proses_persalinan ?? '') == 'post-mature' ? 'selected' : '' }}>Post-mature</option>
                <option value="full-term" {{ old('proses_persalinan', $form3Data->proses_persalinan ?? '') == 'full-term' ? 'selected' : '' }}>Full-term</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Kondisi Lahir</label>
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label" for="beratBadanLahir">Berat Badan</label>
                    <input class="form-control" id="beratBadanLahir" name="berat_badan_lahir" type="text"
                        placeholder="kg" required inputmode="decimal" value="{{ old('berat_badan_lahir', $form3Data->berat_badan_lahir ?? '') }}" />
                    <div class="invalid-feedback">Harap masukkan data yang sesuai</div>
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="panjangBadanLahir">Panjang Badan</label>
                    <input class="form-control" id="panjangBadanLahir" name="panjang_badan_lahir" type="number"
                        placeholder="cm" required min="0" step="1" value="{{ old('panjang_badan_lahir', $form3Data->panjang_badan_lahir ?? '') }}" />
                    <div class="invalid-feedback">Harap masukkan data yang sesuai</div>
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="lingkarKepalaLahir">Lingkar Kepala</label>
                    <input class="form-control" id="lingkarKepalaLahir" name="lingkar_kepala_lahir" type="number"
                        placeholder="cm" required min="0" step="1" value="{{ old('lingkar_kepala_lahir', $form3Data->lingkar_kepala_lahir ?? '') }}" />
                    <div class="invalid-feedback">Harap masukkan data yang sesuai</div>
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="skorAPGAR">Skor APGAR</label>
                    <input class="form-control" id="skorAPGAR" name="skor_apgar" type="text" value="{{ old('skor_apgar', $form3Data->skor_apgar ?? '') }}" />
                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" id="kondisiLahir1" name="komplikasi_kelahiran" type="checkbox" 
                {{ old('komplikasi_kelahiran', $form3Data->komplikasi_kelahiran ?? false) ? 'checked' : '' }} />
                <label class="form-check-label" for="kondisiLahir1">Komplikasi / Kesulitan selama proses kelahiran</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="kondisiLahir2" name="menangis_lahir" type="checkbox" 
                {{ old('menangis_lahir', $form3Data->menangis_lahir ?? false) ? 'checked' : '' }} />
                <label class="form-check-label" for="kondisiLahir2">Langsung menangis ketika lahir</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="kondisiLahir3" name="perawatan_khusus" type="checkbox" 
                {{ old('perawatan_khusus', $form3Data->perawatan_khusus ?? false) ? 'checked' : '' }} />
                <label class="form-check-label" for="kondisiLahir3">Memerlukan perawatan khusus setelah masa kelahiran</label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="catatanTambahan">Catatan Tambahan
                <span class="text-muted">
                    (Tulis lama kehamilan apabila memilih Pre-mature atau Post-Mature)
                </span>
            </label>
            <textarea class="form-control" id="catatanTambahan" name="catatan_tambahan_form3" rows="3" required>{{ old('catatan_tambahan_form3', $form3Data->catatan_tambahan_form3 ?? '') }}</textarea>
        </div>

        <div class="text-end d-flex justify-content-end gap-2 mt-4">
            <button class="btn btn-secondary me-2" type="button" onclick="stepper.previous()">Sebelumnya</button>
            <button class="btn btn-primary" type="button" onclick="nextStep()">Selanjutnya</button>
        </div>
    </div>
</div>
