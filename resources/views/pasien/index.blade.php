@extends('layouts.app')

@section('title', 'Daftar Pasien')

@section('content')
    <h1>Daftar Pasien</h1>

    <ul>
        @forelse($pasiens as $p) 
            <li>
                <a href="/pasien/{{ $p['id'] }}">{{ $p['nama'] }}</a>
            </li>
        @empty
            <p>Tidak ada pasien.</p>
        @endforelse
    </ul>

    <a href="/pasien/create" style="display: inline-block; margin-top: 20px;">+ Tambah Pasien</a>
    <br><br>
@endsection
