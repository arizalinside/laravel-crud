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
        <button formaction="/pegawai">
            < Kembali</button>
    </form>

    <br>
    <br>

    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        Nama <input type="text" name="nama" required="required"> <br>
        Jabatan <input type="text" name="jabatan" required="required"> <br>
        Umur <input type="number" name="umur" required="required"> <br>
        Alamat <textarea name="alamat" required="required"></textarea> <br><br>
        <input type="submit" value="Simpan Data">
    </form>
</body>

</html>