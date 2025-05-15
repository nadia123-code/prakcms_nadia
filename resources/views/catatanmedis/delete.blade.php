@extends('layouts.app')

@section('content')
    <h2>Hapus Catatan Medis</h2>
    <p>Apakah kamu yakin ingin menghapus catatan medis ini?</p>

    <ul>
        <li><strong>Tanggal Periksa:</strong> {{ $catatan->tanggal }}</li>
        <li><strong>Diagnosis:</strong> {{ $catatan->diagnosis }}</li>
        <li><strong>Hasil Pemeriksaan:</strong> {{ $catatan->hasil_pemeriksaan }}</li>
        <li><strong>Resep Obat:</strong> {{ $catatan->resep_obat }}</li>
        <li><strong>Tindak Lanjut:</strong> {{ $catatan->tindak_lanjut ?? '-' }}</li>
    </ul>

    <form method="POST" action="{{ route('catatanmedis.destroy', $catatan->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Ya, Hapus</button>
        <a href="{{ route('catatanmedis.index') }}">Batal</a>
    </form>
@endsection
