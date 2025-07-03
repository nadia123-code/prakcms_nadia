<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use Illuminate\Support\Facades\Log;

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

        try {
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
            Log::info("Berhasil menambahkan pasien: " . $request->input('nama'));
            return redirect()->route('pasien.index')->with('success','Data pasien berhasil ditambahkan');
        } catch (\Throwable $th) {
            Log::error("Gagal menambahkan pasien. Error: " . $th->getMessage());
            return redirect()->route('pasien.index')->with('error','Terjadi kesalahan saat menyimpan data pasien');
        }
    }

    // Menampilkan detail pasien
    public function show($id)
    {
        try {
            $pasien = Pasien::findOrFail($id);
            Log::info("Menampilkan detail pasien ID: $id");
            return view('pasien.show', compact('pasien'));
        } catch (\Throwable $th) {
            Log::error("Gagal menampilkan detail pasien ID: $id. Error: " . $th->getMessage());
            return redirect()->route('pasien.index')->with('error','Data pasien tidak ditemukan');
        }
    }

    // Menampilkan form edit pasien
    public function edit($id)
    {
        try {
            $pasien = Pasien::findOrFail($id);
            Log::info("Mengakses form edit pasien ID: $id");
            return view('pasien.edit', compact('pasien'));
        } catch (\Throwable $th) {
            Log::error("Gagal mengakses form edit pasien ID: $id. Error: " . $th->getMessage());
            return redirect()->route('pasien.index')->with('error','Data pasien tidak ditemukan');
        }
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

        try {
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

            Log::info("Berhasil memperbarui data pasien ID: $id");
            return redirect()->route('pasien.show', $id)->with('success','Data pasien berhasil diperbarui');
        } catch (\Throwable $th) {
            Log::error("Gagal memperbarui data pasien ID: $id. Error: " . $th->getMessage());
            return redirect()->route('pasien.index')->with('error','Terjadi kesalahan saat memperbarui data pasien');
        }
    }

    // Menampilkan halaman konfirmasi hapus
    public function delete($id)
    {
        try {
            $pasien = Pasien::findOrFail($id);
            Log::info("Mengakses halaman konfirmasi hapus pasien ID: $id");
            return view('pasien.delete', compact('pasien'));
        } catch (\Throwable $th) {
            Log::error("Gagal mengakses halaman hapus pasien ID: $id. Error: " . $th->getMessage());
            return redirect()->route('pasien.index')->with('error','Data pasien tidak ditemukan');
        }
    }

    // Menghapus data pasien
    public function destroy($id)
    {
        try {
            $pasien = Pasien::findOrFail($id);
            $pasien->delete();
            Log::info("Berhasil menghapus data pasien ID: $id");
            return redirect()->route('pasien.index')->with('success','Data pasien berhasil dihapus');
        } catch (\Throwable $th) {
            Log::error("Gagal menghapus data pasien ID: $id. Error: " . $th->getMessage());
            return redirect()->route('pasien.index')->with('error','Terjadi kesalahan saat menghapus data pasien');
        }
    }
}
