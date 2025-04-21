@extends('layouts.app')

@section('content')
    <h1>Detail Catatan Medis</h1>
    <p><strong>ID Pasien:</strong> {{ $catatan['ID_Pasien'] }}</p>
    <p><strong>ID Dokter:</strong> {{ $catatan['ID_Dokter'] }}</p>
    <p><strong>Tanggal:</strong> {{ $catatan['Tanggal'] }}</p>
    <p><strong>Diagnosis:</strong> {{ $catatan['Diagnosis'] }}</p>
    <p><strong>Hasil Pemeriksaan:</strong> {{ $catatan['Hasil_Pemeriksaan'] }}</p>
    <p><strong>Resep Obat:</strong> {{ $catatan['Resep_Obat'] }}</p>
    <p><strong>Tindak Lanjut:</strong> {{ $catatan['Tindak_Lanjut'] }}</p>
    <a href="{{ route('catatan_medis.index') }}">Kembali</a>
@endsection
