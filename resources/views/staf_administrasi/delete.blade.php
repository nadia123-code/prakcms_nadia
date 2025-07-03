@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-4 text-danger">Hapus Staf Administrasi</h2>
                    <p>Apakah kamu yakin ingin menghapus staf ini?</p>
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><strong>Nama:</strong> {{ $stafadministrasi->nama }}</li>
                        <li class="list-group-item"><strong>Jabatan:</strong> {{ $stafadministrasi->jabatan }}</li>
                        <li class="list-group-item"><strong>Nomor Telepon:</strong> {{ $stafadministrasi->no_telepon }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $stafadministrasi->email }}</li>
                    </ul>
                    <form method="POST" action="{{ route('stafadministrasi.destroy', $stafadministrasi->id) }}" class="d-flex gap-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                        <a href="{{ route('stafadministrasi.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
