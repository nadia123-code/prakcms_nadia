@extends('layouts.app')

@section('content')
<h2>Tambah Akun Pengguna</h2>
<form method="POST" action="{{ route('akun_pengguna.store') }}">
    @csrf
    <input name="Username" placeholder="Username"><br>
    <input name="Password" placeholder="Password"><br>
    <input name="Peran" placeholder="Peran"><br>
    <input name="STAF_ADMINISTRASI_ID_Staf" placeholder="ID Staf"><br>
    <input name="STAF_ADMINISTRASI_ID_Akun" placeholder="ID Akun Staf"><br>
    <input name="PASIEN_ID_Pasien" placeholder="ID Pasien"><br>
    <input name="PASIEN_ID_Akun" placeholder="ID Akun Pasien"><br>
    <button type="submit">Simpan</button>
</form>
@endsection
