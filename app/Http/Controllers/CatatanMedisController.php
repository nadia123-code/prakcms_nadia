<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatatanMedis;

class CatatanMedisController extends Controller
{
    public function index()
    {
        $data = CatatanMedis::all();
        return view('catatan_medis.index', compact('data'));
    }

    public function create()
    {
        return view('catatan_medis.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('catatan_medis.index')->with('success', 'Catatan berhasil disimpan (dummy)');
    }

    public function show($id)
    {
        $catatan = CatatanMedis::find($id);
        return view('catatan_medis.show', compact('catatan'));
    }

    public function edit($id)
    {
        $catatan = CatatanMedis::find($id);
        return view('catatan_medis.edit', compact('catatan'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('catatan_medis.index')->with('success', 'Catatan berhasil diperbarui (dummy)');
    }

    public function destroy($id)
    {
        return redirect()->route('catatan_medis.index')->with('success', 'Catatan berhasil dihapus (dummy)');
    }
}
