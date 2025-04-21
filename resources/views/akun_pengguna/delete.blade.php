@extends('layouts.app')

@section('content')
<h2>Hapus Akun Pengguna</h2>
<p>Apakah kamu yakin ingin menghapus akun ini?</p>

<ul>
    <li><strong>Username:</strong> {{ $item['Username'] }}</li>
    <li><strong>Peran:</strong> {{ $item['Peran'] }}</li>
</ul>

<form method="POST" action="{{ route('akun_pengguna.destroy', $item['ID_Akun']) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Ya, Hapus</button>
    <a href="{{ route('akun_pengguna.index') }}">Batal</a>
</form>
@endsection
