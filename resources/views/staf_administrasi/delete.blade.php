@extends('layouts.app')

@section('content')
<h2>Hapus Staf Administrasi</h2>
<p>Apakah kamu yakin ingin menghapus data berikut?</p>

<ul>
    <li><strong>Nama:</strong> {{ $item['Nama'] }}</li>
    <li><strong>Jabatan:</strong> {{ $item['Jabatan'] }}</li>
    <li><strong>No Telepon:</strong> {{ $item['Nomor_Telepon'] }}</li>
    <li><strong>Email:</strong> {{ $item['Email'] }}</li>
</ul>

<form method="POST" action="{{ route('staf_administrasi.destroy', $item['ID_Staf']) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Ya, Hapus</button>
    <a href="{{ route('staf_administrasi.index') }}">Batal</a>
</form>
@endsection
