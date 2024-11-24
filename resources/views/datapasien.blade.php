<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pasien</title>
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/style.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
  @include("header")

  <div class="container mt-4">
    @include("container")
    <h3 class="text-center mt-4">Data Pasien</h3>
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
      <tbody>
        <?php $cek = 0; ?>
        @foreach ($data as $index => $d)
        <tr data-index="{{ $index }}">
          <td>{{ $index + 1 + ($data->currentPage() - 1) * $data->perPage() }}</td>
          <td>{{ $d->namaPasien }}</td>
          <td>{{ $d->tanggalLahir }}</td>
          <td>{{ $d->alamatPasien }}</td>
          <td>{{ $d->nomorHandphone }}</td>
          <td>{{ $d->keluhan }}</td>
          <td>{{ $d->keperluan }}</td>
          <td>
            <a href="{{ route('editDatapasien', $d->id) }}" class="text-primary"><i class="fas fa-edit"></i></a>
            <form action="{{ route('deleteDatapasien', $d->id) }}" method="POST" style="display: inline;" onsubmit="return confirmDelete(event)">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-link p-0 text-danger"><i class="fas fa-trash-alt"></i></button>
            </form>
            @if (isset($cekdata[$cek]) ? $cekdata[$cek]->pasien_id == $d->id : '')
            <?php $cek++; ?>
            @else
            <a href="{{ route('form1', $d->id) }}" class="icon-link"><i class="fas fa-file-alt"></i></a>
            @endif
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


  <script src="assets/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

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