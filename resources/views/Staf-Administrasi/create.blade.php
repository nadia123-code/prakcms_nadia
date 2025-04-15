<!DOCTYPE html>
<html>
<head>
    <title>Tambah Staf</title>
</head>
<body>
    <h1>Tambah Staf Administrasi</h1>

    <form action="{{ route('staf.store') }}" method="POST">
        @csrf
        Nama: <input type="text" name="nama"><br>
        Jabatan: <input type="text" name="jabatan"><br>
        Nomor Telepon: <input type="text" name="nomor_telepon"><br>
        Email: <input type="email" name="email"><br>

        <button type="submit">Simpan</button>
    </form>

    <p><a href="{{ route('staf.index') }}">← Kembali ke daftar</a></p>
</body>
</html>
