@extends('layouts.app')

@section('title', 'Daftar Staf Administrasi')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="display-5">Daftar Staf Administrasi</h1>
        <a href="{{ route('stafadministrasi.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Staf</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            @if($stafadministrasis->count())
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>No Telepon</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stafadministrasis as $s)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $s['nama'] }}</td>
                                    <td>{{ $s['jabatan'] ?? '-' }}</td>
                                    <td>{{ $s['no_telepon'] ?? '-' }}</td>
                                    <td>{{ $s['email'] ?? '-' }}</td>
                                    <td>
                                        <a href="/stafadministrasi/{{ $s['id'] }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i> Detail</a>
                                        <a href="/stafadministrasi/{{ $s['id'] }}/edit" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                                        <a href="/stafadministrasi/{{ $s['id'] }}/delete" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-info mb-0">Tidak ada staf administrasi.</div>
            @endif
        </div>
    </div>
@endsection
