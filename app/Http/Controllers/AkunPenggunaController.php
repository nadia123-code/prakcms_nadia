<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkunPengguna;

class AkunPenggunaController extends Controller
{
    public function index()
    {
        $data = AkunPengguna::all();
        return view('akun_pengguna.index', compact('data'));
    }

    public function show($id)
    {
        $item = AkunPengguna::find($id);
        return view('akun_pengguna.show', compact('item'));
    }

    public function create()
    {
        return view('akun_pengguna.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('akun_pengguna.index');
    }

    public function edit($id)
    {
        $item = AkunPengguna::find($id);
        return view('akun_pengguna.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('akun_pengguna.index');
    }

    public function delete($id)
    {
        $item = AkunPengguna::find($id);
        return view('akun_pengguna.delete', compact('item'));
    }

    public function destroy($id)
    {
        return redirect()->route('akun_pengguna.index');
    }
}
