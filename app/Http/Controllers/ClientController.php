<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    // app/Http/Controllers/AdminClienteController.php

    public function index()
    {
        $client = Client::all(); // Ganti dengan model dan nama tabel yang sesuai
        return view('admin.client.index', compact('client'));
    }
    public function create()
    {
        return view('admin.client.create');
    }

    public function edit($id)
    {
        $client = Client::find($id);
        if (!$client) {
            return redirect()->route('admin.client.index')->with('error', 'Client perusahaan tidak ditemukan.');
        }

        return view('admin.client.edit', compact('client'));
    }

    public function store(Request $request)
    {
        // // Debugging statement to check if the request reaches the store method
        // dd('Reached store method');

        $validatedData = $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Check if the image file is valid
        if (!$request->file('image')->isValid()) {
            return redirect()->back()->withInput()->withErrors(['image' => 'Invalid image file.']);
        }

        // Generate a unique filename for the image
        $imagePath = $request->file('image')->store('images', 'public');

        // Create a new Client instance and save it to the database
        $client = new Client();

        $client->image = $imagePath;
        $client->save();

        return redirect()->route('client.index')->with('success', 'Client perusahaan berhasil dibuat.');
    }


    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        if (!$client) {
            return redirect()->route('client.index')->with('error', 'Client perusahaan tidak ditemukan.');
        }

        $validatedData = $request->validate([

            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Generate a unique file title with timestamp
            $imagePath = $request->file('image')->store('images', 'public');
            Storage::disk('public')->delete($client->image); // Hapus image lama
            $client->image = $imagePath;
        }

        $client->save();

        return redirect()->route('client.index')->with('success', 'Client perusahaan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        if (!$client) {
            return redirect()->route('client.index')->with('error', 'Client perusahaan tidak ditemukan.');
        }

        // Hapus image dari penyimpanan
        Storage::disk('public')->delete($client->image);

        // Hapus data Client perusahaan dari database
        $client->delete();

        return redirect()->route('Client.index')->with('success', 'Client perusahaan berhasil dihapus.');
    }
}
