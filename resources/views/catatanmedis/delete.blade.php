@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-4 text-danger">Hapus Catatan Medis</h2>
                    <p>Apakah kamu yakin ingin menghapus catatan medis ini?</p>
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><strong>Tanggal Periksa:</strong> {{ $catatan->tanggal }}</li>
                        <li class="list-group-item"><strong>Diagnosis:</strong> {{ $catatan->diagnosis }}</li>
                        <li class="list-group-item"><strong>Hasil Pemeriksaan:</strong> {{ $catatan->hasil_pemeriksaan }}</li>
                        <li class="list-group-item"><strong>Resep Obat:</strong> {{ $catatan->resep_obat }}</li>
                        <li class="list-group-item"><strong>Tindak Lanjut:</strong> {{ $catatan->tindak_lanjut ?? '-' }}</li>
                    </ul>
                    <form method="POST" action="{{ route('catatanmedis.destroy', $catatan->id) }}" class="d-flex gap-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                        <a href="{{ route('catatanmedis.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
