@extends('layouts.app')

@section('content')
    <h2>Hapus Pasien</h2>
    <p>Apakah kamu yakin ingin menghapus pasien ini?</p>

    <ul>
        <li><strong>Nama:</strong> {{ $pasien->nama }}</li>
        <li><strong>Tanggal Lahir:</strong> {{ $pasien->tanggal_lahir }}</li>
        <li><strong>Jenis Kelamin:</strong> {{ $pasien->jenis_kelamin }}</li>
        <li><strong>Alamat:</strong> {{ $pasien->alamat }}</li>
        <li><strong>Nomor Telepon:</strong> {{ $pasien->nomor_telepon }}</li>
        <li><strong>Email:</strong> {{ $pasien->email }}</li>
        <li><strong>Riwayat Medis:</strong> {{ $pasien->riwayat_medis }}</li>
    </ul>

    <form action="{{ route('pasien.destroy', $pasien->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Ya, Hapus</button>
        <a href="{{ route('pasien.index') }}">Batal</a>
    </form>
@endsection
