<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Registrasi</title>

  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
  
  <link rel="icon" type="image/png" href="{{ asset('assets/img/logo-klinik.png') }}">
  <link rel="stylesheet" href="assets/style.css">

  <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
    @include("header")
    <div class="container mt-4">
        @include("container")
        <h3 class="text-center mt-4">Data Laporan Pasien</h3>
        <div class="row mb-3">
            <div class="col-md-3">
                <label for="minDate" class="form-label">Tanggal Mulai:</label>
                <input type="date" id="minDate" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="maxDate" class="form-label">Tanggal Akhir:</label>
                <input type="date" id="maxDate" class="form-control">
            </div>
            <div class="col-md-3 align-self-end">
                <button id="applyFilter" class="btn btn-primary">Filter</button>
            </div>
        </div>


        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Keperluan</th>
                        <th>Nama Terapis</th>
                        <th>Tanggal Registrasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataRegistrasi as $registrasi)
                        <tr>
                            <td>{{ $registrasi->namaPasien }}</td>
                            <td>{{ $registrasi->alamatPasien }}</td>
                            <td>{{ $registrasi->keperluan }}</td>
                            <td>{{ $registrasi->nama_terapis }}</td>
                            <td>{{ $registrasi->created_at->format('Y-m-d') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    
  <script src="assets/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
  <script>
    $(document).ready(function () {
        var table = $('#dataTable').DataTable({
            order: [[4, 'desc']] // Kolom ke-5 (Tanggal Registrasi), diurutkan secara descending
        });

        // Custom filter untuk rentang tanggal
        $.fn.dataTable.ext.search.push(
            function (settings, data, dataIndex) {
                var min = $('#minDate').val();
                var max = $('#maxDate').val();
                var date = data[4]; // Kolom ke-5 (Tanggal Registrasi)

                if ((min === "" && max === "") ||
                    (min === "" && date <= max) ||
                    (min <= date && max === "") ||
                    (min <= date && date <= max)) {
                    return true;
                }
                return false;
            }
        );

        // Event listener untuk tombol filter
        $('#applyFilter').on('click', function () {
            table.draw();
        });
    });
</script>


    <script>
        $(document).ready(function () {
            // Inisialisasi DataTable
            var table = $('#dataTable').DataTable();

            // Custom filter untuk rentang tanggal
            $.fn.dataTable.ext.search.push(
                function (settings, data, dataIndex) {
                    var min = $('#minDate').val();
                    var max = $('#maxDate').val();
                    var date = data[3]; // Kolom ke-4 (Tanggal Registrasi)

                    // Jika tidak ada input tanggal, tampilkan semua data
                    if ((min === "" && max === "") ||
                        (min === "" && date <= max) ||
                        (min <= date && max === "") ||
                        (min <= date && date <= max)) {
                        return true;
                    }
                    return false;
                }
            );

            // Event listener untuk tombol filter
            $('#applyFilter').on('click', function () {
                table.draw();
            });
        });
    </script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Ambil elemen input tanggal
        var minDateInput = document.getElementById('minDate');
        var maxDateInput = document.getElementById('maxDate');

        // Dapatkan tanggal hari ini dalam format YYYY-MM-DD
        var today = new Date();
        var yyyy = today.getFullYear();
        var mm = String(today.getMonth() + 1).padStart(2, '0'); // Bulan ditambah 1 karena dimulai dari 0
        var dd = String(today.getDate()).padStart(2, '0');

        var maxDate = `${yyyy}-${mm}-${dd}`;

        // Tetapkan atribut max ke input tanggal
        minDateInput.setAttribute('max', maxDate);
        maxDateInput.setAttribute('max', maxDate);

        // Set filter untuk tanggal akhir agar tidak lebih kecil dari tanggal mulai
        minDateInput.addEventListener('change', function() {
            var minDateValue = minDateInput.value;
            maxDateInput.setAttribute('min', minDateValue); // Set the min value for maxDate
        });
    });
</script>

</body>

</html>