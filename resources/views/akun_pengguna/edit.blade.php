@extends('layouts.app')

@section('content')
<h2>Edit Akun Pengguna</h2>
<form method="POST" action="{{ route('akun_pengguna.update', $item['ID_Akun']) }}">
    @csrf
    @method('PUT')
    <input name="Username" value="{{ $item['Username'] }}"><br>
    <input name="Password" value="{{ $item['Password'] }}"><br>
    <input name="Peran" value="{{ $item['Peran'] }}"><br>
    <input name="STAF_ADMINISTRASI_ID_Staf" value="{{ $item['STAF_ADMINISTRASI_ID_Staf'] }}"><br>
    <input name="STAF_ADMINISTRASI_ID_Akun" value="{{ $item['STAF_ADMINISTRASI_ID_Akun'] }}"><br>
    <input name="PASIEN_ID_Pasien" value="{{ $item['PASIEN_ID_Pasien'] }}"><br>
    <input name="PASIEN_ID_Akun" value="{{ $item['PASIEN_ID_Akun'] }}"><br>
    <button type="submit">Update</button>
</form>
@endsection
