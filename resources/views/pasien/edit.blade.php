@extends('layouts.app')

@section('content')
    <h2>Edit Pasien</h2>
    <form method="POST" action="{{ route('pasien.update', $pasien->id) }}">
        @csrf
        @method('PUT')

        <label>ID Akun Pengguna: 
        <input type="number" name="id_akunpengguna" value="{{ $pasien->id_akunpengguna }}" required></label><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $pasien->nama }}" required><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" value="{{ $pasien->tanggal_lahir }}" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki" {{ $pasien->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="Perempuan" {{ $pasien->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required>{{ $pasien->alamat }}</textarea><br><br>

        <label>Nomor Telepon:</label><br>
        <input type="text" name="no_telepon" value="{{ $pasien->no_telepon }}" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $pasien->email }}" required><br><br>

        <label>Riwayat Medis:</label><br>
        <textarea name="riwayat_medis">{{ $pasien->riwayat_medis }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>
@endsection
