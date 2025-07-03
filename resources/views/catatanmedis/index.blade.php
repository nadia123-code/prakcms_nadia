@extends('layouts.app')

@section('title', 'Daftar Catatan Medis')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="display-5">Daftar Catatan Medis</h1>
        <a href="{{ route('catatanmedis.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Catatan Medis</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            @if($catatanmedis->count())
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Diagnosis</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($catatanmedis as $catatan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $catatan->diagnosis }}</td>
                                    <td>{{ $catatan->tanggal }}</td>
                                    <td>
                                        <a href="{{ route('catatanmedis.show', $catatan->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i> Detail</a>
                                        <a href="{{ route('catatanmedis.edit', $catatan->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                                        <a href="{{ route('catatanmedis.delete', $catatan->id) }}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-info mb-0">Tidak ada catatan medis.</div>
            @endif
        </div>
    </div>
@endsection
