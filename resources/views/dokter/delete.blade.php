@extends('layouts.app')

@section('content')
<h1>Hapus Dokter</h1>
<p>Apakah kamu yakin ingin menghapus dokter <strong>{{ $dokter['Nama'] }}</strong>?</p>

<form method="POST" action="{{ route('dokter.destroy', $dokter['ID_Dokter']) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Ya, Hapus</button>
    <a href="{{ route('dokter.index') }}">Batal</a>
</form>
@endsection
