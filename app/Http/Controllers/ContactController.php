<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    // app/Http/Controllers/AdmincontactController.php

    public function index()
    {
        $contact = contact::all(); // Ganti dengan model dan nama tabel yang sesuai
        return view('admin.contact.index', compact('contact'));
    }
    public function create()
    {
        return view('comprof.index');
    }



    public function store(Request $request)
    {
        // // Debugging statement to check if the request reaches the store method
        // dd('Reached store method');

        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'note' => 'required|string',

        ]);

        // Create a new contact instance and save it to the database
        $contact = new contact();
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->phone = $validatedData['phone'];
        $contact->note = $validatedData['note'];

        $contact->save();

        return redirect()->route('comprof', ['scrollTo' => 'kontak'])->with('success', 'Pesan berhasil dikirim.');
    }




    public function destroy($id)
    {
        $contact = Contact::find($id);
        if (!$contact) {
            return redirect()->route('contact.index')->with('error', 'contact perusahaan tidak ditemukan.');
        }
        // Hapus data contact perusahaan dari database
        $contact->delete();

        return redirect()->route('contact.index')->with('success', 'contact perusahaan berhasil dihapus.');
    }
}
