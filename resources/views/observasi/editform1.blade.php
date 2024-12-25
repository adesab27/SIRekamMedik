<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Observasi Kebutuhan Terapi</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo-klinik.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">
</head>

<body>
<div class="container">
        <h3 class="text-center my-4">Observasi Kebutuhan Terapi</h3>
        <div class="bs-stepper">
            <div class="bs-stepper-header" role="tablist">
                <div class="step" data-target="#dataanak-part">
                    <button type="button" class="step-trigger" role="tab" id="logins-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Data Info Anak</span>
                    </button>
                </div>
                <div class="step" data-target="#datatambahan-part">
                    <button type="button" class="step-trigger" role="tab" id="information-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Data Tambahan</span>
                    </button>
                </div>
                <div class="step" data-target="#datariwayat-part">
                    <button type="button" class="step-trigger" role="tab" id="information-part-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Data Riwayat 1</span>
                    </button>
                </div>
                <div class="step" data-target="#datakesehatan-part">
                    <button type="button" class="step-trigger" role="tab" id="information-part-trigger">
                        <span class="bs-stepper-circle">4</span>
                        <span class="bs-stepper-label">Data Riwayat 2</span>
                    </button>
                </div>
                <div class="step" data-target="#datapola-part">
                    <button type="button" class="step-trigger" role="tab" id="information-part-trigger">
                        <span class="bs-stepper-circle">5</span>
                        <span class="bs-stepper-label">Data Riwayat 3</span>
                    </button>
                </div>
            </div>
            <div class="bs-stepper-content">
                <form class="was-validated" action="{{ route('form1.store') }}" method="POST" novalidate>
                    @csrf
                    <div id="dataanak-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                        <div class="form-section">
                            <h5>Data Anak</h5>
                            <div class="row">
                                <!-- Nama Anak -->
                                <div class="col-md-6 form-group">
                                    <label for="namaAnak">Nama Anak</label>
                                    <input 
                                        class="form-control @error('nama_anak') is-invalid @enderror" 
                                        id="namaAnak" 
                                        name="nama_anak" 
                                        placeholder="Masukkan Nama" 
                                        type="text" 
                                        value="{{ old('nama_anak', $data->nama_anak ?? '') }}" 
                                        required 
                                        pattern="[A-Za-z\s]+" 
                                        title="Hanya boleh huruf dan spasi" />
                                    @error('nama_anak')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Tempat Lahir -->
                                <div class="col-md-6 form-group">
                                    <label for="tempatLahir">Tempat Lahir</label>
                                    <input 
                                        class="form-control @error('tempat_lahir') is-invalid @enderror" 
                                        id="tempatLahir" 
                                        name="tempat_lahir" 
                                        placeholder="Masukkan Tempat Lahir" 
                                        type="text" 
                                        value="{{ old('tempat_lahir', $data->tempat_lahir ?? '') }}" 
                                        required 
                                        pattern="[A-Za-z\s]+" 
                                        title="Hanya boleh huruf dan spasi" />
                                    @error('tempat_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Panggilan anak -->
                                <div class="col-md-6 form-group">
                                    <label for="namaPanggilan">Panggilan Anak</label>
                                    <input 
                                        class="form-control @error('nama_panggilan') is-invalid @enderror" 
                                        id="namaPanggilan" 
                                        name="nama_panggilan" 
                                        placeholder="Masukkan Nama" 
                                        type="text" 
                                        value="{{ old('nama_panggilan', $data->nama_panggilan ?? '') }}" 
                                        required 
                                        pattern="[A-Za-z\s]+" 
                                        title="Hanya boleh huruf dan spasi" />
                                    @error('nama_panggilan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Tanggal Lahir -->
                                <div class="col-md-6 form-group">
                                    <label for="tanggalLahir">Tanggal Lahir</label>
                                    <input 
                                        class="form-control @error('tanggal_lahir') is-invalid @enderror" 
                                        id="tanggalLahir" 
                                        name="tanggal_lahir" 
                                        type="date" 
                                        value="{{ old('tanggal_lahir', $data->tanggal_lahir ?? '') }}" 
                                        required />
                                    @error('tanggal_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Jenis Kelamin -->
                                <div class="col-md-6 form-group">
                                    <label for="jenisKelamin">Jenis Kelamin</label>
                                    <select 
                                        class="form-control @error('jenis_kelamin') is-invalid @enderror" 
                                        id="jenisKelamin" 
                                        name="jenis_kelamin" 
                                        required>
                                        <option value="" disabled {{ old('jenis_kelamin', $data->jenis_kelamin ?? '') == '' ? 'selected' : '' }}>Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki" {{ old('jenis_kelamin', $data->jenis_kelamin ?? '') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="Perempuan" {{ old('jenis_kelamin', $data->jenis_kelamin ?? '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="umurAnak">Umur Anak</label>
                                    <input 
                                        class="form-control" 
                                        id="umurAnak" 
                                        name="umur_anak" 
                                        type="text" 
                                        value="{{ $umurAnak ?? '' }}" 
                                        readonly />
                                </div>
                            </div>

                            <div class="row">
                                <h5>Data Orang Tua</h5>
                                <!-- Data Ayah -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="namaAyah">Nama Ayah</label>
                                        <input 
                                            class="form-control" 
                                            id="namaAyah" 
                                            name="nama_ayah" 
                                            placeholder="Masukkan Nama Ayah" 
                                            type="text" 
                                            value="{{ old('nama_ayah', $data->nama_ayah) }}" 
                                            required 
                                            pattern="[A-Za-z\s]+" 
                                            title="Hanya boleh huruf dan spasi" 
                                            oninput="validateInput(this)" />
                                        <div class="invalid-feedback">Harap masukkan data yang sesuai</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="usiaAyah">Usia Ayah</label>
                                        <input 
                                            class="form-control" 
                                            id="usiaAyah" 
                                            name="usia_ayah" 
                                            placeholder="Masukkan Usia Ayah" 
                                            type="number" 
                                            value="{{ old('usia_ayah', $data->usia_ayah ??'') }}" 
                                            min="0" 
                                            max="120" 
                                            required />
                                        <div class="invalid-feedback">Harap masukkan data yang sesuai</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="pekerjaanAyah">Pekerjaan Ayah</label>
                                        <input 
                                            class="form-control" 
                                            id="pekerjaanAyah" 
                                            name="pekerjaan_ayah" 
                                            placeholder="Masukkan Pekerjaan Ayah" 
                                            type="text" 
                                            value="{{ old('pekerjaan_ayah', $data->pekerjaan_ayah) }}" 
                                            required 
                                            pattern="[A-Za-z\s]+" 
                                            title="Hanya boleh huruf dan spasi" 
                                            oninput="validateInput(this)" />
                                        <div class="invalid-feedback">Harap masukkan data yang sesuai</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="agamaAyah">Agama Ayah</label>
                                        <select 
                                            class="form-control" 
                                            id="agamaAyah" 
                                            name="agama_ayah" 
                                            required>
                                            <option value="" disabled {{ $data->agama_ayah ? '' : 'selected' }}>Pilih Agama</option>
                                            <option value="Islam" {{ $data->agama_ayah == 'Islam' ? 'selected' : '' }}>Islam</option>
                                            <option value="Kristen Protestan" {{ $data->agama_ayah == 'Kristen Protestan' ? 'selected' : '' }}>Kristen Protestan</option>
                                            <option value="Katolik" {{ $data->agama_ayah == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                            <option value="Hindu" {{ $data->agama_ayah == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                            <option value="Buddha" {{ $data->agama_ayah == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                            <option value="Konghucu" {{ $data->agama_ayah == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                        </select>
                                        <div class="invalid-feedback">Silakan pilih agama.</div>
                                    </div>
                                </div>

                                <!-- Data Ibu -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="namaIbu">Nama Ibu</label>
                                        <input 
                                            class="form-control" 
                                            id="namaIbu" 
                                            name="nama_ibu" 
                                            placeholder="Masukkan Nama Ibu" 
                                            type="text" 
                                            value="{{ old('nama_ibu', $data->nama_ibu) }}" 
                                            required 
                                            pattern="[A-Za-z\s]+" 
                                            title="Hanya boleh huruf dan spasi" 
                                            oninput="validateInput(this)" />
                                        <div class="invalid-feedback">Harap masukkan data yang sesuai</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="usiaIbu">Usia Ibu</label>
                                        <input 
                                            class="form-control" 
                                            id="usiaIbu" 
                                            name="usia_ibu" 
                                            placeholder="Masukkan Usia Ibu" 
                                            type="number" 
                                            value="{{ old('usia_ibu', $data->usia_ibu ?? '') }}" 
                                            min="0" 
                                            max="120" 
                                            required />
                                        <div class="invalid-feedback">Harap masukkan data yang sesuai</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="pekerjaanIbu">Pekerjaan Ibu</label>
                                        <input 
                                            class="form-control" 
                                            id="pekerjaanIbu" 
                                            name="pekerjaan_ibu" 
                                            placeholder="Masukkan Pekerjaan Ibu" 
                                            type="text" 
                                            value="{{ old('pekerjaan_ibu', $data->pekerjaan_ibu) }}" 
                                            required 
                                            pattern="[A-Za-z\s]+" 
                                            title="Hanya boleh huruf dan spasi" 
                                            oninput="validateInput(this)" />
                                        <div class="invalid-feedback">Harap masukkan data yang sesuai</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="agamaIbu">Agama Ibu</label>
                                        <select 
                                            class="form-control" 
                                            id="agamaIbu" 
                                            name="agama_ibu" 
                                            required>
                                            <option value="" disabled {{ $data->agama_ibu ? '' : 'selected' }}>Pilih Agama</option>
                                            <option value="Islam" {{ $data->agama_ibu == 'Islam' ? 'selected' : '' }}>Islam</option>
                                            <option value="Kristen Protestan" {{ $data->agama_ibu == 'Kristen Protestan' ? 'selected' : '' }}>Kristen Protestan</option>
                                            <option value="Katolik" {{ $data->agama_ibu == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                            <option value="Hindu" {{ $data->agama_ibu == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                            <option value="Buddha" {{ $data->agama_ibu == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                            <option value="Konghucu" {{ $data->agama_ibu == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                        </select>
                                        <div class="invalid-feedback">Silakan pilih agama.</div>
                                    </div>
                                </div>

                                <!-- Kolom Alamat -->
                                <!-- Alamat Lengkap -->
                                <textarea 
                                    class="form-control" 
                                    id="alamatLengkap" 
                                    name="alamat_lengkap" 
                                    placeholder="Masukkan Alamat Lengkap" 
                                    rows="3" 
                                    required>{{ old('alamat_lengkap', $data->alamat_lengkap ?? '') }}</textarea>
                                        </div>

                                        </div>

                                    <div class="text-end">
                                        <button type="button" class="btn btn-primary" onclick="nextStep()">Selanjutnya</button>
                                    </div>
                    </div>

                    @include('observasi.editform2')
                    @include('observasi.editform3')
                    @include('observasi.editform4')
                    @include('observasi.editform5')
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
    <script>
        var stepper = new Stepper(document.querySelector('.bs-stepper'));

        function nextStep() {
    const currentStep = stepper._currentIndex;
    const currentContent = document.querySelectorAll('.bs-stepper-content .content')[currentStep];
    const inputs = currentContent.querySelectorAll('input, select, textarea');
    let isValid = true;

    inputs.forEach(function(input) {
        // Debugging: log setiap input
        console.log('Validating input:', input);
        
        // Validasi jika input required dan kosong
        if (input.required && input.value.trim() === '') {
            isValid = false;
            input.classList.add('is-invalid');
        } else if (!input.checkValidity()) {
            isValid = false;
            input.classList.add('is-invalid');
        } else {
            input.classList.remove('is-invalid');
        }
    });

    // Jika form valid, lanjutkan ke langkah berikutnya
    if (isValid) {
        stepper.next();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    } else {
        alert('Silakan lengkapi semua data dengan benar sebelum melanjutkan.');
    }
}
document.querySelector("form").addEventListener("submit", function(event) {
            var isValid = true;
            var inputs = document.querySelectorAll(".form-control");

            inputs.forEach(function(input) {
                if (input.tagName === "SELECT" && input.value === "") {
                    isValid = false;
                    input.classList.add("is-invalid");
                } else if (input.required && input.value.trim() === "") {
                    isValid = false;
                    input.classList.add("is-invalid");
                } else if (!input.checkValidity()) {
                    isValid = false;
                    input.classList.add("is-invalid");
                } else {
                    input.classList.remove("is-invalid");
                }
            });

            if (!isValid) {
                event.preventDefault(); // Jangan kirim form jika validasi gagal
            }
        });


    </script>
</body>

</html>
