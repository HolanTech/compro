<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Galeri;
use App\Models\Profil;
use App\Models\Slider;
use App\Models\Beranda;
use App\Models\Layanan;
use Illuminate\Http\Request;

class ComprofController extends Controller
{
    public function index()
    {
        $profile = Profil::all();
        $sliders = Slider::all();
        $layanan = Layanan::all();
        $client = Client::all();
        $beranda = Beranda::all();
        $galeri = Galeri::all();
        return view('comprof.index', compact('profile', 'sliders', 'layanan', 'client', 'beranda', 'galeri'));
    }
    public function tentang()
    {
        $profile = Profil::all();
        return view('comprof.tentang', compact('profile'));
    }

    public function layanan()
    {
        $profile = Profil::all();
        return view('comprof.layanan', compact('profile'));
    }
}
