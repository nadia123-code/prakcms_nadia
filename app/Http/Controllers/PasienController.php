<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    // Menampilkan daftar semua pasien
    public function index()
    {
        return view('pasien.index', [
            'pasiens' => Pasien::all()
        ]);
    }

    // Menampilkan form tambah pasien
    public function create()
    {
        return view('pasien.create');
    }

    // Menyimpan data pasien baru
    public function store(Request $request)
    {
        $request->validate([
            'id_akunpengguna'=> 'required|exists:akunpenggunas,id',
            'nama' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|max:20',
            'alamat' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:20',
            'email' => 'required|email|max:100',
            'riwayat_medis' => 'nullable|string',
        ]);

        Pasien::create([
            'id_akunpengguna' => $request->input('id_akunpengguna'),
            'nama' => $request->input('nama'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'alamat' => $request->input('alamat'),
            'no_telepon' => $request->input('no_telepon'),
            'email' => $request->input('email'),
            'riwayat_medis' => $request->input('riwayat_medis'),
        ]);

        return redirect()->route('pasien.index');
    }

    // Menampilkan detail pasien
    public function show($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasien.show', compact('pasien'));
    }

    // Menampilkan form edit pasien
    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasien.edit', compact('pasien'));
    }

    // Memproses update data pasien
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_akunpengguna'=> 'required|exists:akunpenggunas,id',
            'nama' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|max:20',
            'alamat' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:20',
            'email' => 'required|email|max:100',
            'riwayat_medis' => 'nullable|string',
        ]);

        $pasien = Pasien::findOrFail($id);

        $pasien->update([
            'id_akunpengguna' => $request->input('id_akunpengguna'),
            'nama' => $request->input('nama'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'alamat' => $request->input('alamat'),
            'no_telepon' => $request->input('no_telepon'),
            'email' => $request->input('email'),
            'riwayat_medis' => $request->input('riwayat_medis'),
        ]);

        return redirect()->route('pasien.show', $id);
    }

    // Menampilkan halaman konfirmasi hapus
    public function delete($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasien.delete', compact('pasien'));
    }

    // Menghapus data pasien
    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        return redirect()->route('pasien.index');
    }
}
