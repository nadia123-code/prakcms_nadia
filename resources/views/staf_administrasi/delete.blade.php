@extends('layouts.app')

@section('content')
    <h2>Hapus Staf Administrasi</h2>
    <p>Apakah kamu yakin ingin menghapus staf ini?</p>

    <ul>
        <li><strong>Nama:</strong> {{ $stafadministrasi->nama }}</li>
        <li><strong>Jabatan:</strong> {{ $stafadministrasi->jabatan }}</li>
        <li><strong>Nomor Telepon:</strong> {{ $stafadministrasi->no_telepon }}</li>
        <li><strong>Email:</strong> {{ $stafadministrasi->email }}</li>
    </ul>

    <form method="POST" action="{{ route('stafadministrasi.destroy', $stafadministrasi->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Ya, Hapus</button>
        <a href="{{ route('stafadministrasi.index') }}">Batal</a>
    </form>
@endsection
