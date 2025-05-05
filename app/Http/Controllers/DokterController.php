<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    // Menampilkan daftar semua dokter
    public function index()
    {
        return view('dokter.index', [
            'dokters' => Dokter::all()
        ]);
    }

    // Menampilkan form tambah dokter
    public function create()
    {
        return view('dokter.create');
    }

    // Menyimpan data dokter baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'spesialisasi' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        Dokter::create([
            'nama' => $request->input('nama'),
            'spesialisasi' => $request->input('spesialisasi'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('dokter.index');
    }

    // Menampilkan detail dokter
    public function show($id)
    {
        $dokter = Dokter::findOrFail($id);
        return view('dokter.show', compact('dokter'));
    }

    // Menampilkan form edit dokter
    public function edit($id)
    {
        $dokter = Dokter::findOrFail($id);
        return view('dokter.edit', compact('dokter'));
    }

    // Memproses update data dokter
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'spesialisasi' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        $dokter = Dokter::findOrFail($id);

        $dokter->update([
            'nama' => $request->input('nama'),
            'spesialisasi' => $request->input('spesialisasi'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'email' => $request->input('email'),
        ]);

        

        return redirect()->route('dokter.show', $id);
    }

    // Menampilkan halaman konfirmasi hapus
    public function delete($id)
    {
        $dokter = Dokter::findOrFail($id);
        return view('dokter.delete', compact('dokter'));
    }

    // Menghapus data dokter
    public function destroy($id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();

        return redirect()->route('dokter.index');
    }
}