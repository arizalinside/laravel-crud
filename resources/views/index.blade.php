<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container-fluid">
        <a href="/pegawai" style="text-decoration: none; color: inherit;">
            <h1 class="text-center mt-3 font-weight-bold">DATA PEGAWAI</h1>
        </a>
        <!-- <form>
        <button formaction="/pegawai/tambah">+ Tambah Pegawai Baru</button>
    </form> -->
        <div class="d-flex justify-content-between">
            <a class="btn btn-primary font-weight-bold" href="/pegawai/tambah" style="margin: 2rem;">+ Tambah Pegawai Baru
            </a>

            <div class="m-3">
                <p class="font-weight-bold m-0">Pencarian:</p>
                <form action="/pegawai/cari" method="GET">
                    <input type="text" name="cari" placeholder="Cari Pegawai..." value="{{ old('cari') }}">
                    <input class="btn btn-info btn-sm m-1" type="submit" value="Search">
                </form>
            </div>
        </div>

        <table class="table table-bordered table-striped">
            <tr class="text-center bg-warning">
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
            @foreach($pegawai as $pgw)
            <tr>
                <td>{{ $pgw->pegawai_nama }}</td>
                <td>{{ $pgw->pegawai_jabatan }}</td>
                <td>{{ $pgw->pegawai_umur }}</td>
                <td>{{ $pgw->pegawai_alamat }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="/pegawai/edit/{{ $pgw->pegawai_id }}">Edit</a>
                    <a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $pgw->pegawai_id }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>

        <br>
        <div class="text-center mb-3">
            Halaman: {{ $pegawai->currentPage() }} <br>
            Jumlah data: {{ $pegawai->total() }} <br>
            Data per halaman: {{ $pegawai->perPage() }} <br>
        </div>
        <div class="d-flex justify-content-center pagination-lg">
            {{ $pegawai->links('pagination::bootstrap-4') }}
        </div>
    </div>
</body>

</html>