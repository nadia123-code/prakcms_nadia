@extends('layouts.app')

@section('title', 'Detail Akun Pengguna')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-4">Detail Akun Pengguna</h2>
                    <ul class="list-group mb-4">
                        <li class="list-group-item"><strong>Username:</strong> {{ $akunpengguna->username }}</li>
                        <li class="list-group-item"><strong>Password:</strong> {{ $akunpengguna->password }}</li>
                        <li class="list-group-item"><strong>Peran:</strong> {{ $akunpengguna->peran }}</li>
                    </ul>
                    <a href="{{ route('akunpengguna.edit', $akunpengguna->id) }}" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                    <a href="{{ route('akunpengguna.delete', $akunpengguna->id) }}" class="btn btn-danger ms-2"><i class="bi bi-trash"></i> Hapus</a>
                    <a href="{{ route('akunpengguna.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
