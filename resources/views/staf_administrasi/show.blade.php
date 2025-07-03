@extends('layouts.app')

@section('title', 'Detail Staf Administrasi')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-4">Detail Staf Administrasi</h2>
                    <ul class="list-group mb-4">
                        <li class="list-group-item"><strong>ID Akun Pengguna:</strong> {{ $stafadministrasi->id_akunpengguna }}</li>
                        <li class="list-group-item"><strong>Nama:</strong> {{ $stafadministrasi->nama }}</li>
                        <li class="list-group-item"><strong>Jabatan:</strong> {{ $stafadministrasi->jabatan }}</li>
                        <li class="list-group-item"><strong>Nomor Telepon:</strong> {{ $stafadministrasi->no_telepon }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $stafadministrasi->email }}</li>
                    </ul>
                    <a href="{{ route('stafadministrasi.edit', $stafadministrasi->id) }}" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                    <a href="{{ route('stafadministrasi.delete', $stafadministrasi->id) }}" class="btn btn-danger ms-2"><i class="bi bi-trash"></i> Hapus</a>
                    <a href="{{ route('stafadministrasi.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
