@extends('layouts.app')

@section('title', 'Detail Staf Administrasi')

@section('content')
    <h2>Detail Staf Administrasi</h2>

    <p><strong>ID Akun Pengguna:</strong> {{ $stafadministrasi->id_akunpengguna }}</p>
    <p><strong>Nama:</strong> {{ $stafadministrasi->nama }}</p>
    <p><strong>Jabatan:</strong> {{ $stafadministrasi->jabatan }}</p>
    <p><strong>Nomor Telepon:</strong> {{ $stafadministrasi->no_telepon }}</p>
    <p><strong>Email:</strong> {{ $stafadministrasi->email }}</p>

    <br>

    <a href="{{ route('stafadministrasi.edit', $stafadministrasi->id) }}">✏ Edit</a> |
    <a href="{{ route('stafadministrasi.delete', $stafadministrasi->id) }}">🗑 Hapus</a>

    <a href="{{ route('stafadministrasi.index') }}">Kembali</a>

@endsection
