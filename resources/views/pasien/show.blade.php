@extends('layouts.app')

@section('title', 'Detail Pasien')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-4">Detail Pasien</h2>
                    <ul class="list-group mb-4">
                        <li class="list-group-item"><strong>ID Akun Pengguna:</strong> {{ $pasien->id_akunpengguna }}</li>
                        <li class="list-group-item"><strong>Nama:</strong> {{ $pasien->nama }}</li>
                        <li class="list-group-item"><strong>Tanggal Lahir:</strong> {{ $pasien->tanggal_lahir }}</li>
                        <li class="list-group-item"><strong>Jenis Kelamin:</strong> {{ $pasien->jenis_kelamin }}</li>
                        <li class="list-group-item"><strong>Alamat:</strong> {{ $pasien->alamat }}</li>
                        <li class="list-group-item"><strong>Nomor Telepon:</strong> {{ $pasien->no_telepon }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $pasien->email }}</li>
                        <li class="list-group-item"><strong>Riwayat Medis:</strong> {{ $pasien->riwayat_medis }}</li>
                    </ul>
                    <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                    <a href="{{ route('pasien.delete', $pasien->id) }}" class="btn btn-danger ms-2"><i class="bi bi-trash"></i> Hapus</a>
                    <a href="{{ route('pasien.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
