@extends('layouts.app')

@section('content')
<h2>Hapus Akun Pengguna</h2>
<p>Apakah kamu yakin ingin menghapus akun ini?</p>

<ul>
    <li><strong>Username:</strong> {{ $akunpengguna->username }}</li>
    <li><strong>Peran:</strong> {{ $akunpengguna->peran }}</li>
</ul>

<form method="POST" action="{{ route('akunpengguna.destroy', $akunpengguna->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Ya, Hapus</button>
    <a href="{{ route('akunpengguna.index') }}">Batal</a>
</form>
@endsection
