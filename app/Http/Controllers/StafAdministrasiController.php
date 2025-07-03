<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StafAdministrasi;
use Illuminate\Support\Facades\Log;

class StafAdministrasiController extends Controller
{
    public function index()
    {
        return view('staf_administrasi.index', [
            'stafadministrasis' => StafAdministrasi::all()
        ]);
    }

    public function create()
    {
        return view('staf_administrasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_akunpengguna'=> 'required|exists:akunpenggunas,id',
            'nama' => 'required|string|max:100',
            'jabatan' => 'required|string|max:100',
            'no_telepon' => 'required|string|max:15',
            'email' => 'required|email|max:100',
        ]);

        try {
            StafAdministrasi::create([
                'id_akunpengguna' => $request->input('id_akunpengguna'),
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'no_telepon' => $request->no_telepon,
                'email' => $request->email,
            ]);
            Log::info("Berhasil menambahkan staf administrasi: " . $request->nama);
            return redirect()->route('stafadministrasi.index')->with('success','Data staf berhasil ditambahkan');
        } catch (\Throwable $th) {
            Log::error("Gagal menambahkan staf administrasi. Error: " . $th->getMessage());
            return redirect()->route('stafadministrasi.index')->with('error','Terjadi kesalahan saat menyimpan data staf administrasi');
        }
    }

    public function show($id)
    {
        try {
            $stafadministrasi = StafAdministrasi::findOrFail($id);
            Log::info("Menampilkan detail staf administrasi ID: $id");
            return view('staf_administrasi.show', compact('stafadministrasi'));
        } catch (\Throwable $th) {
            Log::error("Gagal menampilkan detail staf administrasi ID: $id. Error: " . $th->getMessage());
            return redirect()->route('stafadministrasi.index')->with('error','Data staf tidak ditemukan');
        }
    }

    public function edit($id)
    {
        try {
            $stafadministrasi = StafAdministrasi::findOrFail($id);
            Log::info("Mengakses form edit staf administrasi ID: $id");
            return view('staf_administrasi.edit', compact('stafadministrasi'));
        } catch (\Throwable $th) {
            Log::error("Gagal mengakses form edit staf administrasi ID: $id. Error: " . $th->getMessage());
            return redirect()->route('stafadministrasi.index')->with('error','Data staf tidak ditemukan');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_akunpengguna'=> 'required|exists:akunpenggunas,id',
            'nama' => 'required|string|max:100',
            'jabatan' => 'required|string|max:100',
            'no_telepon' => 'required|string|max:15',
            'email' => 'required|email|max:100',
        ]);

        try {
            $staf_administrasi = StafAdministrasi::findOrFail($id);

            $staf_administrasi->update([
                'id_akunpengguna' => $request->input('id_akunpengguna'),
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'no_telepon' => $request->no_telepon,
                'email' => $request->email,
            ]);
            Log::info("Berhasil memperbarui staf administrasi ID: $id");
            return redirect()->route('stafadministrasi.show', $id)->with('success','Data staf berhasil diperbarui');
        } catch (\Throwable $th) {
            Log::error("Gagal memperbarui staf administrasi ID: $id. Error: " . $th->getMessage());
            return redirect()->route('stafadministrasi.index')->with('error','Terjadi kesalahan saat memperbarui data staf administrasi');
        }
    }

    public function delete($id)
    {
        try {
            $stafadministrasi = StafAdministrasi::findOrFail($id);
            Log::info("Mengakses halaman konfirmasi hapus staf administrasi ID: $id");
            return view('staf_administrasi.delete', compact('stafadministrasi'));
        } catch (\Throwable $th) {
            Log::error("Gagal mengakses halaman hapus staf administrasi ID: $id. Error: " . $th->getMessage());
            return redirect()->route('stafadministrasi.index')->with('error','Data staf tidak ditemukan');
        }
    }

    public function destroy($id)
    {
        try {
            $staf_administrasi = StafAdministrasi::findOrFail($id);
            $staf_administrasi->delete();
            Log::info("Berhasil menghapus staf administrasi ID: $id");
            return redirect()->route('stafadministrasi.index')->with('success','Data staf berhasil dihapus');
        } catch (\Throwable $th) {
            Log::error("Gagal menghapus staf administrasi ID: $id. Error: " . $th->getMessage());
            return redirect()->route('stafadministrasi.index')->with('error','Terjadi kesalahan saat menghapus data staf administrasi');
        }
    }
}
