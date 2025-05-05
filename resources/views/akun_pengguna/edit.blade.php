@extends('layouts.app')

@section('content')
    <h2>Edit Akun Pengguna</h2>
    <form method="POST" action="{{ route('akun_pengguna.update', $akun_pengguna->id) }}">
        @csrf
        @method('PUT')

        <label>Username:</label><br>
        <input type="text" name="username" value="{{ $akun_pengguna->username }}"><br><br>

        <label>Password:</label><br>
        <input type="text" name="password" value="{{ $akun_pengguna->password }}"><br><br>

        <label>Peran:</label><br>
        <input type="text" name="peran" value="{{ $akun_pengguna->peran }}"><br><br>
        <button type="submit">Update</button>
    </form>

@endsection
