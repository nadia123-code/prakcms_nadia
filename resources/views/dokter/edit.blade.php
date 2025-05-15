@extends('layouts.app')

@section('content')
    <h2>Edit Dokter</h2>
    <form method="POST" action="{{ route('dokter.update', $dokter->id) }}">
        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $dokter->nama }}"><br><br>

        <label>Spesialisasi:</label><br>
        <input type="text" name="spesialisasi" value="{{ $dokter->spesialisasi }}"><br><br>

        <label>No Telepon:</label><br>
        <input type="text" name="no_telepon" value="{{ $dokter->no_telepon }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $dokter->email }}"><br><br>

        <button type="submit">Update</button>
    </form>
@endsection
