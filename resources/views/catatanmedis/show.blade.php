@extends('layouts.app')

@section('title', 'Detail Catatan Medis')

@section('content')
    <h2 style="margin-bottom: 16px;">Detail Catatan Medis</h2>

    <ul style="line-height: 1.8;">
        <li><strong>ID Pasien:</strong> {{ $catatan->id_pasien }}</li>
        <li><strong>ID Dokter:</strong> {{ $catatan->id_dokter }}</li>
        <li><strong>Tanggal:</strong> {{ $catatan->tanggal }}</li>
        <li><strong>Diagnosis:</strong> {{ $catatan->diagnosis }}</li>
        <li><strong>Hasil Pemeriksaan:</strong> {{ $catatan->hasil_pemeriksaan }}</li>
        <li><strong>Resep Obat:</strong> {{ $catatan->resep_obat }}</li>
        <li><strong>Tindak Lanjut:</strong> {{ $catatan->tindak_lanjut ?? 'Tidak ada tindak lanjut' }}</li>
    </ul>

    <div style="margin-top: 20px;">
        <a href="{{ route('catatanmedis.edit', $catatan->id) }}" style="margin-right: 10px;">✏ Edit</a>
        <a href="{{ route('catatanmedis.delete', $catatan->id) }}">🗑 Hapus</a>
    </div>

    <br>
    <a href="{{ route('catatanmedis.index') }}">← Kembali ke daftar</a>
@endsection
