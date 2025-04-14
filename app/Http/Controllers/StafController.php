<?php

namespace App\Http\Controllers;

use App\Models\Staf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StafController extends Controller
{
    public function index()
    {
        $stafs = Staf::all();
        return view('staf.index', compact('stafs'));
    }

    public function create()
    {
        return view('staf.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'jabatan' => 'required|string|max:50',
            'nomor_telepon' => 'required|string|max:20',
            'email' => 'required|email|unique:staf_administrasi,email',
        ]);

        Staf::create([
            'nama' => $validated['nama'],
            'jabatan' => $validated['jabatan'],
            'nomor_telepon' => $validated['nomor_telepon'],
            'email' => $validated['email'],
            'id_akun' => Auth::id() ?? 1, // <-- Gunakan user yang login, atau default ke id 1
        ]);

        return redirect()->route('staf.index')->with('success', 'Staf berhasil ditambahkan.');
    }

    public function show($id)
    {
        $staf = Staf::findOrFail($id);
        return view('staf.show', compact('staf'));
    }

    public function edit($id)
    {
        $staf = Staf::findOrFail($id);
        return view('staf.edit', compact('staf'));
    }

    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'nama' => 'required|string|max:100',
        'jabatan' => 'required|string|max:50',
        'nomor_telepon' => 'required|string|max:20',
        'email' => 'required|email|unique:staf_administrasi,email,' . $id . ',id_staf',
    ]);

    $staf = Staf::findOrFail($id);
    $staf->update($validated);

    return redirect()->route('staf.index')->with('success', 'Data staf berhasil diperbarui.');
}

    public function destroy($id)
    {
        $staf = Staf::findOrFail($id);
        $staf->delete();

        return redirect()->route('staf.index')->with('success', 'Staf berhasil dihapus.');
    }

    public function confirmDelete($id)
{
    $staf = Staf::findOrFail($id);
    return view('staf.confirm-delete', compact('staf'));
}

}

