<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StafAdministrasi;

class StafAdministrasiController extends Controller
{
    public function index()
    {
        $data = StafAdministrasi::all();
        return view('staf_administrasi.index', compact('data'));
    }

    public function show($id)
    {
        $item = StafAdministrasi::find($id);
        return view('staf_administrasi.show', compact('item'));
    }

    public function create()
    {
        return view('staf_administrasi.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('staf_administrasi.index');
    }

    public function edit($id)
    {
        $item = StafAdministrasi::find($id);
        return view('staf_administrasi.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('staf_administrasi.index');
    }

    public function delete($id)
    {
        $item = StafAdministrasi::find($id);
        return view('staf_administrasi.delete', compact('item'));
    }

    public function destroy($id)
    {
        return redirect()->route('staf_administrasi.index');
    }
}
