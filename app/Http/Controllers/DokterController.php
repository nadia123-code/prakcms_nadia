<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::all();
        return view('dokter.index', compact('dokters'));
    }

    public function create()
    {
        return view('dokter.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil ditambahkan (dummy).');
    }

    public function show($id)
    {
        $dokter = Dokter::find($id);
        return view('dokter.show', compact('dokter'));
    }

    public function edit($id)
    {
        $dokter = Dokter::find($id);
        return view('dokter.edit', compact('dokter'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil diperbarui (dummy).');
    }

    public function destroy($id)
    {
        return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil dihapus (dummy).');
    }
}
