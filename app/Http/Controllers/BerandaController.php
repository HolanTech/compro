<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BerandaController extends Controller
{
    // app/Http/Controllers/AdminberandaeController.php

    public function index()
    {
        $beranda = Beranda::all(); // Ganti dengan model dan nama tabel yang sesuai
        return view('admin.beranda.index', compact('beranda'));
    }
    public function create()
    {
        return view('admin.beranda.create');
    }

    public function edit($id)
    {
        $beranda = Beranda::find($id);
        if (!$beranda) {
            return redirect()->route('admin.beranda.index')->with('error', 'beranda perusahaan tidak ditemukan.');
        }

        return view('admin.beranda.edit', compact('beranda'));
    }

    public function store(Request $request)
    {
        // // Debugging statement to check if the request reaches the store method
        // dd('Reached store method');

        $validatedData = $request->validate([
            'layanan' => 'required|string',
            'tentang' => 'required|string',

        ]);

        // Create a new beranda instance and save it to the database
        $beranda = new beranda();
        $beranda->layanan = $validatedData['layanan'];
        $beranda->tentang = $validatedData['tentang'];

        $beranda->save();

        return redirect()->route('beranda.index')->with('success', 'beranda perusahaan berhasil dibuat.');
    }


    public function update(Request $request, $id)
    {
        $beranda = beranda::find($id);
        if (!$beranda) {
            return redirect()->route('beranda.index')->with('error', 'beranda perusahaan tidak ditemukan.');
        }

        $validatedData = $request->validate([
            'layanan' => 'required|string',
            'tentang' => 'required|string',

        ]);

        $beranda->layanan = $validatedData['layanan'];
        $beranda->tentang = $validatedData['tentang'];


        $beranda->save();

        return redirect()->route('beranda.index')->with('success', 'beranda perusahaan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $beranda = beranda::find($id);
        if (!$beranda) {
            return redirect()->route('beranda.index')->with('error', 'beranda perusahaan tidak ditemukan.');
        }

        // Hapus data beranda perusahaan dari database
        $beranda->delete();

        return redirect()->route('beranda.index')->with('success', 'beranda perusahaan berhasil dihapus.');
    }
}
