@extends('layouts.app')

@section('title', 'Tambah Akun Pengguna')

@section('content')
    <h2 style="margin-bottom: 16px;">Tambah Akun Pengguna Baru</h2>

    <form method="POST" action="{{ route('akun_pengguna.store') }}">
    @csrf
        <label>Username: <input type="text" name="username" required></label><br>
        <label>Password: <input type="text" name="password" required></label><br>
        <label>Peran: <input type="text" name="peran" required></label><br>
        <button type="submit" style="margin-top: 10px;">Tambah</button>
    </form>
    <a href="{{ route('akun_pengguna.index') }}" style="display: inline-block; margin-top: 20px;">← Kembali ke daftar</a>
@endsection