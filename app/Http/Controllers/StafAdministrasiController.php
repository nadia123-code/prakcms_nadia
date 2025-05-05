<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StafAdministrasi;
use App\Models\AkunPengguna;

class StafAdministrasiController extends Controller
{
    // Menampilkan daftar semua staf administrasi
    public function index()
    {
        return view('staf_administrasi.index', [
            'stafs' => StafAdministrasi::all()
        ]);
    }

    // Menampilkan form tambah staf administrasi
    public function create()
    {
        return view('staf_administrasi.create', [
            'akun_penggunas' => AkunPengguna::all()
        ]);
    }

    // Menyimpan data staf administrasi baru
    public function store(Request $request)
    {
        $request->validate([
            'ID_Staf' => 'required|string|max:50|unique:staf_administrasi,ID_Staf',
            'ID_Akun' => 'required|string|exists:akun_penggunas,id',
            'Nama' => 'required|string|max:100',
            'Jabatan' => 'required|string|max:100',
            'Nomor_Telepon' => 'required|string|max:15',
            'Email' => 'required|email|max:100',
        ]);

        StafAdministrasi::create($request->all());

        return redirect()->route('staf_administrasi.index');
    }

    // Menampilkan detail staf administrasi
    public function show($id)
    {
        $staf = StafAdministrasi::findOrFail($id);
        return view('staf_administrasi.show', compact('staf'));
    }

    // Menampilkan form edit staf administrasi
    public function edit($id)
    {
        $staf = StafAdministrasi::findOrFail($id);
        $akun_penggunas = AkunPengguna::all();

        return view('staf_administrasi.edit', compact('staf', 'akun_penggunas'));
    }

    // Memproses update data staf administrasi
    public function update(Request $request, $id)
    {
        $request->validate([
            'ID_Akun' => 'required|string|exists:akun_penggunas,id',
            'Nama' => 'required|string|max:100',
            'Jabatan' => 'required|string|max:100',
            'Nomor_Telepon' => 'required|string|max:15',
            'Email' => 'required|email|max:100',
        ]);

        $staf = StafAdministrasi::findOrFail($id);
        $staf->update($request->all());

        return redirect()->route('staf_administrasi.show', $id);
    }

    // Menampilkan halaman konfirmasi hapus staf
    public function delete($id)
    {
        $staf = StafAdministrasi::findOrFail($id);
        return view('staf_administrasi.delete', compact('staf'));
    }

    // Menghapus data staf administrasi
    public function destroy($id)
    {
        $staf = StafAdministrasi::findOrFail($id);
        $staf->delete();

        return redirect()->route('staf_administrasi.index');
    }
}
