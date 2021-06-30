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
            <h1 class="text-center mt-3 font-weight-bold">TAMBAH DATA PEGAWAI</h1>
        </a>

        <a class="btn btn-primary font-weight-bold" href="/pegawai" style="margin: 2rem;">
            < Kembali</a>

                <div class="card" style="width: 40%; margin:0 auto; margin-bottom: 2rem;">
                    <form action="/pegawai/store" method="post" class="p-3">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nama" class="font-weight-bold">Nama</label>
                            <input type="text" class="form-control" name="nama" required="required"> <br>
                        </div>
                        <div class="form-group">
                            <label for="jabatan" class="font-weight-bold">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" required="required"> <br>
                        </div>
                        <div class="form-group">
                            <label for="umur" class="font-weight-bold">Umur</label>
                            <input type="number" class="form-control" name="umur" required="required"> <br>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="font-weight-bold">Alamat</label>
                            <textarea name="alamat" class="form-control" required="required"></textarea>
                        </div>
                        <input class="btn btn-success btn-block" type="submit" value="Simpan Data">
                    </form>
                </div>
    </div>
</body>

</html>