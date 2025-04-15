<!DOCTYPE html>
<html>
<head>
    <title>Hapus Staf</title>
</head>
<body>
    <h1>Yakin ingin menghapus staf ini?</h1>

    <strong>{{ $staf['nama'] }}</strong><br>
    <p>{{ $staf['jabatan'] }}</p>

    <form action="{{ route('staf.destroy', $staf['id_staf']) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Ya, hapus</button>
        <a href="{{ route('staf.index') }}">← Batal</a>
    </form>
</body>
</html>
