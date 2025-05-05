@extends('layouts.app')

@section('content')
    <h2>Hapus Dokter</h2>
    <p>Apakah kamu yakin ingin menghapus dokter ini?</p>

    <ul>
        <li><strong>Nama:</strong> {{ $dokter->nama }}</li>
        <li><strong>Spesialisasi:</strong> {{ $dokter->spesialisasi }}</li>
        <li><strong>Nomor Telepon:</strong> {{ $dokter->nomor_telepon }}</li>
        <li><strong>Email:</strong> {{ $dokter->email }}</li>
    </ul>

    <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Ya, Hapus</button>
        <a href="{{ route('dokter.index') }}">Batal</a>
    </form>
@endsection
