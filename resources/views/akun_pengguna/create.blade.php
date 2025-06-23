@extends('layouts.app')

@section('title', 'Tambah Akun Pengguna')

@section('content')
    <h2 style="margin-bottom: 16px;">Tambah Akun Pengguna Baru</h2>

    @if(session('success'))
        <div style="color: green; font-weight: bold;">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div style="color: red; font-weight: bold;">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('akunpengguna.store') }}">
    @csrf
        <label>Username: <input type="text" name="username" required></label><br>
        <label>Password: <input type="text" name="password" required></label><br>
        <label>Peran: <input type="text" name="peran" required></label><br>
        <button type="submit" style="margin-top: 10px;">Tambah</button>
    </form>
    <a href="{{ route('akunpengguna.index') }}" style="display: inline-block; margin-top: 20px;">← Kembali ke daftar</a>
@endsection
