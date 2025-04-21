@extends('layouts.app')

@section('content')
<h2>Tambah Staf Administrasi</h2>
<form method="POST" action="{{ route('staf_administrasi.store') }}">
    @csrf
    <input name="ID_Akun" placeholder="ID Akun"><br>
    <input name="Nama" placeholder="Nama"><br>
    <input name="Jabatan" placeholder="Jabatan"><br>
    <input name="Nomor_Telepon" placeholder="No Telepon"><br>
    <input name="Email" placeholder="Email"><br>
    <button type="submit">Simpan</button>
</form>
@endsection
