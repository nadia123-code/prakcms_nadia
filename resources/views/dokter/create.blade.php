@extends('layouts.app')
@section('content')
<h1>Tambah Dokter</h1>
<form method="POST" action="{{ route('dokter.store') }}">
    @csrf
    <label>Nama:</label>
    <input type="text" name="Nama"><br>

    <label>Spesialisasi:</label>
    <input type="text" name="Spesialisasi"><br>

    <label>Nomor Telepon:</label>
    <input type="text" name="Nomor_Telepon"><br>

    <label>Email:</label>
    <input type="email" name="Email"><br>

    <button type="submit">Simpan</button>
</form>
@endsection
