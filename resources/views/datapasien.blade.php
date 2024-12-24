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
            <th class="text-start">No</th>
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
        <td>{{ $loop->iteration }}</td>
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
            <a href="{{ route('editFormStepper', $d->id) }}" class="text-primary">
              <i class="fas fa-edit"></i>
            </a>

            <!-- Ikon Delete -->
            <form id="delete-form-{{ $d->id }}" style="display: inline;">
              @csrf
              @method('DELETE')
              <a href="#" onclick="deleteData(event, {{ $d->id }})" class="text-danger" title="Delete">
                <i class="fas fa-trash-alt"></i>
              </a>
            </form>

            <!-- Ikon Form 1 -->
            @if (isset($cekdata[$cek]) ? $cekdata[$cek]->pasien_id == $d->id : '')
              <?php $cek++; ?>
            @else
              <a href="{{ route('form1', $d->id) }}" class="text-success">
                <i class="fas fa-file-alt"></i>
              </a>
            @endif
          </div>
        </td>

        <td>
          <a href="{{ route('export_pdf', $d->id) }}" class="icon-link">
          <i class="fas fa-info-circle"></i></a>
        </td>
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
      });
    });
  </script>
</body>

</html>