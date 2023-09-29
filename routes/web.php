<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ComprofController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LayananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/comprof', function () {
    return view('comprof.index');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // Rute logout
Route::get('/comprof', [ComprofController::class, 'index'])->name('comprof.index');
Route::get('/comprof/tentang', [ComprofController::class, 'tentang'])->name('comprof.tentang');
Route::get('/comprof/layanan', [ComprofController::class, 'layanan'])->name('comprof.layanan');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('profil', ProfilController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('layanan', LayananController::class);
    Route::resource('client', ClientController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('beranda', BerandaController::class);
    Route::resource('galeri', GaleriController::class);
});
