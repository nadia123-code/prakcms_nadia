@extends('layouts.app')

@section('content')
<h1>Edit Dokter</h1>
<form method="POST" action="{{ route('dokter.update', $dokter['ID_Dokter']) }}">
    @csrf
    @method('PUT')
    <label>Nama:</label>
    <input type="text" name="Nama" value="{{ $dokter['Nama'] }}"><br>

    <label>Spesialisasi:</label>
    <input type="text" name="Spesialisasi" value="{{ $dokter['Spesialisasi'] }}"><br>

    <label>Nomor Telepon:</label>
    <input type="text" name="Nomor_Telepon" value="{{ $dokter['Nomor_Telepon'] }}"><br>

    <label>Email:</label>
    <input type="email" name="Email" value="{{ $dokter['Email'] }}"><br>

    <button type="submit">Perbarui</button>
</form>
@endsection
