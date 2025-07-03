@extends('layouts.app')

@section('title', 'Tambah Akun Pengguna')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-4">Tambah Akun Pengguna</h2>
                    @if(session('success'))
                        <div class="alert alert-success text-center">{{ session('success') }}</div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger text-center">{{ session('error') }}</div>
                    @endif
                    <form method="POST" action="{{ route('akunpengguna.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="text" name="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Peran</label>
                            <input type="text" name="peran" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Akun</button>
                        <a href="{{ route('akunpengguna.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
