<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/style.css"> <!-- Link to the external CSS file -->
    <script src="assets/script.js" defer></script>
</head>
<body>
    <!-- Navbar -->
    @include("header")
        <!-- /.navbar -->
    <div class="container mt-4">
        <!-- container -->
        @include("container")
        <!-- /.container-->
    </div>
    <h3 class="text-center mt-4"> Data Pasien </h3>
    <table class="table table-striped" id="dataPasienTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Keluhan</th>
                <th>Keperluan</th>
                <th>Aksi</th>
                <th>Hasil Observasi</th>
            </tr>
        </thead>
        <tbody id="dataPasienBody">
            <!-- Data pasien akan diisi di sini -->
        </tbody>
    </table>
    <div class="d-flex justify-content-between align-items-center mt-3 mb-3" id="paginationContainer">
        <p class="mb-0" id="paginationInfo"></p>
        <nav aria-label="Page navigation">
            <ul class="pagination pagination-rounded" id="pagination"></ul>
        </nav>
    </div>
    
       </div>    
      </div>
     </body>
     </html>
