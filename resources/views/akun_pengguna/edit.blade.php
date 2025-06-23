@extends('layouts.app')

@section('content')
    <h2>Edit Akun Pengguna</h2>

    @if(session('success'))
        <div style="color: green; font-weight: bold;">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div style="color: red; font-weight: bold;">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('akunpengguna.update', $akunpengguna->id) }}">
        @csrf
        @method('PUT')

        <label>Username:</label><br>
        <input type="text" name="username" value="{{ $akunpengguna->username }}"><br><br>

        <label>Password:</label><br>
        <input type="text" name="password" value="{{ $akunpengguna->password }}"><br><br>

        <label>Peran:</label><br>
        <input type="text" name="peran" value="{{ $akunpengguna->peran }}"><br><br>
        <button type="submit">Update</button>
    </form>
@endsection
