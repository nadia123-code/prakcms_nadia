@extends('layouts.app')

@section('content')
<h1>Detail Dokter</h1>
<p><strong>Nama:</strong> {{ $dokter['Nama'] }}</p>
<p><strong>Spesialisasi:</strong> {{ $dokter['Spesialisasi'] }}</p>
<p><strong>Nomor Telepon:</strong> {{ $dokter['Nomor_Telepon'] }}</p>
<p><strong>Email:</strong> {{ $dokter['Email'] }}</p>
<a href="{{ route('dokter.index') }}">Kembali ke Daftar</a>
@endsection
