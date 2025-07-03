<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatatanMedis;
use Illuminate\Support\Facades\Log;

class CatatanMedisController extends Controller
{
    // Menampilkan semua data catatan medis
    public function index()
    {
        return view('catatanmedis.index', [
            'catatanmedis' => CatatanMedis::all()
        ]);
    }

    // Menampilkan form tambah catatan medis
    public function create()
    {
        return view('catatanmedis.create');
    }

    // Menyimpan data catatan medis baru
    public function store(Request $request)
    {
        $request->validate([
            'id_pasien'=> 'required|exists:pasiens,id',
            'id_dokter'=> 'required|exists:dokters,id',
            'tanggal' => 'required|date',
            'diagnosis' => 'required|string|max:255',
            'hasil_pemeriksaan' => 'required|string|max:255',
            'resep_obat' => 'required|string|max:255',
            'tindak_lanjut' => 'nullable|string|max:255',
        ]);

        try {
            CatatanMedis::create([
                'id_pasien' => $request->input('id_pasien'),
                'id_dokter' => $request->input('id_dokter'),
                'tanggal' => $request->tanggal,
                'diagnosis' => $request->diagnosis,
                'hasil_pemeriksaan' => $request->hasil_pemeriksaan,
                'resep_obat' => $request->resep_obat,
                'tindak_lanjut' => $request->tindak_lanjut,
            ]);
            Log::info("Berhasil menambahkan catatan medis untuk pasien ID: {$request->id_pasien}");
            return redirect()->route('catatanmedis.index')->with('success','Data catatan medis berhasil ditambahkan');
        } catch (\Throwable $th) {
            Log::error("Gagal menambahkan catatan medis. Error: " . $th->getMessage());
            return redirect()->route('catatanmedis.index')->with('error','Terjadi kesalahan saat menyimpan data catatan medis');
        }
    }

    // Menampilkan detail catatan medis
    public function show($id)
    {
        try {
            $catatan = CatatanMedis::findOrFail($id);
            Log::info("Menampilkan detail catatan medis ID: $id");
            return view('catatanmedis.show', compact('catatan'));
        } catch (\Throwable $th) {
            Log::error("Gagal menampilkan detail catatan medis ID: $id. Error: " . $th->getMessage());
            return redirect()->route('catatanmedis.index')->with('error','Data catatan medis tidak ditemukan');
        }
    }

    // Menampilkan form edit catatan medis
    public function edit($id)
    {
        try {
            $catatan = CatatanMedis::findOrFail($id);
            Log::info("Mengakses form edit catatan medis ID: $id");
            return view('catatanmedis.edit', compact('catatan'));
        } catch (\Throwable $th) {
            Log::error("Gagal mengakses form edit catatan medis ID: $id. Error: " . $th->getMessage());
            return redirect()->route('catatanmedis.index')->with('error','Data catatan medis tidak ditemukan');
        }
    }

    // Memperbarui data catatan medis
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pasien'=> 'required|exists:pasiens,id',
            'id_dokter'=> 'required|exists:dokters,id',
            'tanggal' => 'required|date',
            'diagnosis' => 'required|string|max:255',
            'hasil_pemeriksaan' => 'required|string|max:255',
            'resep_obat' => 'required|string|max:255',
            'tindak_lanjut' => 'nullable|string|max:255',
        ]);

        try {
            $catatan = CatatanMedis::findOrFail($id);
            $catatan->update([
                'id_pasien' => $request->input('id_pasien'),
                'id_dokter' => $request->input('id_dokter'),
                'tanggal' => $request->tanggal,
                'diagnosis' => $request->diagnosis,
                'hasil_pemeriksaan' => $request->hasil_pemeriksaan,
                'resep_obat' => $request->resep_obat,
                'tindak_lanjut' => $request->tindak_lanjut,
            ]);
            Log::info("Berhasil memperbarui catatan medis ID: $id");
            return redirect()->route('catatanmedis.show', $id)->with('success','Data catatan medis berhasil diperbarui');
        } catch (\Throwable $th) {
            Log::error("Gagal memperbarui catatan medis ID: $id. Error: " . $th->getMessage());
            return redirect()->route('catatanmedis.index')->with('error','Terjadi kesalahan saat memperbarui data catatan medis');
        }
    }

    // Halaman konfirmasi hapus
    public function delete($id)
    {
        try {
            $catatan = CatatanMedis::findOrFail($id);
            Log::info("Mengakses halaman konfirmasi hapus catatan medis ID: $id");
            return view('catatanmedis.delete', compact('catatan'));
        } catch (\Throwable $th) {
            Log::error("Gagal mengakses halaman delete catatan medis ID: $id. Error: " . $th->getMessage());
            return redirect()->route('catatanmedis.index')->with('error','Data catatan medis tidak ditemukan');
        }
    }

    // Menghapus data catatan medis
    public function destroy($id)
    {
        try {
            $catatan = CatatanMedis::findOrFail($id);
            $catatan->delete();
            Log::info("Berhasil menghapus catatan medis ID: $id");
            return redirect()->route('catatanmedis.index')->with('success','Data catatan medis berhasil dihapus');
        } catch (\Throwable $th) {
            Log::error("Gagal menghapus catatan medis ID: $id. Error: " . $th->getMessage());
            return redirect()->route('catatanmedis.index')->with('error','Terjadi kesalahan saat menghapus data catatan medis');
        }
    }
}
