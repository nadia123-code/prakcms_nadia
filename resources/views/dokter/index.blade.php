@extends('layouts.app')

@section('content')
<h1>Daftar Dokter</h1>
<a href="{{ route('dokter.create') }}">+ Tambah Dokter</a>
<ul>
    @foreach ($dokters as $dokter)
        <li>
            <a href="{{ route('dokter.show', $dokter['ID_Dokter']) }}">{{ $dokter['Nama'] }}</a>
            |
            <a href="{{ route('dokter.edit', $dokter['ID_Dokter']) }}">Edit</a>
            |
            <form action="{{ route('dokter.destroy', $dokter['ID_Dokter']) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
