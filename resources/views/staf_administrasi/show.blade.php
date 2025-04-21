@extends('layouts.app')

@section('content')
<h2>Detail Staf Administrasi</h2>
<p>ID Staf: {{ $item['ID_Staf'] }}</p>
<p>ID Akun: {{ $item['ID_Akun'] }}</p>
<p>Nama: {{ $item['Nama'] }}</p>
<p>Jabatan: {{ $item['Jabatan'] }}</p>
<p>Nomor Telepon: {{ $item['Nomor_Telepon'] }}</p>
<p>Email: {{ $item['Email'] }}</p>
<a href="{{ route('staf_administrasi.index') }}">Kembali</a>
@endsection
