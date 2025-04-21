@extends('layouts.app')

@section('content')
<h1>Daftar Pasien</h1>
<a href="{{ route('pasien.create') }}">+ Tambah Pasien</a>
<ul>
    @foreach ($pasiens as $pasien)
        <li>
            <a href="{{ route('pasien.show', $pasien['ID_Pasien']) }}">{{ $pasien['Nama'] }}</a>
            |
            <a href="{{ route('pasien.edit', $pasien['ID_Pasien']) }}">Edit</a>
            |
            <form action="{{ route('pasien.destroy', $pasien['ID_Pasien']) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
