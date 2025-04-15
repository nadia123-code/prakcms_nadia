<!DOCTYPE html>
<html>
<head>
    <title>Edit Staf</title>
</head>
<body>
    <h1>Edit Staf Administrasi</h1>

    <form action="{{ route('staf.update', $staf['id_staf']) }}" method="POST">
        @csrf
        @method('PUT')
        Nama: <input type="text" name="nama" value="{{ $staf['nama'] }}"><br>
        Jabatan: <input type="text" name="jabatan" value="{{ $staf['jabatan'] }}"><br>
        Nomor Telepon: <input type="text" name="nomor_telepon" value="{{ $staf['nomor_telepon'] }}"><br>
        Email: <input type="email" name="email" value="{{ $staf['email'] }}"><br>

        <button type="submit">Simpan</button>
    </form>

    <p><a href="{{ route('staf.show', $staf['id_staf']) }}">← Kembali ke detail</a></p>
</body>
</html>
