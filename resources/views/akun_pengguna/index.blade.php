@extends('layouts.app')

@section('title', 'Daftar Akun Pengguna')

@section('content')
    <h2 style="margin-bottom: 16px;">Daftar Akun Pengguna</h2>

    <ul>
        @forelse($akun_penggunas as $p)
            <li>
                <a href="/akun_pengguna/{{ $p['id'] }}">{{ $p['username'] }}</a>
            </li>
        @empty
            <p>Tidak ada akun pengguna.</p>
        @endforelse
    </ul>

    <a href="/akun_pengguna/create" style="display: inline-block; margin-top: 20px;">+ Tambah Akun Pengguna</a>
    <br><br>
@endsection
