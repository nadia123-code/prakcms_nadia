<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StafAdministrasi;

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

        StafAdministrasi::create([
            'id_akunpengguna' => $request->input('id_akunpengguna'),
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
        ]);

        return redirect()->route('stafadministrasi.index')->with('success','Data staf berhasil ditambahkan');
    }


    public function show($id)
    {
        $stafadministrasi = StafAdministrasi::findOrFail($id);
        return view('staf_administrasi.show', compact('stafadministrasi'));
    }

    public function edit($id)
    {
        $stafadministrasi = StafAdministrasi::findOrFail($id);
        return view('staf_administrasi.edit', compact('stafadministrasi'));
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

        $staf_administrasi = StafAdministrasi::findOrFail($id);

        $staf_administrasi->update([
            'id_akunpengguna' => $request->input('id_akunpengguna'),
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
        ]);

        return redirect()->route('stafadministrasi.show', $id)->with('success','Data staf berhasil diperbarui');
    }

    public function delete($id)
    {
        $stafadministrasi = StafAdministrasi::findOrFail($id);
        return view('staf_administrasi.delete', compact('stafadministrasi'));
    }

    public function destroy($id)
    {
        $staf_administrasi = StafAdministrasi::findOrFail($id);
        $staf_administrasi->delete();

        return redirect()->route('stafadministrasi.index')->with('success','Data staf berhasil dihapus');
    }
}
