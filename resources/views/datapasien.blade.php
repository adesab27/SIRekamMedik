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
              <a href="form1.html" class="icon-link"><i class="fas fa-file-alt"></i></a>
            </td>
            <td><i class="fas fa-info-circle"></i></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="d-flex justify-content-center">
    {{ $data->links() }}
  </div>

  <script src="assets/scripts.js"></script>
</body>

</html>