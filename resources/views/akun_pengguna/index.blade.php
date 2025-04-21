@extends('layouts.app')

@section('content')
<h2>Daftar Akun Pengguna</h2>
<a href="{{ route('akun_pengguna.create') }}">Tambah Akun</a>
<ul>
@foreach($data as $akun)
    <li>
        {{ $akun['Username'] }} - {{ $akun['Peran'] }}
        <a href="{{ route('akun_pengguna.show', $akun['ID_Akun']) }}">Lihat</a> |
        <a href="{{ route('akun_pengguna.edit', $akun['ID_Akun']) }}">Edit</a> |
        <form action="{{ route('akun_pengguna.destroy', $akun['ID_Akun']) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    </li>
@endforeach
</ul>
@endsection
