<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkunPengguna;

class AkunPenggunaController extends Controller
{
    // Menampilkan daftar semua akun pengguna
    public function index()
    {
        return view('akun_pengguna.index', [
            'akun_penggunas' => AkunPengguna::all()
        ]);
    }

    // Menampilkan form tambah akun pengguna
    public function create()
    {
        return view('akun_pengguna.create');
    }

    // Menyimpan data akun pengguna baru
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50',
            'password' => 'required|string|max:50',
            'peran' => 'required|string|max:225',
        ]);

        AkunPengguna::create([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'peran' => $request->input('peran'),
        ]);

        return redirect()->route('akun_pengguna.index');
    }

    // Menampilkan detail akun pengguna
    public function show($id)
    {
        $akun_pengguna = AkunPengguna::findOrFail($id);
        return view('akun_pengguna.show', compact('akun_pengguna'));
    }

    // Menampilkan form edit akun pengguna
    public function edit($id)
    {
        $akun_pengguna = AkunPengguna::findOrFail($id);
        return view('akun_pengguna.edit', compact('akun_pengguna'));
    }

    // Memproses update data akun pengguna
    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:50',
            'password' => 'required|string|max:50',
            'peran' => 'required|string|max:225',
        ]);

        $akun_pengguna = AkunPengguna::findOrFail($id);

        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'peran' => $request->input('peran'),
        ];

        $akun_pengguna->update($data);

        return redirect()->route('akun_pengguna.show', $id);
    }

    // Menampilkan halaman konfirmasi hapus
    public function delete($id)
    {
        $akun_pengguna = AkunPengguna::findOrFail($id);
        return view('akun_pengguna.delete', compact('akun_pengguna'));
    }

    // Menghapus data akun pengguna
    public function destroy($id)
    {
        $akun_pengguna = AkunPengguna::findOrFail($id);
        $akun_pengguna->delete();

        return redirect()->route('akun_pengguna.index');
    }
}
