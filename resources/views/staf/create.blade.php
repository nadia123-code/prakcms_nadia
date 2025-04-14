<h1>Tambah Staf Baru</h1>

<form action="{{ route('staf.store') }}" method="POST">
    @csrf
    <label>Nama:</label><br>
    <input type="text" name="nama" value="{{ old('nama') }}"><br><br>

    <label>Jabatan:</label><br>
    <input type="text" name="jabatan" value="{{ old('jabatan') }}"><br><br>

    <label>Nomor Telepon:</label><br>
    <input type="text" name="nomor_telepon" value="{{ old('nomor_telepon') }}"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="{{ old('email') }}"><br><br>

    <button type="submit">Simpan</button>
</form>

<a href="{{ route('staf.index') }}">← Kembali ke daftar</a>
