<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    // app/Http/Controllers/AdmingalerieController.php

    public function index()
    {
        $galeri = Galeri::all(); // Ganti dengan model dan nama tabel yang sesuai
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
            return redirect()->route('admin.galeri.index')->with('error', 'galeri perusahaan tidak ditemukan.');
        }

        return view('admin.galeri.edit', compact('galeri'));
    }

    public function store(Request $request)
    {
        // // Debugging statement to check if the request reaches the store method
        // dd('Reached store method');

        $validatedData = $request->validate([

            'caption' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Check if the image file is valid
        if (!$request->file('image')->isValid()) {
            return redirect()->back()->withInput()->withErrors(['image' => 'Invalid image file.']);
        }

        // Generate a unique filename for the image
        $imagePath = $request->file('image')->store('images', 'public');

        // Create a new galeri instance and save it to the database
        $galeri = new Galeri();
        $galeri->caption = $request->caption;
        $galeri->image = $imagePath;
        $galeri->save();

        return redirect()->route('galeri.index')->with('success', 'galeri perusahaan berhasil dibuat.');
    }


    public function update(Request $request, $id)
    {
        $galeri = Galeri::find($id);
        if (!$galeri) {
            return redirect()->route('galeri.index')->with('error', 'galeri perusahaan tidak ditemukan.');
        }

        $validatedData = $request->validate([
            'caption' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Generate a unique file title with timestamp
            $imagePath = $request->file('image')->store('images', 'public');
            Storage::disk('public')->delete($galeri->image); // Hapus image lama
            $galeri->image = $imagePath;
        }
        $galeri->caption = $request->caption;
        $galeri->save();

        return redirect()->route('galeri.index')->with('success', 'galeri perusahaan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $galeri = Galeri::find($id);
        if (!$galeri) {
            return redirect()->route('galeri.index')->with('error', 'galeri perusahaan tidak ditemukan.');
        }

        // Hapus image dari penyimpanan
        Storage::disk('public')->delete($galeri->image);

        // Hapus data galeri perusahaan dari database
        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'galeri perusahaan berhasil dihapus.');
    }
}
