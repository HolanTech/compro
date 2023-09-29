<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    // app/Http/Controllers/AdminlayananeController.php

    public function index()
    {
        $layanan = Layanan::all(); // Ganti dengan model dan nama tabel yang sesuai
        return view('admin.layanan.index', compact('layanan'));
    }
    public function create()
    {
        return view('admin.layanan.create');
    }

    public function edit($id)
    {
        $layanan = Layanan::find($id);
        if (!$layanan) {
            return redirect()->route('admin.layanan.index')->with('error', 'layanan perusahaan tidak ditemukan.');
        }

        return view('admin.layanan.edit', compact('layanan'));
    }

    public function store(Request $request)
    {
        // // Debugging statement to check if the request reaches the store method
        // dd('Reached store method');

        $validatedData = $request->validate([
            'title' => 'required|string',
            'note' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Check if the image file is valid
        if (!$request->file('image')->isValid()) {
            return redirect()->back()->withInput()->withErrors(['image' => 'Invalid image file.']);
        }

        // Generate a unique filename for the image
        $imagePath = $request->file('image')->store('images', 'public');

        // Create a new Layanan instance and save it to the database
        $layanane = new Layanan();
        $layanane->title = $validatedData['title'];
        $layanane->note = $validatedData['note'];
        $layanane->image = $imagePath;
        $layanane->save();

        return redirect()->route('layanan.index')->with('success', 'Layanan perusahaan berhasil dibuat.');
    }


    public function update(Request $request, $id)
    {
        $layanan = Layanan::find($id);
        if (!$layanan) {
            return redirect()->route('layanan.index')->with('error', 'Layanan perusahaan tidak ditemukan.');
        }

        $validatedData = $request->validate([
            'title' => 'required|string',
            'note' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $layanan->title = $validatedData['title'];
        $layanan->note = $validatedData['note'];

        if ($request->hasFile('image')) {
            // Generate a unique file title with timestamp
            $imagePath = $request->file('image')->store('images', 'public');
            Storage::disk('public')->delete($layanan->image); // Hapus image lama
            $layanan->image = $imagePath;
        }

        $layanan->save();

        return redirect()->route('layanan.index')->with('success', 'Layanan perusahaan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $layanan = Layanan::find($id);
        if (!$layanan) {
            return redirect()->route('layanan.index')->with('error', 'Layanan perusahaan tidak ditemukan.');
        }

        // Hapus image dari penyimpanan
        Storage::disk('public')->delete($layanan->image);

        // Hapus data layanan perusahaan dari database
        $layanan->delete();

        return redirect()->route('layanan.index')->with('success', 'Layanan perusahaan berhasil dihapus.');
    }
}
