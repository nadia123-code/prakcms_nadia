<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatatanMedis;

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

        CatatanMedis::create([
            'id_pasien' => $request->input('id_pasien'),
            'id_dokter' => $request->input('id_dokter'),
            'tanggal' => $request->tanggal,
            'diagnosis' => $request->diagnosis,
            'hasil_pemeriksaan' => $request->hasil_pemeriksaan,
            'resep_obat' => $request->resep_obat,
            'tindak_lanjut' => $request->tindak_lanjut,
        ]);

        return redirect()->route('catatanmedis.index');
    }

    // Menampilkan detail catatan medis
    public function show($id)
    {
        $catatan = CatatanMedis::findOrFail($id);
        return view('catatanmedis.show', compact('catatan'));
    }

    // Menampilkan form edit catatan medis
    public function edit($id)
    {
        $catatan = CatatanMedis::findOrFail($id);
        return view('catatanmedis.edit', compact('catatan'));
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

        return redirect()->route('catatanmedis.show', $id);
    }

    // Halaman konfirmasi hapus
    public function delete($id)
    {
        $catatan = CatatanMedis::findOrFail($id);
        return view('catatanmedis.delete', compact('catatan'));
    }

    // Menghapus data catatan medis
    public function destroy($id)
    {
        $catatan = CatatanMedis::findOrFail($id);
        $catatan->delete();

        return redirect()->route('catatanmedis.index');
    }
}
