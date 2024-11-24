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
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">
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
        <div class="bs-stepper">
            <div class="bs-stepper-header" role="tablist">
                <!-- your steps here -->
                <div class="step" data-target="#dataanak-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Data Anak</span>
                    </button>
                </div>
                <div class="line"></div>
                <div class="step" data-target="#datatambahan-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Data Tambahan</span>
                    </button>
                </div>
                <div class="step" data-target="#datariwayat-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Riwayat Kehamilan dan Kelahiran</span>
                    </button>
                </div>
                <div class="step" data-target="#datakesehatan-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">4</span>
                        <span class="bs-stepper-label">Kesehatan dan Perkembangan</span>
                    </button>
                </div>
                <div class="step" data-target="#datapola-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">5</span>
                        <span class="bs-stepper-label">Pola Kebiasaan Anak</span>
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
                                    <input class="form-control" id="namaAnak" name="nama_anak" placeholder="Masukkan Nama" type="text" value="{{$data->namaPasien}}" required />
                                    <input class="form-control" id="pasien_id" name="pasien_id" type="hidden" value="{{$pasien_id}}" />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="tempatLahir">Tempat Lahir</label>
                                    <input class="form-control" id="tempatLahir" name="tempat_lahir" placeholder="Tempat lahir" type="text" required />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="namaPanggilan">Nama Panggilan Anak</label>
                                    <input class="form-control" id="namaPanggilan" name="nama_panggilan" placeholder="Masukkan nama panggilan anak" type="text" value="{{$data->namaPasien}}" required />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="tanggalLahir">Tanggal Lahir</label>
                                    <input class="form-control" id="tanggalLahir" name="tanggal_lahir" placeholder="DD/MM/YYYY" type="date" value="{{$data->tanggalLahir}}" required />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="jenisKelamin">Jenis Kelamin</label>
                                    <input class="form-control" id="jenisKelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" type="text" required />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="umurAnak">Umur Anak</label>
                                    <input class="form-control" id="umurAnak" name="umur_anak" placeholder="Dalam Tahun dan bulan" type="text" required />
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
                                    <input class="form-control" id="namaAyah" name="nama_ayah" placeholder="Masukkan Nama Ayah" type="text" required />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="namaIbu">Nama Ibu</label>
                                    <input class="form-control" id="namaIbu" name="nama_ibu" placeholder="Masukkan Nama Ibu" type="text" required />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="usiaAyah">Usia Ayah</label>
                                    <input class="form-control" id="usiaAyah" name="usia_ayah" placeholder="Masukkan Usia Ayah" type="text" required />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="usiaIbu">Usia Ibu</label>
                                    <input class="form-control" id="usiaIbu" name="usia_ibu" placeholder="Masukkan Usia Ibu" type="text" required />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="agamaAyah">Agama Ayah</label>
                                    <input class="form-control" id="agamaAyah" name="agama_ayah" placeholder="Masukkan Agama Ayah" type="text" required />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="agamaIbu">Agama Ibu</label>
                                    <input class="form-control" id="agamaIbu" name="agama_ibu" placeholder="Masukkan Agama Ibu" type="text" required />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="pekerjaanAyah">Pekerjaan Ayah</label>
                                    <input class="form-control" id="pekerjaanAyah" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah" type="text" required />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="pekerjaanIbu">Pekerjaan Ibu</label>
                                    <input class="form-control" id="pekerjaanIbu" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu" type="text" required />
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
                                </div>
                                <div class="col-12 form-group">
                                    <label for="alamatLengkap">Alamat Lengkap</label>
                                    <textarea class="form-control" id="alamatLengkap" name="alamat_lengkap" placeholder="Masukkan Alamat lengkap" rows="3" required>{{$data->alamatPasien}}</textarea>
                                    <div class="invalid-feedback">
                                        Please input data.
                                    </div>
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



</body>
<script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
<script>
    // BS-Stepper Init
    //document.addEventListener('DOMContentLoaded', function() {
    //    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    //});
    // Initialize the stepper
    var stepper = new Stepper(document.querySelector('.bs-stepper'));

    function nextStep() {
        const currentStep = stepper._currentIndex;
        const currentContent = document.querySelectorAll('.bs-stepper-content .content')[currentStep];
        stepper.next();
        //if (currentContent.querySelectorAll('input:invalid').length > 0) {
        //    currentContent.querySelector('input:invalid').focus();
        //} else {
        //    stepper.next();
        //}
    }
    // Update review section
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $('#lamaKehamilan').hide();
    $('input[type="radio"]').click(function() {
        if ($(this).attr('id') == 'persalinan5' || $(this).attr('id') == 'persalinan6') {
            $('#lamaKehamilan').show();
            $("[id='lamaKehamilan']").prop("required", true);
        } else {
            $('#lamaKehamilan').hide();
            $("[id='lamaKehamilan']").prop("required", false);
        }
    });
</script>

</html>