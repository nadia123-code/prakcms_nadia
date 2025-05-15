@extends('layouts.app')

@section('title', 'Tambah Catatan Medis')

@section('content')
    <h2 style="margin-bottom: 16px;">Tambah Catatan Medis Baru</h2>

    <form method="POST" action="{{ route('catatanmedis.store') }}">
        @csrf

        <label>ID Pasien: 
            <input type="number" name="id_pasien" required>
        </label><br>

        <label>ID Dokter: 
            <input type="number" name="id_dokter" required>
        </label><br>

        <label>Tanggal Periksa:
            <input type="date" name="tanggal" required>
        </label><br>

        <label>Diagnosis:
            <input type="text" name="diagnosis" required>
        </label><br>

        <label>Hasil Pemeriksaan:
            <input type="text" name="hasil_pemeriksaan" required>
        </label><br>

        <label>Resep Obat:
            <input type="text" name="resep_obat" required>
        </label><br>

        <label>Tindak Lanjut:
            <input type="text" name="tindak_lanjut">
        </label><br>

        <button type="submit" style="margin-top: 10px;">Tambah</button>
    </form>

    <a href="{{ route('catatanmedis.index') }}" style="display: inline-block; margin-top: 20px;">
        ← Kembali ke daftar
    </a>
@endsection
