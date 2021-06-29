<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
</head>

<body>

    <style type="text/css">
        .pagination li {
            float: left;
            list-style-type: none;
            margin: 5px;
        }
    </style>

    <h3>Data Pegawai</h3>

    <form>
        <button formaction="/pegawai/tambah">+ Tambah Pegawai Baru</button>
    </form>

    <p>Pencarian:</p>
    <form action="/pegawai/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Pegawai..." value="{{ old('cari') }}">
        <input type="submit" value="Search">
    </form>

    <br>
    <br>

    <table border="1">
        <tr>
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
                <a href="/pegawai/edit/{{ $pgw->pegawai_id }}">Edit</a>
                <a href="/pegawai/hapus/{{ $pgw->pegawai_id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    <br>
    Halaman: {{ $pegawai->currentPage() }} <br>
    Jumlah data: {{ $pegawai->total() }} <br>
    Data per halaman: {{ $pegawai->perPage() }} <br>

    {{ $pegawai->links('pagination::bootstrap-4') }}


</body>

</html>