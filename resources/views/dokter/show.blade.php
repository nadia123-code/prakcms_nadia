@extends('layouts.app')

@section('title', 'Detail Dokter')

@section('content')





    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-4">Detail Dokter</h2>
                    <ul class="list-group mb-4">
                        <li class="list-group-item"><strong>Nama:</strong> {{ $dokter->nama }}</li>
                        <li class="list-group-item"><strong>Spesialisasi:</strong> {{ $dokter->spesialisasi }}</li>
                        <li class="list-group-item"><strong>No Telepon:</strong> {{ $dokter->no_telepon }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $dokter->email }}</li>
                    </ul>
                    <a href="{{ route('dokter.edit', $dokter->id) }}" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                    <a href="{{ route('dokter.delete', $dokter->id) }}" class="btn btn-danger ms-2"><i class="bi bi-trash"></i> Hapus</a>
                    <a href="{{ route('dokter.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
