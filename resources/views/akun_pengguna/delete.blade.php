@extends('layouts.app')

@section('content')
<h2>Hapus Akun Pengguna</h2>
<p>Apakah kamu yakin ingin menghapus akun ini?</p>

<ul>
    <li><strong>Username:</strong> {{ $akun_pengguna->username }}</li>
    <li><strong>Peran:</strong> {{ $akun_pengguna->peran }}</li>
</ul>

<form method="POST" action="{{ route('akun_pengguna.destroy', $akun_pengguna->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Ya, Hapus</button>
    <a href="{{ route('akun_pengguna.index') }}">Batal</a>
</form>
@endsection
