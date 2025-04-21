@extends('layouts.app')

@section('content')
    <h1>Tambah Catatan Medis</h1>
    <form action="{{ route('catatan_medis.store') }}" method="POST">
        @csrf
        <input type="text" name="ID_Pasien" placeholder="ID Pasien"><br>
        <input type="text" name="ID_Dokter" placeholder="ID Dokter"><br>
        <input type="date" name="Tanggal"><br>
        <textarea name="Diagnosis" placeholder="Diagnosis"></textarea><br>
        <textarea name="Hasil_Pemeriksaan" placeholder="Hasil Pemeriksaan"></textarea><br>
        <textarea name="Resep_Obat" placeholder="Resep Obat"></textarea><br>
        <textarea name="Tindak_Lanjut" placeholder="Tindak Lanjut"></textarea><br>
        <button type="submit">Simpan</button>
    </form>
@endsection
