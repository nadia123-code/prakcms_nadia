@extends('layouts.app')

@section('content')
<h1>Tambah Pasien</h1>
<form method="POST" action="{{ route('pasien.store') }}">
    @csrf
    <label>Nama:</label><input type="text" name="Nama"><br>
    <label>Tanggal Lahir:</label><input type="date" name="Tanggal_Lahir"><br>
    <label>Jenis Kelamin:</label><input type="text" name="Jenis_Kelamin"><br>
    <label>Alamat:</label><input type="text" name="Alamat"><br>
    <label>Nomor Telepon:</label><input type="text" name="Nomor_Telepon"><br>
    <label>Email:</label><input type="email" name="Email"><br>
    <label>Riwayat Medis:</label><textarea name="Riwayat_Medis"></textarea><br>
    <button type="submit">Simpan</button>
</form>
@endsection
