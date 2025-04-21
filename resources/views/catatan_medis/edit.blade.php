@extends('layouts.app')

@section('content')
    <h1>Edit Catatan Medis</h1>
    <form action="{{ route('catatan_medis.update', $catatan['ID_Catatan']) }}" method="POST">
        @csrf @method('PUT')
        <input type="text" name="ID_Pasien" value="{{ $catatan['ID_Pasien'] }}"><br>
        <input type="text" name="ID_Dokter" value="{{ $catatan['ID_Dokter'] }}"><br>
        <input type="date" name="Tanggal" value="{{ $catatan['Tanggal'] }}"><br>
        <textarea name="Diagnosis">{{ $catatan['Diagnosis'] }}</textarea><br>
        <textarea name="Hasil_Pemeriksaan">{{ $catatan['Hasil_Pemeriksaan'] }}</textarea><br>
        <textarea name="Resep_Obat">{{ $catatan['Resep_Obat'] }}</textarea><br>
        <textarea name="Tindak_Lanjut">{{ $catatan['Tindak_Lanjut'] }}</textarea><br>
        <button type="submit">Update</button>
    </form>
@endsection
