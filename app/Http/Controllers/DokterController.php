<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

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

        Dokter::create([
            'nama' => $request->input('nama'),
            'spesialisasi' => $request->input('spesialisasi'),
            'no_telepon' => $request->input('no_telepon'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('dokter.index');
    }

    public function show($id)
    {
        $dokter = Dokter::findOrFail($id);
        return view('dokter.show', compact('dokter'));
    }

    public function edit($id)
    {
        $dokter = Dokter::findOrFail($id);
        return view('dokter.edit', compact('dokter'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'spesialisasi' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:dokters,email,',
        ]);

        $dokter = Dokter::findOrFail($id);

        $dokter->update([
            'nama' => $request->input('nama'),
            'spesialisasi' => $request->input('spesialisasi'),
            'no_telepon' => $request->input('no_telepon'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('dokter.show', $id);
    }

    public function delete($id)
    {
        $dokter = Dokter::findOrFail($id);
        return view('dokter.delete', compact('dokter'));
    }

    public function destroy($id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();

        return redirect()->route('dokter.index');
    }
}