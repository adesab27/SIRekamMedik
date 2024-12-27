<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pasien</title>

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
    <h3 class="text-center mt-4">Data Pasien</h3>
    <div class="table-responsive">
      <table class="table table-striped" id="dataPasienTable">
        <thead>
          <tr>
            <!-- <th class="text-start">No</th> -->
            <th class="text-start">Tanggal Registrasi</th>
            <th class="text-start">Nama Pasien</th>
            <th class="text-start">Nomor Pasien</th>
            <th class="text-start">Tanggal Lahir</th>
            <th class="text-start">Alamat</th>
            <th class="text-start">No. Telp</th>
            <th class="text-start">Keluhan</th>
            <th class="text-start">Keperluan</th>
            <th class="text-start">Terapis</th>
            <th class="text-start">Aksi</th>
            <th class="text-start">Print PDF</th>
          </tr>
        </thead>
        <tbody>
          <?php $cek = 0; ?>
          @foreach ($data as $index => $d)
        <tr data-index="{{ $index }}">
        <!-- <td>{{ $loop->iteration }}</td> -->
        <td>{{ $d->created_at }}</td>
        <td>{{ $d->namaPasien }}</td>
        <td class="text-center">{{ $d->nomorPasien }}</td>
        <td>{{ $d->tanggalLahir }}</td>
        <td>{{ $d->alamatPasien }}</td>
        <td class="text-start">{{ $d->nomorHandphone }}</td>
        <td>{{ $d->keluhan }}</td>
        <td>{{ $d->keperluan }}</td>
        <td>{{ $d->nama_terapis }}</td>
        <td>
          <div class="d-flex justify-content-start align-items-center gap-2">
            <!-- Ikon Edit -->
            @php
              $formFilled = !$cekdata->where('pasien_id', $d->id)->isEmpty();
            @endphp
            @if ($formFilled)
              <a href="{{ route('editFormStepper', $d->id) }}" class="text-primary">
                <i class="fas fa-edit"></i>
              </a>
            @else
              <span class="text-muted">
                <i class="fas fa-edit"></i>
              </span>
            @endif

            <!-- Ikon Delete -->
            <form id="delete-form-{{ $d->id }}" style="display: inline;">
              @csrf
              @method('DELETE')
              <a href="#" onclick="deleteData(event, {{ $d->id }})" class="text-danger" title="Delete">
                <i class="fas fa-trash-alt"></i>
              </a>
            </form>

            <!-- Ikon Form 1 -->
            @if ($cekdata->where('pasien_id', $d->id)->isEmpty())
              <a href="{{ route('form1', $d->id) }}" class="text-success">
                <i class="fas fa-file-alt"></i>
              </a>
            @endif
          </div>
        </td>

        <td>
        <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#printModal"
          onclick="setPrintData({{ $d->id }})">
          <i class="fas fa-info-circle"></i>
        </a>

        </td>
        </tr>
      @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="modal fade" id="printModal" tabindex="-1" aria-labelledby="printModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="printModalLabel">Print Data Pasien</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <select id="printDataDropdown" class="form-select">
    <option value="">Pilih data pasien</option>
    @foreach ($observations as $observation)
        <option value="{{ $observation->id }}">
            {{ \Carbon\Carbon::parse($observation->created_at)->format('Y-m-d H:i') }}
        </option>
    @endforeach
</select>


        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary" onclick="printSelectedData()">Cetak</button>
        </div>
      </div>
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
  <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>


  <script>
    @if(session('success'));
    alert("{{ session('success') }}");
  @endif
    @if(session('error'))
    alert("{{ session('error') }}");
  @endif
    @if(session('failed'))
    alert("{{ session('failed') }}");
  @endif
  </script>

<script>

  $(function () {
    $("#dataPasienTable").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "order": [[0, 'desc']],
      "columnDefs": [
        {
          "targets": 0, // Kolom pertama yang berisi tanggal
          "render": function (data, type, row) {
            if (type === 'display' || type === 'filter') {
              // Menggunakan moment.js untuk format tanggal
              return moment(data).format('YYYY-MM-DD'); // Format hanya tanggal
            }
            return data;
          }
        }
      ]
    });
  });
</script>
<script>
let selectedId = null;

function setPrintData(id) {
    selectedId = id; // Simpan pasien_id
    const dropdown = document.getElementById('printDataDropdown');
    dropdown.innerHTML = '<option value="">Memuat data...</option>';

    // Ambil data observasi berdasarkan pasien_id
    fetch(`/datapasien/observasi/${id}`, {
    headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
    }
})
.then(response => {
    if (!response.ok) throw new Error('Network response was not ok');
    return response.json();
})
.then(data => {
    const dropdown = document.getElementById('printDataDropdown');
    dropdown.innerHTML = '<option value="">Pilih data pasien</option>';
    
    // Periksa apakah data kosong
    if (data.length === 0) {
        dropdown.innerHTML = '<option value="">Tidak ada data observasi</option>';
    } else {
        // Tambahkan setiap observasi ke dropdown
        data.forEach(item => {
            const formattedDate = moment(item.created_at).format('YYYY-MM-DD HH:mm');
            dropdown.innerHTML += `<option value="${item.id}">${formattedDate} - ${item.namaPasien}</option>`;
        });
    }
})
.catch(error => {
    console.error('Error fetching data:', error);
    dropdown.innerHTML = '<option value="">Gagal memuat data</option>';
});



function printSelectedData() {
    const selectedFormId = document.getElementById('printDataDropdown').value;
    if (selectedFormId) {
        // Arahkan ke endpoint untuk cetak PDF
        window.location.href = `/export_pdf/${selectedId}/${selectedFormId}`;
    } else {
        alert('Silakan pilih data pasien terlebih dahulu!');
    }
}

  </script>
</body>

</html>