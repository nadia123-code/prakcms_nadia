@extends('layouts.app')

@section('content')
<h1>Detail Pasien</h1>
<p><strong>Nama:</strong> {{ $pasien['Nama'] }}</p>
<p><strong>Tanggal Lahir:</strong> {{ $pasien['Tanggal_Lahir'] }}</p>
<p><strong>Jenis Kelamin:</strong> {{ $pasien['Jenis_Kelamin'] }}</p>
<p><strong>Alamat:</strong> {{ $pasien['Alamat'] }}</p>
<p><strong>Nomor Telepon:</strong> {{ $pasien['Nomor_Telepon'] }}</p>
<p><strong>Email:</strong> {{ $pasien['Email'] }}</p>
<p><strong>Riwayat Medis:</strong> {{ $pasien['Riwayat_Medis'] }}</p>
<a href="{{ route('pasien.index') }}">Kembali ke daftar</a>
@endsection
