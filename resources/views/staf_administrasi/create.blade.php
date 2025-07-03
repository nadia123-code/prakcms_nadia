@extends('layouts.app')

@section('title', 'Tambah Staf Administrasi')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-4">Tambah Staf Administrasi Baru</h2>
                    <form method="POST" action="{{ route('stafadministrasi.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">ID Akun Pengguna</label>
                            <input type="number" name="id_akunpengguna" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor Telepon</label>
                            <input type="text" name="no_telepon" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a href="{{ route('stafadministrasi.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
