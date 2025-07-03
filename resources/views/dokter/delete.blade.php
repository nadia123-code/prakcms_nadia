@extends('layouts.app')

@section('content')


    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-4 text-danger">Hapus Dokter</h2>
                    <p>Apakah kamu yakin ingin menghapus dokter ini?</p>
                    <ul class="list-group mb-4">
                        <li class="list-group-item"><strong>Nama:</strong> {{ $dokter->nama }}</li>
                        <li class="list-group-item"><strong>Spesialisasi:</strong> {{ $dokter->spesialisasi }}</li>
                        <li class="list-group-item"><strong>No Telepon:</strong> {{ $dokter->no_telepon }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $dokter->email }}</li>
                    </ul>
                    <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Ya, Hapus</button>
                    </form>
                    <a href="{{ route('dokter.index') }}" class="btn btn-secondary ms-2">Batal</a>
                </div>
            </div>
        </div>
    </div>
@endsection
