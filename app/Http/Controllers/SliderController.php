<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    // app/Http/Controllers/AdminSlidereController.php

    public function index()
    {
        $sliders = Slider::all(); // Ganti dengan model dan nama tabel yang sesuai
        return view('admin.slider.index', compact('sliders'));
    }
    public function create()
    {
        return view('admin.slider.create');
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        if (!$slider) {
            return redirect()->route('admin.slidere.index')->with('error', 'Slider perusahaan tidak ditemukan.');
        }

        return view('admin.slider.edit', compact('slider'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'note' => 'required|string',

            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Generate a unique filename with timestamp
        $imagePath = $request->file('image')->store('slider', 'public');

        $slidere = new Slider();
        $slidere->note = $validatedData['note'];
        $slidere->image = $imagePath; // Ini adalah nama file unik, tidak perlu path lengkap
        $slidere->save();

        return redirect()->route('slider.index')->with('success', 'Slider berhasil dibuat.');
    }

    public function update(Request $request, $id)
    {
        $slidere = Slider::find($id);
        if (!$slidere) {
            return redirect()->route('slider.index')->with('error', 'Slider perusahaan tidak ditemukan.');
        }

        $validatedData = $request->validate([
            'note' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $slidere->note = $validatedData['note'];
        if ($request->hasFile('image')) {
            // Generate a unique filename with timestamp
            $imagePath = $request->file('image')->store('slider', 'public');
            Storage::disk('public')->delete($slidere->image); // Hapus image lama
            $slidere->image = $imagePath;
        }

        $slidere->save();

        return redirect()->route('slider.index')->with('success', 'Slider perusahaan berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $slidere = Slider::find($id);
        if (!$slidere) {
            return redirect()->route('slider.index')->with('error', 'Slider perusahaan tidak ditemukan.');
        }

        // Hapus image dari penyimpanan
        Storage::disk('public')->delete($slidere->image);

        // Hapus data Slider perusahaan dari database
        $slidere->delete();

        return redirect()->route('slider.index')->with('success', 'Slider perusahaan berhasil dihapus.');
    }
}
