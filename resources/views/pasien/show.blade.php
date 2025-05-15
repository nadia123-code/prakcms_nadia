@extends('layouts.app')

@section('title', 'Detail Pasien')

@section('content')
    <h2>Detail Pasien</h2>
    
    <p><strong>ID Akun Pengguna:</strong> {{ $pasien->id_akunpengguna }}</p>
    <p><strong>Nama:</strong> {{ $pasien->nama }}</p>
    <p><strong>Tanggal Lahir:</strong> {{ $pasien->tanggal_lahir }}</p>
    <p><strong>Jenis Kelamin:</strong> {{ $pasien->jenis_kelamin }}</p>
    <p><strong>Alamat:</strong> {{ $pasien->alamat }}</p>
    <p><strong>Nomor Telepon:</strong> {{ $pasien->no_telepon }}</p>
    <p><strong>Email:</strong> {{ $pasien->email }}</p>
    <p><strong>Riwayat Medis:</strong> {{ $pasien->riwayat_medis }}</p>

    <br>

    <a href="{{ route('pasien.edit', $pasien->id) }}">✏ Edit</a> |
    <a href="{{ route('pasien.delete', $pasien->id) }}">🗑 Hapus</a>

    <a href="{{ route('pasien.index') }}">Kembali</a>
@endsection
