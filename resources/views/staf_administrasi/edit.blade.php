@extends('layouts.app')

@section('content')
    <h2>Edit Staf Administrasi</h2>
    <form method="POST" action="{{ route('stafadministrasi.update', $stafadministrasi->id) }}">
        @csrf
        @method('PUT')

        <label>ID Akun Pengguna: 
        <input type="number" name="id_akunpengguna" value="{{ $stafadministrasi->id_akunpengguna }}" required></label><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $stafadministrasi->nama }}"><br><br>

        <label>Jabatan:</label><br>
        <input type="text" name="jabatan" value="{{ $stafadministrasi->jabatan }}"><br><br>

        <label>Nomor Telepon:</label><br>
        <input type="text" name="no_telepon" value="{{ $stafadministrasi->no_telepon }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $stafadministrasi->email }}"><br><br>

        <button type="submit">Update</button>
    </form>
@endsection
