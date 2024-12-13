<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laporan Pasien</title>
    <!-- Custom styles for this page -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo-klinik.png') }}">
    <link rel="stylesheet" href="assets/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        @media print {
            body {
                font-size: 12px;
            }

            .btn,
            .form-label,
            #minDate,
            #maxDate,
            #applyFilter,
            #printReport {
                display: none;
                /* Sembunyikan elemen yang tidak diperlukan saat cetak */
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            table th,
            table td {
                border: 1px solid #000;
                padding: 8px;
            }

            .table-responsive {
                overflow: visible;
                /* Pastikan tabel tetap terlihat */
            }
        }
    </style>
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
                        <th>Tanggal Registrasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataRegistrasi as $registrasi)
                        <tr>
                            <td>{{ $registrasi->namaPasien }}</td>
                            <td>{{ $registrasi->alamatPasien }}</td>
                            <td>{{ $registrasi->keperluan }}</td>
                            <td>{{ $registrasi->created_at->format('Y-m-d') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="assets/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable();
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