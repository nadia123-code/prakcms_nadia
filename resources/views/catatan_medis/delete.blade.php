@extends('layouts.app')

@section('content')
    <h1>Hapus Catatan Medis</h1>
    <p>Apakah kamu yakin ingin menghapus catatan dengan ID: {{ $catatan['ID_Catatan'] }}?</p>
    <form action="{{ route('catatan_medis.destroy', $catatan['ID_Catatan']) }}" method="POST">
        @csrf @method('DELETE')
        <button type="submit">Ya, Hapus</button>
        <a href="{{ route('catatan_medis.index') }}">Batal</a>
    </form>
@endsection
