<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkunPengguna;

class AkunPenggunaController extends Controller
{
    public function index()
    {
        return view('akun_pengguna.index', [
            'akunpenggunas' => AkunPengguna::all()
        ]);
    }

    public function create()
    {
        return view('akun_pengguna.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50|unique:akunpenggunas,username,',
            'password' => 'required|string|max:50',
            'peran' => 'required|string|max:225',
        ]);

        AkunPengguna::create([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'peran' => $request->input('peran'),
        ]);

        return redirect()->route('akunpengguna.index');
    }

    public function show($id)
    {
        $akunpengguna = AkunPengguna::findOrFail($id);
        return view('akun_pengguna.show', compact('akunpengguna'));
    }

    public function edit($id)
    {
        $akunpengguna = AkunPengguna::findOrFail($id);
        return view('akun_pengguna.edit', compact('akunpengguna'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:50|unique:akunpenggunas,username,',
            'password' => 'required|string|max:50',
            'peran' => 'required|string|max:225',
        ]);

        $akunpengguna = AkunPengguna::findOrFail($id);

        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'peran' => $request->input('peran'),
        ];

        $akunpengguna->update($data);

        return redirect()->route('akunpengguna.show', $id);
    }

    public function delete($id)
    {
        $akunpengguna = AkunPengguna::findOrFail($id);
        return view('akun_pengguna.delete', compact('akunpengguna'));
    }

    public function destroy($id)
    {
        $akunpengguna = AkunPengguna::findOrFail($id);
        $akunpengguna->delete();

        return redirect()->route('akunpengguna.index');
    }
}
