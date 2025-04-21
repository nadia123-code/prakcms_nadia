@extends('layouts.app')

@section('content')
<h2>Edit Staf Administrasi</h2>
<form method="POST" action="{{ route('staf_administrasi.update', $item['ID_Staf']) }}">
    @csrf
    @method('PUT')
    <input name="ID_Akun" value="{{ $item['ID_Akun'] }}"><br>
    <input name="Nama" value="{{ $item['Nama'] }}"><br>
    <input name="Jabatan" value="{{ $item['Jabatan'] }}"><br>
    <input name="Nomor_Telepon" value="{{ $item['Nomor_Telepon'] }}"><br>
    <input name="Email" value="{{ $item['Email'] }}"><br>
    <button type="submit">Update</button>
</form>
@endsection
