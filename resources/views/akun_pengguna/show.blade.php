@extends('layouts.app')

@section('content')
<h2>Detail Akun Pengguna</h2>
<p>ID: {{ $item['ID_Akun'] }}</p>
<p>Username: {{ $item['Username'] }}</p>
<p>Password: {{ $item['Password'] }}</p>
<p>Peran: {{ $item['Peran'] }}</p>
<p>ID Staf: {{ $item['STAF_ADMINISTRASI_ID_Staf'] }}</p>
<p>ID Akun Staf: {{ $item['STAF_ADMINISTRASI_ID_Akun'] }}</p>
<p>ID Pasien: {{ $item['PASIEN_ID_Pasien'] }}</p>
<p>ID Akun Pasien: {{ $item['PASIEN_ID_Akun'] }}</p>
<a href="{{ route('akun_pengguna.index') }}">Kembali</a>
@endsection
