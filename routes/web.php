<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PKKController;
use App\Http\Controllers\PokjaIController;
use App\Http\Controllers\PokjaIIController;
use App\Http\Controllers\PokjaIIIController;
use App\Http\Controllers\PokjaIVController;
use App\Http\Controllers\SekretariatController;
use App\Models\Kelompok;
use App\Models\Pegawai;

Route::resource('/', HomeController::class);

Route::view('/view', 'frontend.sub-page.view-berita');


// Group routes related to Galeri
Route::prefix('galeri')->group(function () {
    Route::get('/{slug}', [GaleriController::class, 'show'])->name('galeri.show'); // Route for the show method
});

Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

Route::get('/sekretariat', [SekretariatController::class, 'show'])->name('sekretariat.show');
Route::get('/pokja-i', [PokjaIController::class, 'show'])->name('pokja1.show');
Route::get('/pokja-ii', [PokjaIIController::class, 'show'])->name('pokja2.show');
Route::get('/pokja-iii', [PokjaIIIController::class, 'show'])->name('pokja3.show');
Route::get('/pokja-iv', [PokjaIVController::class, 'show'])->name('pokja4.show');
// Grup rute untuk 'pokja-page'
Route::prefix('pokja')->group(function () {
    Route::get('/sekretariat', [SekretariatController::class, 'show'])->name('sekretariat.show');
    Route::get('/pokja-i', [PokjaIController::class, 'show'])->name('pokja1.show');
    Route::get('/pokja-ii', [PokjaIIController::class, 'show'])->name('pokja2.show');
    Route::get('/pokja-iii', [PokjaIIIController::class, 'show'])->name('pokja3.show');
    Route::get('/pokja-iv', [PokjaIVController::class, 'show'])->name('pokja4.show');
});

// Grup rute untuk 'profile-page'
Route::prefix('profile')->group(function () {
    Route::get('/sejarah-pkk', [PKKController::class, 'showSejarah'])->name('sejarah-pkk');
    Route::get('/10-program-pokok', [PKKController::class, 'showProgram'])->name('10-program-pokok');
    Route::get('/arti-dan-logo', [PKKController::class, 'showLogo'])->name('arti-dan-logo');
    Route::get('/visi-misi', [PKKController::class, 'showVisi'])->name('visi-misi');
    Route::get('/struktur-organisasi', [PKKController::class, 'showStruktur'])->name('struktur-organisasi');
    Route::get('/profil-ketua-pkk', [PegawaiController::class, 'show'])->name('profil-pjketua-pkk');
    Route::view('/profil-pembina-pkk', 'frontend.profile-page.profil-pjpembina')->name('profil-pjpembina-pkk');
    Route::get('/mars-pkk', [PKKController::class, 'showMars'])->name('mars-pkk');
});

// Grup rute untuk 'profile-page'
Route::prefix('informasi')->group(function () {
    Route::resource('/agenda', KegiatanController::class);
    Route::get('/informasi-terbaru', [BeritaController::class, 'ListBerita'])->name('informasi-terbaru');
    Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
    Route::view('/kontak', 'frontend.informasi-page.kontak')->name('kontak');
});
    // Route::view('/agenda', 'frontend.informasi-page.agenda')->name('agenda');
