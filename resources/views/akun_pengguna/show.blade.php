@extends('layouts.app')

@section('title', 'Detail Akun Pengguna')

@section('content')
<h2>Detail Akun Pengguna</h2>

    <p><strong>Username:</strong> {{ $akunpengguna->username }}</p>
    <p><strong>Password:</strong> {{ $akunpengguna->password }}</p>
    <p><strong>Peran:</strong> {{ $akunpengguna->peran }}</p>

    <br>

    <a href="{{ route('akunpengguna.edit', $akunpengguna->id) }}">✏ Edit</a> |
    <a href="{{ route('akunpengguna.delete', $akunpengguna->id) }}">🗑 Hapus</a>

    <a href="{{ route('akunpengguna.index') }}">Kembali</a>

@endsection
