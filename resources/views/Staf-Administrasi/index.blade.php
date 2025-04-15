<!DOCTYPE html>
<html>
<head>
    <title>Daftar Staf Administrasi</title>
</head>
<body>
    <h1>Daftar Staf Administrasi</h1>

    <a href="{{ route('staf.create') }}">+ Tambah Staf</a>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($data as $staf)
            <li>
                <strong>{{ $staf['nama'] }}</strong> - {{ $staf['jabatan'] }}<br>
                <a href="{{ route('staf.show', $staf['id_staf']) }}">Lihat</a> |
                <a href="{{ route('staf.edit', $staf['id_staf']) }}">Edit</a> |
                <a href="{{ route('staf.delete', $staf['id_staf']) }}">Hapus</a>
            </li>
            <hr>
        @endforeach
    </ul>
</body>
</html>
