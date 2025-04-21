<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::all();
        return view('pasien.index', compact('pasiens'));
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('pasien.index')->with('success', 'Data pasien disimpan (dummy).');
    }

    public function show($id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.show', compact('pasien'));
    }

    public function edit($id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.edit', compact('pasien'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('pasien.index')->with('success', 'Data pasien diperbarui (dummy).');
    }

    public function destroy($id)
    {
        return redirect()->route('pasien.index')->with('success', 'Data pasien dihapus (dummy).');
    }
}
