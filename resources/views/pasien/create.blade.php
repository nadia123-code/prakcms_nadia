@extends('layouts.app')

@section('title', 'Tambah Pasien')

@section('content')
    <h2 style="margin-bottom: 16px;">Tambah Pasien Baru</h2>

    <form method="POST" action="{{ route('pasien.store') }}" style="line-height: 2;">
        @csrf
        <label>ID Akun Pengguna: <input type="number" name="id_akunpengguna" required></label><br>
        <label>Nama: <input type="text" name="nama" required></label><br>
        <label>Tanggal Lahir: <input type="date" name="tanggal_lahir" required></label><br>
        <label>Jenis Kelamin: 
            <select name="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </label><br>
        <label>Alamat: <textarea name="alamat" required></textarea></label><br>
        <label>Nomor Telepon: <input type="text" name="no_telepon" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Riwayat Medis: <textarea name="riwayat_medis"></textarea></label><br>
        
        <button type="submit" style="margin-top: 10px;">Tambah</button>
    </form>

    <a href="{{ route('pasien.index') }}" style="display: inline-block; margin-top: 20px;">← Kembali ke daftar</a>
@endsection
