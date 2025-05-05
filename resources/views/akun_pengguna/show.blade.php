@extends('layouts.app')

@section('title', 'Detail Akun Pengguna')

@section('content')
<h2>Detail Akun Pengguna</h2>

    <p><strong>Username:</strong> {{ $akun_pengguna->username }}</p>
    <p><strong>Password:</strong> {{ $akun_pengguna->password }}</p>
    <p><strong>Peran:</strong> {{ $akun_pengguna->peran }}</p>

    <br>

    <a href="{{ route('akun_pengguna.edit', $akun_pengguna->id) }}">✏ Edit</a> |
    <a href="{{ route('akun_pengguna.delete', $akun_pengguna->id) }}">🗑 Hapus</a>

    <a href="{{ route('akun_pengguna.index') }}">Kembali</a>

@endsection
