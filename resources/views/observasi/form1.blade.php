<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Observasi Kebutuhan Terapi</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        rel="stylesheet" />
    <link href="https: //cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo-klinik.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">
    <!-- Link to the external CSS file -->
</head>

<body>
    <!-- /.navbar -->
    <div class="container">
        <h3 class="text-center my-4">Observasi Kebutuhan Terapi</h3>
        <div class="bs-stepper">
            <div class="bs-stepper-header" role="tablist">
                <!-- your steps here -->
                <div class="step" data-target="#dataanak-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Data Info Anak</span>
                    </button>
                </div>
                <div class="step" data-target="#datatambahan-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Data Tambahan</span>
                    </button>
                </div>
                <div class="step" data-target="#datariwayat-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Data Riwayat 1</span>
                    </button>
                </div>
                <div class="step" data-target="#datakesehatan-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">4</span>
                        <span class="bs-stepper-label">Data Riwayat 2</span>
                    </button>
                </div>
                <div class="step" data-target="#datapola-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">5</span>
                        <span class="bs-stepper-label">Data Riwayat 3</span>
                    </button>
                </div>
            </div>
            <div class="bs-stepper-content">
                <form class="was-validated" action="{{route('form1.store')}}" method="POST" novalidate>
                    @csrf
                    <!-- your steps content here -->
                    <div id="dataanak-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                        <div class="form-section">
                            <h5>Data Anak</h5>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="namaAnak">Nama Anak</label>
                                    <input 
                                        class="form-control" 
                                        id="namaAnak" 
                                        name="nama_anak" 
                                        placeholder="Masukkan Nama" 
                                        type="text" 
                                        value="{{$data->namaPasien}}" 
                                        required 
                                        pattern="[A-Za-z\s]+" 
                                        title="Hanya boleh huruf dan spasi"
                                        oninput="validateInput(this)" />
                                    <input 
                                        class="form-control" 
                                        id="pasien_id" 
                                        name="pasien_id" 
                                        type="hidden" 
                                        value="{{$pasien_id}}" />
                                    <div class="invalid-feedback">
                                    Harap masukkan data yang sesuai
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="tempatLahir">Tempat Lahir</label>
                                    <input class="form-control" id="tempatLahir" name="tempat_lahir" placeholder="Tempat lahir" type="text" required 
                                        pattern="[A-Za-z\s]+" title="Hanya boleh huruf dan spasi" oninput="validateInput(this)" />
                                    <div class="invalid-feedback">
                                    Harap masukkan data yang sesuai
                                    </div>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="namaPanggilan">Nama Panggilan Anak</label>
                                    <input class="form-control" id="namaPanggilan" name="nama_panggilan" placeholder="Masukkan nama panggilan anak" 
                                        type="text" required 
                                        pattern="[A-Za-z\s]+" 
                                        title="Hanya boleh huruf dan spasi" 
                                        oninput="validateInput(this)" />
                                    <div class="invalid-feedback">
                                    Harap masukkan data yang sesuai
                                    </div>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="tanggalLahir">Tanggal Lahir</label>
                                    <input class="form-control" id="tanggalLahir" name="tanggal_lahir" placeholder="DD/MM/YYYY" type="date" value="{{$data->tanggalLahir}}" required />
                                    <div class="invalid-feedback">
                                    Harap masukkan data yang sesuai
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="jenisKelamin">Jenis Kelamin</label>
                                    <select class="form-control" id="jenisKelamin" name="jenis_kelamin" required>
                                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Silakan pilih jenis kelamin.
                                    </div>
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
                        </div>

                        <div class="form-section">
                            <h5>Data Orang Tua</h5>
                            <div class="row">
                                <!-- Kolom Data Ayah -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="namaAyah">Nama Ayah</label>
                                        <input class="form-control" id="namaAyah" name="nama_ayah" placeholder="Masukkan Nama Ayah" type="text" 
                                            required pattern="[A-Za-z\s]+" title="Hanya boleh huruf dan spasi" oninput="validateInput(this)" />
                                        <div class="invalid-feedback">
                                        Harap masukkan data yang sesuai
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="usiaAyah">Usia Ayah</label>
                                        <input 
                                            class="form-control" 
                                            id="usiaAyah" 
                                            name="usia_ayah" 
                                            placeholder="Masukkan Usia Ayah" 
                                            type="text" 
                                            pattern="^-?\d*$" 
                                            min="0" 
                                            max="120" 
                                            required />
                                        <div class="invalid-feedback">
                                        Harap masukkan data yang sesuai
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="pekerjaanAyah">Pekerjaan Ayah</label>
                                        <input class="form-control" id="pekerjaanAyah" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah" type="text" 
                                            required pattern="[A-Za-z\s]+" title="Hanya boleh huruf dan spasi" oninput="validateInput(this)" />
                                        <div class="invalid-feedback">
                                        Harap masukkan data yang sesuai
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="agamaAyah">Agama Ayah</label>
                                        <select class="form-control" id="agamaAyah" name="agama_ayah" required>
                                            <option value="" disabled selected>Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen Protestan">Kristen Protestan</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Silakan pilih agama.
                                        </div>
                                    </div>
                                </div>

                                <!-- Kolom Data Ibu -->
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="namaIbu">Nama Ibu</label>
                                    <input class="form-control" id="namaIbu" name="nama_ibu" placeholder="Masukkan Nama Ibu" type="text" 
                                        required pattern="[A-Za-z\s]+" title="Hanya boleh huruf dan spasi" oninput="validateInput(this)" />
                                    <div class="invalid-feedback">
                                    Harap masukkan data yang sesuai
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label for="usiaAyah">Usia Ibu</label>
                                        <input 
                                            class="form-control" 
                                            id="usiaAyah" 
                                            name="usia_ayah" 
                                            placeholder="Masukkan Usia Ayah" 
                                            type="text" 
                                            pattern="^-?\d*$" 
                                            min="0" 
                                            max="120" 
                                            required />
                                        <div class="invalid-feedback">
                                        Harap masukkan data yang sesuai
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaanIbu">Pekerjaan Ibu</label>
                                        <input class="form-control" id="pekerjaanIbu" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu" type="text" 
                                            required pattern="[A-Za-z\s]+" title="Hanya boleh huruf dan spasi" oninput="validateInput(this)" />
                                        <div class="invalid-feedback">
                                        Harap masukkan data yang sesuai
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="agamaIbu">Agama Ibu</label>
                                        <select class="form-control" id="agamaIbu" name="agama_ibu" required>
                                            <option value="" disabled selected>Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen Protestan">Kristen Protestan</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Silakan pilih agama.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Alamat Lengkap -->
                            <div class="form-group mt-3">
                                <label for="alamatLengkap">Alamat Lengkap</label>
                                <textarea class="form-control" id="alamatLengkap" name="alamat_lengkap" placeholder="Masukkan Alamat Lengkap" rows="3" required>{{$data->alamatPasien}}</textarea>
                                <div class="invalid-feedback">
                                Harap masukkan data yang sesuai
                                </div>
                            </div>
                        </div>



                        <div class="text-end">
                            <button type="button" class="btn btn-primary" onclick="nextStep()">Selanjutnya</button>
                        </div>
                    </div>

                    @include('observasi.form2')

                    @include('observasi.form3')

                    @include('observasi.form4')

                    @include('observasi.form5')
                </form>
            </div>
        </div>

    </div>




