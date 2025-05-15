@extends('layouts.app')

@section('title', 'Daftar Catatan Medis')

@section('content')
    <h2>Daftar Catatan Medis</h2>

    <ul>
        @forelse($catatanmedis as $catatan)
            <li>
                <a href="{{ route('catatanmedis.show', $catatan->id) }}">
                    {{ $catatan->diagnosis }} - {{ $catatan->tanggal }}
                </a>
            </li>
        @empty
            <p>Tidak ada catatan medis.</p>
        @endforelse
    </ul>

    <a href="{{ route('catatanmedis.create') }}" style="display: inline-block; margin-top: 20px;">+ Tambah Catatan Medis</a>
    <br><br>
@endsection
