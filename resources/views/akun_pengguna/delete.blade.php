@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-4 text-danger">Hapus Akun Pengguna</h2>
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <p>Apakah kamu yakin ingin menghapus akun ini?</p>
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><strong>Username:</strong> {{ $akunpengguna->username }}</li>
                        <li class="list-group-item"><strong>Peran:</strong> {{ $akunpengguna->peran }}</li>
                    </ul>
                    <form method="POST" action="{{ route('akunpengguna.destroy', $akunpengguna->id) }}" class="d-flex gap-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                        <a href="{{ route('akunpengguna.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
