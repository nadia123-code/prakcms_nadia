@extends('layouts.app')

@section('content')
<h1>Hapus Pasien</h1>
<p>Apakah kamu yakin ingin menghapus pasien <strong>{{ $pasien['Nama'] }}</strong>?</p>
<form method="POST" action="{{ route('pasien.destroy', $pasien['ID_Pasien']) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Ya, Hapus</button>
    <a href="{{ route('pasien.index') }}">Batal</a>
</form>
@endsection
