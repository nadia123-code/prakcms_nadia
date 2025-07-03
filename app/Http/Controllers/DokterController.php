<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use Illuminate\Support\Facades\Log;

class DokterController extends Controller
{
    public function index()
    {
        return view('dokter.index', [
            'dokters' => Dokter::all()
        ]);
    }

    public function create()
    {
        return view('dokter.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'spesialisasi' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:dokters,email,',
        ]);

        try {
            Dokter::create([
                'nama' => $request->input('nama'),
                'spesialisasi' => $request->input('spesialisasi'),
                'no_telepon' => $request->input('no_telepon'),
                'email' => $request->input('email'),
            ]);
            Log::info("Berhasil menambahkan dokter: " . $request->input('nama'));
            return redirect()->route('dokter.index')->with('success','Data dokter berhasil ditambahkan');
        } catch (\Throwable $th) {
            Log::error("Gagal menambahkan dokter. Error: " . $th->getMessage());
            return redirect()->route('dokter.index')->with('error','Terjadi kesalahan saat menyimpan data dokter');
        }
    }

    public function show($id)
    {
        try {
            $dokter = Dokter::findOrFail($id);
            Log::info("Menampilkan detail dokter ID: $id");
            return view('dokter.show', compact('dokter'));
        } catch (\Throwable $th) {
            Log::error("Gagal menampilkan detail dokter ID: $id. Error: " . $th->getMessage());
            return redirect()->route('dokter.index')->with('error','Data dokter tidak ditemukan');
        }
    }

    public function edit($id)
    {
        try {
            $dokter = Dokter::findOrFail($id);
            Log::info("Mengakses form edit dokter ID: $id");
            return view('dokter.edit', compact('dokter'));
        } catch (\Throwable $th) {
            Log::error("Gagal mengakses form edit dokter ID: $id. Error: " . $th->getMessage());
            return redirect()->route('dokter.index')->with('error','Data dokter tidak ditemukan');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'spesialisasi' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:dokters,email,' . $id,
        ]);

        try {
            $dokter = Dokter::findOrFail($id);

            $dokter->update([
                'nama' => $request->input('nama'),
                'spesialisasi' => $request->input('spesialisasi'),
                'no_telepon' => $request->input('no_telepon'),
                'email' => $request->input('email'),
            ]);
            Log::info("Berhasil memperbarui data dokter ID: $id");
            return redirect()->route('dokter.show', $id)->with('success','Data dokter berhasil diperbarui');
        } catch (\Throwable $th) {
            Log::error("Gagal memperbarui data dokter ID: $id. Error: " . $th->getMessage());
            return redirect()->route('dokter.index')->with('error','Terjadi kesalahan saat memperbarui data dokter');
        }
    }

    public function delete($id)
    {
        try {
            $dokter = Dokter::findOrFail($id);
            Log::info("Mengakses halaman konfirmasi hapus dokter ID: $id");
            return view('dokter.delete', compact('dokter'));
        } catch (\Throwable $th) {
            Log::error("Gagal mengakses halaman hapus dokter ID: $id. Error: " . $th->getMessage());
            return redirect()->route('dokter.index')->with('error','Data dokter tidak ditemukan');
        }
    }

    public function destroy($id)
    {
        try {
            $dokter = Dokter::findOrFail($id);
            $dokter->delete();
            Log::info("Berhasil menghapus data dokter ID: $id");
            return redirect()->route('dokter.index')->with('success','Data dokter berhasil dihapus');
        } catch (\Throwable $th) {
            Log::error("Gagal menghapus data dokter ID: $id. Error: " . $th->getMessage());
            return redirect()->route('dokter.index')->with('error','Terjadi kesalahan saat menghapus data dokter');
        }
    }
}
