@extends('layouts.app')

@section('title', 'Daftar Akun Pengguna')

@section('content')
    <h2 style="margin-bottom: 16px;">Daftar Akun Pengguna</h2>
    
    @if(session('error'))
        <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 15px; text-align: center;">
                {{ session('error') }}
        </div>
    @endif

    <ul>
        @forelse($akunpenggunas as $p)
            <li>
                <a href="/akunpengguna/{{ $p['id'] }}">{{ $p['username'] }}</a>
            </li>
        @empty
            <p>Tidak ada akun pengguna.</p>
        @endforelse
    </ul>

    <a href="/akunpengguna/create" style="display: inline-block; margin-top: 20px;">+ Tambah Akun Pengguna</a>
    <br><br>
@endsection
