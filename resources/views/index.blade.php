<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
</head>

<body>
    <h3>Data Pegawai</h3>

    <form>
        <button formaction="/pegawai/tambah">+ Tambah Pegawai Baru</button>
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
</body>

</html>