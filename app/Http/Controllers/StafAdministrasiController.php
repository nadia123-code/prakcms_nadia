<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StafAdministrasi;

class StafAdministrasiController extends Controller
{
    public function index()
    {
        $data = StafAdministrasi::all();
        return view('staf-administrasi.index', compact('data'));
    }

    public function show($id)
    {
        $staf = StafAdministrasi::find($id);
        return view('staf-administrasi.show', compact('staf'));
    }

    public function create()
    {
        return view('staf-administrasi.create');
    }

    public function store(Request $request)
    {
        return redirect('/staf-administrasi')->with('success', 'Data dummy berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $staf = StafAdministrasi::find($id);
        return view('staf-administrasi.edit', compact('staf'));
    }

    public function update(Request $request, $id)
    {
        return redirect('/staf-administrasi')->with('success', 'Data dummy berhasil diperbarui.');
    }

    public function destroy($id)
    {
        return redirect('/staf-administrasi')->with('success', 'Data dummy berhasil dihapus.');
    }

    public function delete($id)
{
    $staf = StafAdministrasi::find($id);
    return view('staf-administrasi.delete', compact('staf'));
}

}
