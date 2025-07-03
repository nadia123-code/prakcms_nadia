@extends('layouts.app')

@section('title', 'Daftar Dokter')

@section('content')


    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="display-5">Daftar Dokter</h1>
        <a href="/dokter/create" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Dokter</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            @if($dokters->count())
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Spesialisasi</th>
                                <th>No Telepon</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dokters as $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $d['nama'] }}</td>
                                    <td>{{ $d['spesialisasi'] ?? '-' }}</td>
                                    <td>{{ $d['no_telepon'] ?? '-' }}</td>
                                    <td>{{ $d['email'] ?? '-' }}</td>
                                    <td>
                                        <a href="/dokter/{{ $d['id'] }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i> Detail</a>
                                        <a href="/dokter/{{ $d['id'] }}/edit" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                                        <a href="/dokter/{{ $d['id'] }}/delete" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-info mb-0">Tidak ada dokter.</div>
            @endif
        </div>
    </div>
@endsection