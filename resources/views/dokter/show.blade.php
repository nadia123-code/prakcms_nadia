@extends('layouts.app')

@section('title', 'Detail Dokter')

@section('content')
    <h2>Detail Dokter</h2>

    <p><strong>Nama:</strong> {{ $dokter->nama }}</p>
    <p><strong>Spesialisasi:</strong> {{ $dokter->spesialisasi }}</p>
    <p><strong>No Telepon:</strong> {{ $dokter->no_telepon }}</p>
    <p><strong>Email:</strong> {{ $dokter->email }}</p>

    <br>

    <a href="{{ route('dokter.edit', $dokter->id) }}">✏ Edit</a> |
    <a href="{{ route('dokter.delete', $dokter->id) }}">🗑 Hapus</a>

    <a href="{{ route('dokter.index') }}">Kembali</a>


@endsection