<script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
<script>
var stepper = new Stepper(document.querySelector('.bs-stepper'));

function nextStep() {
    const currentStep = stepper._currentIndex; // Dapatkan indeks langkah saat ini
    const currentContent = document.querySelectorAll('.bs-stepper-content .content')[currentStep];

    // Validasi elemen di langkah saat ini
    const inputs = currentContent.querySelectorAll('input, select, textarea');
    let isValid = true;

    inputs.forEach(function(input) {
        if (!input.checkValidity()) { 
            isValid = false;
            input.classList.add('is-invalid'); // Tambahkan kelas invalid
            input.classList.remove('is-valid');
        } else {
            input.classList.add('is-valid'); // Tambahkan kelas valid
            input.classList.remove('is-invalid');
        }
    });

    if (isValid) {
        // Pindah ke langkah berikutnya jika semua input valid
        stepper.next();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    } else {
        // Fokus ke input pertama yang tidak valid
        const firstInvalidInput = currentContent.querySelector('.is-invalid');
        if (firstInvalidInput) {
            firstInvalidInput.focus();
        }
        alert('Silakan lengkapi semua data dengan benar pada langkah ini sebelum melanjutkan.');
    }
}

// Tambahkan event listener untuk validasi akhir saat form dikirim
document.querySelector('form').addEventListener('submit', function(event) {
    const form = event.target;
    if (!form.checkValidity()) {
        event.preventDefault();
        alert('Silakan lengkapi semua data dengan benar sebelum menyimpan data.');
    }
});


</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>