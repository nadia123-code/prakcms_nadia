@extends('layouts.app')

@section('title', 'Tambah Dokter')

@section('content')
    <h2 style="margin-bottom: 16px;">Tambah Dokter Baru</h2>

    <form method="POST" action="{{ route('dokter.store') }}" style="line-height: 2;">
        @csrf
        <label>Nama: <input type="text" name="nama" required></label><br>
        <label>Spesialisasi: <input type="text" name="spesialisasi" required></label><br>
        <label>Nomor Telepon: <input type="text" name="nomor_telepon" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <button type="submit" style="margin-top: 10px;">Tambah</button>
    </form>

    <a href="{{ route('dokter.index') }}" style="display: inline-block; margin-top: 20px;">← Kembali ke daftar</a>
@endsection