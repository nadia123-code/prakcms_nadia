@extends('layouts.app')

@section('content')
    <h2>Edit Catatan Medis</h2>

    <form method="POST" action="{{ route('catatanmedis.update', $catatan->id) }}">
        @csrf
        @method('PUT')

        <label>ID Pasien: 
        <input type="number" name="id_pasien" value="{{ $catatan->id_pasien }}" required></label><br><br>

        <label>ID Dokter: 
        <input type="number" name="id_dokter" value="{{ $catatan->id_dokter }}" required></label><br><br>

        <label>Tanggal Periksa:</label><br>
        <input type="date" name="tanggal" value="{{ $catatan->tanggal }}" required><br><br>

        <label>Diagnosis:</label><br>
        <input type="text" name="diagnosis" value="{{ $catatan->diagnosis }}" required><br><br>

        <label>Hasil Pemeriksaan:</label><br>
        <input type="text" name="hasil_pemeriksaan" value="{{ $catatan->hasil_pemeriksaan }}" required><br><br>

        <label>Resep Obat:</label><br>
        <input type="text" name="resep_obat" value="{{ $catatan->resep_obat }}" required><br><br>

        <label>Tindak Lanjut:</label><br>
        <input type="text" name="tindak_lanjut" value="{{ $catatan->tindak_lanjut }}"><br><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('catatanmedis.index') }}" style="display: inline-block; margin-top: 16px;">← Kembali</a>
@endsection
