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
            'username' => 'required|string|max:50|unique:akunpenggunas,username',
            'password' => 'required|string|max:50',
            'peran' => 'required|string|max:225',
        ]);

        AkunPengguna::create([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'peran' => $request->input('peran'),
        ]);

        return redirect()->route('akunpengguna.index')->with('success', 'Data akun pengguna berhasil ditambahkan');
    }

    public function show($id)
    {
        try {
            $akunpengguna = AkunPengguna::findOrFail($id);
            return view('akun_pengguna.show', compact('akunpengguna'));
        } catch (\Throwable $th) {
            return redirect()->route('akunpengguna.index')->with('error', 'Data Akun Pengguna tidak ditemukan');
        }
    }

    public function edit($id)
    {
        try {
            $akunpengguna = AkunPengguna::findOrFail($id);
            return view('akun_pengguna.edit', compact('akunpengguna'));
        } catch (\Throwable $th) {
            return redirect()->route('akunpengguna.index')->with('error', 'Data Akun Pengguna tidak ditemukan');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:50|unique:akunpenggunas,username,' . $id,
            'password' => 'required|string|max:50',
            'peran' => 'required|string|max:225',
        ]);

        try {
            $akunpengguna = AkunPengguna::findOrFail($id);

            $data = [
                'username' => $request->input('username'),
                'password' => $request->input('password'),
                'peran' => $request->input('peran'),
            ];

            $akunpengguna->update($data);

            return redirect()->route('akunpengguna.show', $id)->with('success', 'Data akun pengguna berhasil diperbarui');
        } catch (\Throwable $th) {
            return redirect()->route('akunpengguna.index')->with('error', 'Gagal memperbarui. Data Akun Pengguna tidak ditemukan');
        }
    }

    public function delete($id)
    {
        try {
            $akunpengguna = AkunPengguna::findOrFail($id);
            return view('akun_pengguna.delete', compact('akunpengguna'));
        } catch (\Throwable $th) {
            return redirect()->route('akunpengguna.index')->with('error', 'Data Akun Pengguna tidak ditemukan');
        }
    }

    public function destroy($id)
    {
        try {
            $akunpengguna = AkunPengguna::findOrFail($id);
            $akunpengguna->delete();

            return redirect()->route('akunpengguna.index')->with('success', 'Data akun pengguna berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->route('akunpengguna.index')->with('error', 'Gagal menghapus. Data Akun Pengguna tidak ditemukan');
        }
    }
}
