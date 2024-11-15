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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">


</head>
<body>
    <!-- Navbar -->
    @include("header")
    <!-- /.navbar -->
    <div class="container">
        <!-- riwayat -->
        @include("observasi/riwayat")
        <!-- /.riwayat-->
        
        <form action="form3.html" method="POST">
            @csrf
            <div class="mb-3 row">
                <div class="col-md-6">
                    <label class="form-label" for="usiaIbu">Usia Ibu Ketika Hamil</label>
                    <input class="form-control" id="usiaIbu" name="usia_ibu" type="text" />
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="beratBadanIbu">Berat Badan Ibu Ketika Hamil</label>
                    <input class="form-control" id="beratBadanIbu" name="berat_badan_ibu" type="text" />
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="hasilPemeriksaan">Hasil Pemeriksaan TORSCH (Jika Ada)</label>
                <textarea class="form-control" id="hasilPemeriksaan" name="hasil_pemeriksaan" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Keluhan Saat Hamil (Checklist)</label>
                <div class="form-check">
                    <input class="form-check-input" id="keluhan1" name="keluhan_keguguran" type="checkbox" />
                    <label class="form-check-label" for="keluhan1">Pernah Mengalami Keguguran</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="keluhan2" name="keluhan_stress" type="checkbox" />
                    <label class="form-check-label" for="keluhan2">Mengalami stress psikologis, sakit atau komplikasi</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="keluhan3" name="keluhan_obat" type="checkbox" />
                    <label class="form-check-label" for="keluhan3">Mengkonsumsi obat-obatan selama kehamilan</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Proses Persalinan</label>
                <div class="form-check">
                    <input class="form-check-input" id="persalinan1" name="proses_persalinan" type="radio" value="spontan" />
                    <label class="form-check-label" for="persalinan1">Spontan</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="persalinan2" name="proses_persalinan" type="radio" value="forceps" />
                    <label class="form-check-label" for="persalinan2">Forceps</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="persalinan3" name="proses_persalinan" type="radio" value="vacuum" />
                    <label class="form-check-label" for="persalinan3">Vacuum</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="persalinan4" name="proses_persalinan" type="radio" value="c-section" />
                    <label class="form-check-label" for="persalinan4">C-Section</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="lamaKehamilan">Lama Kehamilan (dalam minggu)</label>
                <input class="form-control" id="lamaKehamilan" name="lama_kehamilan" type="number" min="1" />
            </div>
            <div class="mb-3">
                <label class="form-label">Kondisi Lahir</label>
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label" for="beratBadanLahir">Berat Badan</label>
                        <input class="form-control" id="beratBadanLahir" name="berat_badan_lahir" type="text" placeholder="kg" />
                    </div>
                    <div class="col-md-3">
                        <label class="form-label" for="panjangBadanLahir">Panjang Badan</label>
                        <input class="form-control" id="panjangBadanLahir" name="panjang_badan_lahir" type="text" placeholder="cm" />
                    </div>
                    <div class="col-md-3">
                        <label class="form-label" for="lingkarKepalaLahir">Lingkar Kepala</label>
                        <input class="form-control" id="lingkarKepalaLahir" name="lingkar_kepala_lahir" type="text" placeholder="cm" />
                    </div>
                    <div class="col-md-3">
                        <label class="form-label" for="skorAPGAR">Skor APGAR</label>
                        <input class="form-control" id="skorAPGAR" name="skor_apgar" type="text" />
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" id="kondisiLahir1" name="komplikasi_kelahiran" type="checkbox" />
                    <label class="form-check-label" for="kondisiLahir1">Komplikasi / Kesulitan selama proses kelahiran</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="kondisiLahir2" name="menangis_lahir" type="checkbox" />
                    <label class="form-check-label" for="kondisiLahir2">Langsung menangis ketika lahir</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="kondisiLahir3" name="perawatan_khusus" type="checkbox" />
                    <label class="form-check-label" for="kondisiLahir3">Memerlukan perawatan khusus setelah masa kelahiran</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="catatanTambahan">Catatan Tambahan</label>
                <textarea class="form-control" id="catatanTambahan" name="catatan_tambahan" rows="3"></textarea>
            </div>
            <div class="text-end">
                <button class="btn btn-secondary me-2" type="button" onclick="window.history.back()">Sebelumnya</button>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>
