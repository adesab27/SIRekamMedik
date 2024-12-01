<div id="datariwayat-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
    <div class="form-section">
        <div class="mb-3 row">
            <div class="col-md-6">
                <label class="form-label" for="usiaIbu">Usia Ibu Ketika Hamil</label>
                <input class="form-control" id="usiaIbu" name="usia_ibu" type="text" required />
            </div>
            <div class="col-md-6">
                <label class="form-label" for="beratBadanIbu">Berat Badan Ibu Ketika Hamil</label>
                <input class="form-control" id="beratBadanIbu" name="berat_badan_ibu" type="text" required />
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="hasilPemeriksaan">Hasil Pemeriksaan Medis (Jika Ada)</label>
            <textarea class="form-control" id="hasilPemeriksaan" name="hasil_pemeriksaan" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Keluhan Saat Hamil (Checklist)</label>
            @foreach ($form3 as $f)
                <div class="form-check">
                    <input class="form-check-input" id="keluhan1" name="{{$f->name}}" type="checkbox" />
                    <label class="form-check-label" for="keluhan1">{{$f->value}}</label>
                </div>
            @endforeach
        </div>
        <div class="mb-3">
            <label class="form-label" for="prosesPersalinan">Proses Persalinan</label>
            <select class="form-select" id="prosesPersalinan" name="proses_persalinan">
                <option value="" disabled selected>Pilih Proses Persalinan</option>
                <option value="spontan">Spontan</option>
                <option value="forceps">Forceps</option>
                <option value="vacuum">Vacuum</option>
                <option value="c-section">C-Section</option>
                <option value="pre-mature">Pre-mature</option>
                <option value="post-mature">Post-mature</option>
                <option value="full-term">Full-term</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Kondisi Lahir</label>
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label" for="beratBadanLahir">Berat Badan</label>
                    <input class="form-control" id="beratBadanLahir" name="berat_badan_lahir" type="text"
                        placeholder="kg" required />
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="panjangBadanLahir">Panjang Badan</label>
                    <input class="form-control" id="panjangBadanLahir" name="panjang_badan_lahir" type="text"
                        placeholder="cm" required />
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="lingkarKepalaLahir">Lingkar Kepala</label>
                    <input class="form-control" id="lingkarKepalaLahir" name="lingkar_kepala_lahir" type="text"
                        placeholder="cm" required />
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="skorAPGAR">Skor APGAR</label>
                    <input class="form-control" id="skorAPGAR" name="skor_apgar" type="text" required />
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" id="kondisiLahir1" name="komplikasi_kelahiran" type="checkbox" />
                <label class="form-check-label" for="kondisiLahir1">Komplikasi / Kesulitan selama proses
                    kelahiran</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="kondisiLahir2" name="menangis_lahir" type="checkbox" />
                <label class="form-check-label" for="kondisiLahir2">Langsung menangis ketika lahir</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="kondisiLahir3" name="perawatan_khusus" type="checkbox" />
                <label class="form-check-label" for="kondisiLahir3">Memerlukan perawatan khusus setelah masa
                    kelahiran</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="kondisiLahir4" name="perawatan_khusus" type="checkbox" />
                <label class="form-check-label" for="kondisiLahir4">Tidak ada</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="catatanTambahan">Catatan Tambahan</label>
            <textarea class="form-control" id="catatanTambahan" name="catatan_tambahan" rows="3" required></textarea>
        </div>
        <div class="text-end d-flex justify-content-end gap-2 mt-4">
            <button class="btn btn-secondary me-2" type="button" onclick="stepper.previous()">Sebelumnya</button>
            <button class="btn btn-primary" type="button" onclick="nextStep()">Selanjutnya</button>
        </div>
    </div>
</div>