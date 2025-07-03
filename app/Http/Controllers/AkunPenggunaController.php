<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkunPengguna;
use Illuminate\Support\Facades\Log;

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

        try {
            AkunPengguna::create([
                'username' => $request->input('username'),
                'password' => $request->input('password'),
                'peran' => $request->input('peran'),
            ]);
            Log::info("Berhasil menambahkan akun pengguna dengan username: " . $request->input('username'));
            return redirect()->route('akunpengguna.index')->with('success', 'Data akun pengguna berhasil ditambahkan');
        } catch (\Throwable $th) {
            Log::error("Gagal menambahkan akun pengguna. Error: " . $th->getMessage());
            return redirect()->route('akunpengguna.index')->with('error', 'Terjadi kesalahan saat menyimpan data');
        }
    }

    public function show($id)
    {
        try {
            $akunpengguna = AkunPengguna::findOrFail($id);
            Log::info("Menampilkan detail akun pengguna dengan ID: $id");
            return view('akun_pengguna.show', compact('akunpengguna'));
        } catch (\Throwable $th) {
            Log::error("Gagal menampilkan detail akun pengguna ID: $id. Error: " . $th->getMessage());
            return redirect()->route('akunpengguna.index')->with('error', 'Data Akun Pengguna tidak ditemukan');
        }
    }

    public function edit($id)
    {
        try {
            $akunpengguna = AkunPengguna::findOrFail($id);
            Log::info("Mengakses form edit untuk akun pengguna ID: $id");
            return view('akun_pengguna.edit', compact('akunpengguna'));
        } catch (\Throwable $th) {
            Log::error("Gagal mengakses form edit akun pengguna ID: $id. Error: " . $th->getMessage());
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
            Log::info("Berhasil update akun pengguna ID: $id");
            return redirect()->route('akunpengguna.show', $id)->with('success', 'Data akun pengguna berhasil diperbarui');
        } catch (\Throwable $th) {
            Log::error("Gagal update akun pengguna ID: $id. Error: " . $th->getMessage());
            return redirect()->route('akunpengguna.index')->with('error', 'Gagal memperbarui. Data Akun Pengguna tidak ditemukan');
        }
    }

    public function delete($id)
    {
        try {
            $akunpengguna = AkunPengguna::findOrFail($id);
            Log::info("Mengakses halaman konfirmasi hapus akun pengguna ID: $id");
            return view('akun_pengguna.delete', compact('akunpengguna'));
        } catch (\Throwable $th) {
            Log::error("Gagal mengakses halaman delete akun pengguna ID: $id. Error: " . $th->getMessage());
            return redirect()->route('akunpengguna.index')->with('error', 'Data Akun Pengguna tidak ditemukan');
        }
    }

    public function destroy($id)
    {
        try {
            $akunpengguna = AkunPengguna::findOrFail($id);
            $akunpengguna->delete();
            Log::info("Berhasil menghapus akun pengguna ID: $id");
            return redirect()->route('akunpengguna.index')->with('success', 'Data akun pengguna berhasil dihapus');
        } catch (\Throwable $th) {
            Log::error("Gagal menghapus akun pengguna ID: $id. Error: " . $th->getMessage());
            return redirect()->route('akunpengguna.index')->with('error', 'Gagal menghapus. Data Akun Pengguna tidak ditemukan');
        }
    }
}
