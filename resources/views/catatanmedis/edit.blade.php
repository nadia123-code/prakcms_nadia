@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-4">Edit Catatan Medis</h2>
                    <form method="POST" action="{{ route('catatanmedis.update', $catatan->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">ID Pasien</label>
                            <input type="number" name="id_pasien" class="form-control" value="{{ $catatan->id_pasien }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ID Dokter</label>
                            <input type="number" name="id_dokter" class="form-control" value="{{ $catatan->id_dokter }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Periksa</label>
                            <input type="date" name="tanggal" class="form-control" value="{{ $catatan->tanggal }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Diagnosis</label>
                            <input type="text" name="diagnosis" class="form-control" value="{{ $catatan->diagnosis }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Hasil Pemeriksaan</label>
                            <input type="text" name="hasil_pemeriksaan" class="form-control" value="{{ $catatan->hasil_pemeriksaan }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Resep Obat</label>
                            <input type="text" name="resep_obat" class="form-control" value="{{ $catatan->resep_obat }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tindak Lanjut</label>
                            <input type="text" name="tindak_lanjut" class="form-control" value="{{ $catatan->tindak_lanjut }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('catatanmedis.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
