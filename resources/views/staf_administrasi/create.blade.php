@extends('layouts.app')

@section('title', 'Tambah Staf Administrasi')

@section('content')
    <h2 style="margin-bottom: 16px;">Tambah Staf Administrasi Baru</h2>

    <form method="POST" action="{{ route('stafadministrasi.store') }}">
    @csrf
        <label>ID Akun Pengguna: <input type="number" name="id_akunpengguna" required></label><br>
        <label>Nama: <input type="text" name="nama" required></label><br>
        <label>Jabatan: <input type="text" name="jabatan" required></label><br>
        <label>Nomor Telepon: <input type="text" name="no_telepon" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <button type="submit" style="margin-top: 10px;">Tambah</button>
    </form>
    
    <a href="{{ route('stafadministrasi.index') }}" style="display: inline-block; margin-top: 20px;">← Kembali ke daftar</a>
@endsection
