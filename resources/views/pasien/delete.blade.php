@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-4 text-danger">Hapus Pasien</h2>
                    <p>Apakah kamu yakin ingin menghapus pasien ini?</p>
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><strong>Nama:</strong> {{ $pasien->nama }}</li>
                        <li class="list-group-item"><strong>Tanggal Lahir:</strong> {{ $pasien->tanggal_lahir }}</li>
                        <li class="list-group-item"><strong>Jenis Kelamin:</strong> {{ $pasien->jenis_kelamin }}</li>
                        <li class="list-group-item"><strong>Alamat:</strong> {{ $pasien->alamat }}</li>
                        <li class="list-group-item"><strong>Nomor Telepon:</strong> {{ $pasien->no_telepon }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $pasien->email }}</li>
                        <li class="list-group-item"><strong>Riwayat Medis:</strong> {{ $pasien->riwayat_medis }}</li>
                    </ul>
                    <form action="{{ route('pasien.destroy', $pasien->id) }}" method="POST" class="d-flex gap-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                        <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
