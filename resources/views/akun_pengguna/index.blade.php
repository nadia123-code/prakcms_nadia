@extends('layouts.app')

@section('title', 'Daftar Akun Pengguna')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="display-5">Daftar Akun Pengguna</h1>
        <a href="/akunpengguna/create" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Akun Pengguna</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            @if(session('error'))
                <div class="alert alert-danger text-center">{{ session('error') }}</div>
            @endif
            @if($akunpenggunas->count())
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Peran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($akunpenggunas as $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p['username'] }}</td>
                                    <td>{{ $p['peran'] ?? '-' }}</td>
                                    <td>
                                        <a href="/akunpengguna/{{ $p['id'] }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i> Detail</a>
                                        <a href="/akunpengguna/{{ $p['id'] }}/edit" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                                        <a href="/akunpengguna/{{ $p['id'] }}/delete" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-info mb-0">Tidak ada akun pengguna.</div>
            @endif
        </div>
    </div>
@endsection
