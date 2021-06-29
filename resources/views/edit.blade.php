<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
</head>

<body>
    <h3>Edit Pegawai</h3>

    <form>
        <button formaction="/pegawai">
            < Kembali</button>
    </form>

    <br>
    <br>

    @foreach($pegawai as $pgw)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $pgw->pegawai_id }}"> <br>
        Nama <input type="text" name="nama" value="{{ $pgw->pegawai_nama }}" required="required"> <br>
        Jabatan <input type="text" name="jabatan" value="{{ $pgw->pegawai_jabatan }}" required="required"> <br>
        Umur <input type="number" name="umur" value="{{ $pgw->pegawai_umur }}" required="required"> <br>
        Alamat <textarea name="alamat" required="required">{{ $pgw->pegawai_alamat }}</textarea> <br><br>
        <input type="submit" value="Update">
    </form>
    @endforeach
</body>

</html>