@extends('layouts.app')

@section('title', 'Daftar Pasien')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="display-5">Daftar Pasien</h1>
        <a href="/pasien/create" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Pasien</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            @if($pasiens->count())
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>No Telepon</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pasiens as $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p['nama'] }}</td>
                                    <td>{{ $p['tanggal_lahir'] ?? '-' }}</td>
                                    <td>{{ $p['jenis_kelamin'] ?? '-' }}</td>
                                    <td>{{ $p['no_telepon'] ?? '-' }}</td>
                                    <td>{{ $p['email'] ?? '-' }}</td>
                                    <td>
                                        <a href="/pasien/{{ $p['id'] }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i> Detail</a>
                                        <a href="/pasien/{{ $p['id'] }}/edit" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                                        <a href="/pasien/{{ $p['id'] }}/delete" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-info mb-0">Tidak ada pasien.</div>
            @endif
        </div>
    </div>
@endsection
