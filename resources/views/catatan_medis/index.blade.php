@extends('layouts.app')

@section('content')
    <h1>Catatan Medis</h1>
    <a href="{{ route('catatan_medis.create') }}">Tambah Catatan</a>
    <ul>
        @foreach ($data as $catatan)
            <li>
                {{ $catatan['Tanggal'] }} - {{ $catatan['Diagnosis'] }}
                <a href="{{ route('catatan_medis.show', $catatan['ID_Catatan']) }}">Lihat</a>
                <a href="{{ route('catatan_medis.edit', $catatan['ID_Catatan']) }}">Edit</a>
                <form action="{{ route('catatan_medis.destroy', $catatan['ID_Catatan']) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
