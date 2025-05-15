@extends('layouts.app')

@section('title', 'Daftar Staf Administrasi')

@section('content')
    <h1>Daftar Staf Administrasi</h1>

    <ul>
        @forelse($stafadministrasis as $s)
            <li>
                <a href="/stafadministrasi/{{ $s['id'] }}">{{ $s['nama'] }}</a>
            </li>
        @empty
            <p>Tidak ada staf administrasi.</p>
        @endforelse
    </ul>

    <a href="{{ route('stafadministrasi.create') }}" style="display: inline-block; margin-top: 20px;">+ Tambah Staf</a>
    <br><br>
@endsection
