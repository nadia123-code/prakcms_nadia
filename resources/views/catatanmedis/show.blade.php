@extends('layouts.app')

@section('title', 'Detail Catatan Medis')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-4">Detail Catatan Medis</h2>
                    <ul class="list-group mb-4">
                        <li class="list-group-item"><strong>ID Pasien:</strong> {{ $catatan->id_pasien }}</li>
                        <li class="list-group-item"><strong>ID Dokter:</strong> {{ $catatan->id_dokter }}</li>
                        <li class="list-group-item"><strong>Tanggal:</strong> {{ $catatan->tanggal }}</li>
                        <li class="list-group-item"><strong>Diagnosis:</strong> {{ $catatan->diagnosis }}</li>
                        <li class="list-group-item"><strong>Hasil Pemeriksaan:</strong> {{ $catatan->hasil_pemeriksaan }}</li>
                        <li class="list-group-item"><strong>Resep Obat:</strong> {{ $catatan->resep_obat }}</li>
                        <li class="list-group-item"><strong>Tindak Lanjut:</strong> {{ $catatan->tindak_lanjut ?? 'Tidak ada tindak lanjut' }}</li>
                    </ul>
                    <a href="{{ route('catatanmedis.edit', $catatan->id) }}" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                    <a href="{{ route('catatanmedis.delete', $catatan->id) }}" class="btn btn-danger ms-2"><i class="bi bi-trash"></i> Hapus</a>
                    <a href="{{ route('catatanmedis.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
