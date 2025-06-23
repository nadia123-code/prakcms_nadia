@extends('layouts.app')

@section('title', 'Detail Akun Pengguna')

@section('content')
    <h2>Detail Akun Pengguna</h2>

    @if(session('success'))
        <div style="color: green; font-weight: bold;">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div style="color: red; font-weight: bold;">{{ session('error') }}</div>
    @endif

    <p><strong>Username:</strong> {{ $akunpengguna->username }}</p>
    <p><strong>Password:</strong> {{ $akunpengguna->password }}</p>
    <p><strong>Peran:</strong> {{ $akunpengguna->peran }}</p>

    <br>

    <a href="{{ route('akunpengguna.edit', $akunpengguna->id) }}">✏ Edit</a> |
    <a href="{{ route('akunpengguna.delete', $akunpengguna->id) }}">🗑 Hapus</a> |
    <a href="{{ route('akunpengguna.index') }}">← Kembali</a>
@endsection
