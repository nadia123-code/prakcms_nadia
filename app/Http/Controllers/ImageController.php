<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Tampilkan halaman upload beserta semua gambar.
     */
    public function create()
    {
        $images = Image::all();
        return view('upload', compact('images'));
    }

    /**
     * Simpan gambar baru ke storage dan database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Image::create([
            'title' => $request->title,
            'image_path' => $imagePath,
        ]);

        // Redirect ke halaman upload dan tampilkan semua gambar
        return redirect()->route('image.create')->with('success', 'Gambar berhasil diunggah!');
    }

    /**
     * Hapus gambar berdasarkan ID.
     */
    public function destroy($id)
    {
        $image = Image::findOrFail($id);

        if (Storage::disk('public')->exists($image->image_path)) {
            Storage::disk('public')->delete($image->image_path);
        }

        $image->delete();

        return redirect()->route('image.create')->with('success', 'Gambar berhasil dihapus!');
    }
}
