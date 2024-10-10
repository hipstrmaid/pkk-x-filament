<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Grup rute untuk 'pokja-page'
Route::prefix('pokja')->group(function () {
    Route::view('/sekretariat', 'frontend.pokja-page.sekretariat')->name('sekretariat');
    Route::view('/pokja-i', 'frontend.pokja-page.pokja1')->name('pokja-i');
    Route::view('/pokja-ii', 'frontend.pokja-page.pokja2')->name('pokja-ii');
    Route::view('/pokja-iii', 'frontend.pokja-page.pokja3')->name('pokja-iii');
    Route::view('/pokja-iv', 'frontend.pokja-page.pokja4')->name('pokja-iv');
});

// Grup rute untuk 'profile-page'
Route::prefix('profile')->group(function () {
    Route::view('/sejarah-pkk', 'frontend.profile-page.sejarah')->name('sejarah-pkk');
    Route::view('/10-program-pokok', 'frontend.profile-page.10-program-pkk')->name('10-program-pokok');
    Route::view('/arti-dan-logo', 'frontend.profile-page.arti-logo')->name('arti-dan-logo');
    Route::view('/visi-misi', 'frontend.profile-page.visi-misi')->name('visi-misi');
    Route::view('/struktur-organisasi', 'frontend.profile-page.struktur-organisasi')->name('struktur-organisasi');
    Route::view('/profil-ketua-pkk', 'frontend.profile-page.profil-pj')->name('profil-pjketua-pkk');
    Route::view('/profil-pembina-pkk', 'frontend.profile-page.profil-pjpembina')->name('profil-pjpembina-pkk');
    Route::view('/mars-pkk', 'frontend.profile-page.mars-pkk')->name('mars-pkk');
});

// Grup rute untuk 'profile-page'
Route::prefix('informasi')->group(function () {
    Route::view('/agenda', 'frontend.informasi-page.agenda')->name('agenda');
    Route::view('/informasi-terbaru', 'frontend.informasi-page.informasi-terbaru')->name('informasi-terbaru');
    Route::view('/galeri', 'frontend.informasi-page.galeri')->name('galeri');
    Route::view('/kontak', 'frontend.informasi-page.kontak')->name('kontak');
});
