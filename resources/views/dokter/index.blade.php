@extends('layouts.app')

@section('title', 'Daftar Dokter')

@section('content')
    <h1>Daftar Dokter</h1>

    <ul>
        @forelse($dokters as $d)
            <li>
                <a href="/dokter/{{ $d['id'] }}">{{ $d['nama'] }}</a>
            </li>
        @empty
            <p>Tidak ada dokter.</p>
        @endforelse
    </ul>

    <a href="/dokter/create" style="display: inline-block; margin-top: 20px;">+ Tambah Dokter</a>
    <br><br>
@endsection