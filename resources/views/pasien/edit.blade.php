@extends('layouts.app')

@section('content')
<h1>Edit Pasien</h1>
<form method="POST" action="{{ route('pasien.update', $pasien['ID_Pasien']) }}">
    @csrf
    @method('PUT')
    <label>Nama:</label><input type="text" name="Nama" value="{{ $pasien['Nama'] }}"><br>
    <label>Tanggal Lahir:</label><input type="date" name="Tanggal_Lahir" value="{{ $pasien['Tanggal_Lahir'] }}"><br>
    <label>Jenis Kelamin:</label><input type="text" name="Jenis_Kelamin" value="{{ $pasien['Jenis_Kelamin'] }}"><br>
    <label>Alamat:</label><input type="text" name="Alamat" value="{{ $pasien['Alamat'] }}"><br>
    <label>Nomor Telepon:</label><input type="text" name="Nomor_Telepon" value="{{ $pasien['Nomor_Telepon'] }}"><br>
    <label>Email:</label><input type="email" name="Email" value="{{ $pasien['Email'] }}"><br>
    <label>Riwayat Medis:</label><textarea name="Riwayat_Medis">{{ $pasien['Riwayat_Medis'] }}</textarea><br>
    <button type="submit">Perbarui</button>
</form>
@endsection
