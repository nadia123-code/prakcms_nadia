@extends('layouts.app')

@section('title', 'Tambah Catatan Medis')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-4">Tambah Catatan Medis Baru</h2>
                    <form method="POST" action="{{ route('catatanmedis.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">ID Pasien</label>
                            <input type="number" name="id_pasien" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ID Dokter</label>
                            <input type="number" name="id_dokter" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Periksa</label>
                            <input type="date" name="tanggal" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Diagnosis</label>
                            <input type="text" name="diagnosis" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Hasil Pemeriksaan</label>
                            <input type="text" name="hasil_pemeriksaan" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Resep Obat</label>
                            <input type="text" name="resep_obat" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tindak Lanjut</label>
                            <input type="text" name="tindak_lanjut" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a href="{{ route('catatanmedis.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('catatanmedis.index') }}" style="display: inline-block; margin-top: 20px;">
        ← Kembali ke daftar
    </a>
@endsection
