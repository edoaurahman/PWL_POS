<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Level</title>
</head>

<body>
    <h1>Form Tambah Data Level</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    @endif
    <a href="{{ route('/level') }}">Kembali</a>
    <form action="{{ route('/level/tambah_simpan') }}" method="post">
        {{ csrf_field() }}
        <label>level Kode</label>
        <input type="text" name="level_kode" placeholder="Masukkan Username">
        <br>
        <label>Level Nama</label>
        <input type="text" name="level_nama" placeholder="Masukkan Nama">
        <br>
        <br><br>
        <input type="submit" class="btn btn-success" name="Simpan">
    </form>
</body>

</html>