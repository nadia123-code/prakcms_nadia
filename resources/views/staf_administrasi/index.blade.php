@extends('layouts.app')

@section('content')
<h2>Data Staf Administrasi</h2>
<a href="{{ route('staf_administrasi.create') }}">Tambah Staf</a>
<ul>
@foreach($data as $staf)
    <li>
        {{ $staf['Nama'] }} ({{ $staf['Jabatan'] }})
        <a href="{{ route('staf_administrasi.show', $staf['ID_Staf']) }}">Lihat</a> |
        <a href="{{ route('staf_administrasi.edit', $staf['ID_Staf']) }}">Edit</a> |
        <form action="{{ route('staf_administrasi.destroy', $staf['ID_Staf']) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    </li>
@endforeach
</ul>
@endsection
