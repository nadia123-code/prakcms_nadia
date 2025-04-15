<!DOCTYPE html>
<html>
<head>
    <title>{{ $staf['nama'] }}</title>
</head>
<body>
    <h1>{{ $staf['nama'] }}</h1>
    <p>Jabatan: {{ $staf['jabatan'] }}</p>
    <p>No. Telepon: {{ $staf['nomor_telepon'] }}</p>
    <p>Email: {{ $staf['email'] }}</p>

    <a href="{{ route('staf.edit', $staf['id_staf']) }}">✏️ Edit</a> |
    <a href="{{ route('staf.delete', $staf['id_staf']) }}">🗑️ Hapus</a>

    <p><a href="{{ route('staf.index') }}">← Kembali ke daftar</a></p>
</body>
</html>
