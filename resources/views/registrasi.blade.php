<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Observasi Kebutuhan Terapi</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
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
                    <div id="dataanak-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                        <div class="form-section">
                            <h5>Data Anak</h5>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="namaAnak">Nama Anak</label>
                                    <input class="form-control" id="namaAnak" name="nama_anak" placeholder="Masukkan Nama" 
                                           type="text" value="{{$data->namaPasien}}" required 
                                           pattern="[A-Za-z\s]+" title="Hanya boleh huruf dan spasi" />
                                    <input class="form-control" id="pasien_id" name="pasien_id" type="hidden" value="{{$pasien_id}}" />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="tempatLahir">Tempat Lahir</label>
                                    <input class="form-control" id="tempatLahir" name="tempat_lahir" placeholder="Tempat Lahir" type="text" required />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="namaPanggilan">Nama Panggilan Anak</label>
                                    <input class="form-control" id="namaPanggilan" name="nama_panggilan" placeholder="Nama Panggilan Anak" type="text" required />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="tanggalLahir">Tanggal Lahir</label>
                                    <input class="form-control" id="tanggalLahir" name="tanggal_lahir" placeholder="DD/MM/YYYY" 
                                           type="date" value="{{$data->tanggalLahir}}" required />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-section">
                            <h5>Data Orang Tua</h5>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="namaAyah">Nama Ayah</label>
                                    <input class="form-control" id="namaAyah" name="nama_ayah" placeholder="Masukkan Nama Ayah" 
                                           type="text" required pattern="[A-Za-z\s]+" 
                                           title="Hanya boleh huruf dan spasi" />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="namaIbu">Nama Ibu</label>
                                    <input class="form-control" id="namaIbu" name="nama_ibu" placeholder="Masukkan Nama Ibu" 
                                           type="text" required pattern="[A-Za-z\s]+" 
                                           title="Hanya boleh huruf dan spasi" />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="pekerjaanAyah">Pekerjaan Ayah</label>
                                    <input class="form-control" id="pekerjaanAyah" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah" 
                                           type="text" required pattern="[A-Za-z\s]+" 
                                           title="Hanya boleh huruf dan spasi" />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="pekerjaanIbu">Pekerjaan Ibu</label>
                                    <input class="form-control" id="pekerjaanIbu" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu" 
                                           type="text" required pattern="[A-Za-z\s]+" 
                                           title="Hanya boleh huruf dan spasi" />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                            </div>
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
    // Fungsi untuk mencegah input non-huruf
    function allowOnlyLettersAndSpaces(inputElement) {
        inputElement.addEventListener('input', function () {
            this.value = this.value.replace(/[^A-Za-z\s]/g, ''); // Hapus karakter non-huruf
        });
    }

    // Terapkan fungsi ke semua elemen input yang relevan
    document.addEventListener('DOMContentLoaded', function () {
        const restrictedInputs = [
            document.getElementById('namaAnak'),
            document.getElementById('tempatLahir'),
            document.getElementById('namaPanggilan'),
            document.getElementById('namaAyah'),
            document.getElementById('namaIbu'),
            document.getElementById('pekerjaanAyah'),
            document.getElementById('pekerjaanIbu'),
        ];

        restrictedInputs.forEach(input => {
            if (input) allowOnlyLettersAndSpaces(input);
        });
    });

</script>
<script>
    var stepper = new Stepper(document.querySelector('.bs-stepper'));

    function nextStep() {
        const currentStep = stepper._currentIndex;
        const currentContent = document.querySelectorAll('.bs-stepper-content .content')[currentStep];

        if (currentContent.querySelectorAll('input:invalid').length > 0) {
            currentContent.querySelector('input:invalid').focus();
        } else {
            stepper.next();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    }
</script>
</body>
</html>
