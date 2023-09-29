<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    // app/Http/Controllers/AdminProfileController.php

    public function index()
    {
        $profiles = Profil::all(); // Ganti dengan model dan nama tabel yang sesuai
        return view('admin.profil.index', compact('profiles'));
    }
    public function create()
    {
        return view('admin.profil.create');
    }

    public function edit($id)
    {
        $profile = Profil::find($id);
        if (!$profile) {
            return redirect()->route('admin.profile.index')->with('error', 'Profil perusahaan tidak ditemukan.');
        }

        return view('admin.profil.edit', compact('profile'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'contact' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Generate a unique filename with timestamp
        $logoPath = $request->file('logo')->store('logos', 'public');

        $profile = new Profil();
        $profile->name = $validatedData['name'];
        $profile->address = $validatedData['address'];
        $profile->contact = $validatedData['contact'];
        $profile->logo = $logoPath; // Ini adalah nama file unik, tidak perlu path lengkap
        $profile->save();


        return redirect()->route('profil.index')->with('success', 'Profil perusahaan berhasil dibuat.');
    }

    public function update(Request $request, $id)
    {
        $profile = Profil::find($id);
        if (!$profile) {
            return redirect()->route('profil.index')->with('error', 'Profil perusahaan tidak ditemukan.');
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'contact' => 'required|string',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $profile->name = $validatedData['name'];
        $profile->address = $validatedData['address'];
        $profile->contact = $validatedData['contact'];

        if ($request->hasFile('logo')) {
            // Generate a unique filename with timestamp
            $logoPath = $request->file('logo')->store('logos', 'public');
            Storage::disk('public')->delete($profile->logo); // Hapus logo lama
            $profile->logo = $logoPath;
        }

        $profile->save();

        return redirect()->route('profil.index')->with('success', 'Profil perusahaan berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $profile = Profil::find($id);
        if (!$profile) {
            return redirect()->route('profil.index')->with('error', 'Profil perusahaan tidak ditemukan.');
        }

        // Hapus logo dari penyimpanan
        Storage::disk('public')->delete($profile->logo);

        // Hapus data profil perusahaan dari database
        $profile->delete();

        return redirect()->route('profil.index')->with('success', 'Profil perusahaan berhasil dihapus.');
    }
}
