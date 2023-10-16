<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all();
        return view('admin.galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function edit($id)
    {
        $galeri = Galeri::find($id);
        if (!$galeri) {
            return redirect()->route('admin.galeri.index')->with('error', 'Galeri perusahaan tidak ditemukan.');
        }

        return view('admin.galeri.edit', compact('galeri'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'caption' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $image = $request->file('image');
        $imagePath =  time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imagePath);

        $galeri = new Galeri();
        $galeri->caption = $request->caption;
        $galeri->image = $imagePath;
        $galeri->save();

        return redirect()->route('galeri.index')->with('success', 'Galeri perusahaan berhasil dibuat.');
    }

    public function update(Request $request, $id)
    {
        $galeri = Galeri::find($id);
        if (!$galeri) {
            return redirect()->route('galeri.index')->with('error', 'Galeri perusahaan tidak ditemukan.');
        }

        $validatedData = $request->validate([
            'caption' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imagePath);

            // Hapus gambar lama jika ada
            if (File::exists(public_path('images/' . $galeri->image))) {
                File::delete(public_path('images/' . $galeri->image));
            }

            $galeri->image = $imagePath;
        }

        $galeri->caption = $request->caption;
        $galeri->save();

        return redirect()->route('galeri.index')->with('success', 'Galeri perusahaan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $galeri = Galeri::find($id);
        if (!$galeri) {
            return redirect()->route('galeri.index')->with('error', 'Galeri perusahaan tidak ditemukan.');
        }

        File::delete(public_path($galeri->image)); // Hapus gambar dari folder public/images

        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Galeri perusahaan berhasil dihapus.');
    }
}
