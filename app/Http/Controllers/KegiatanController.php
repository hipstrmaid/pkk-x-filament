<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    //
    // Display a listing of the berita
    public function index()
    {
        $kegiatans = Kegiatan::all(); // Get all berita
        return view('frontend.informasi-page.agenda', compact('kegiatans'));
    }

    // Display the specified berita
    // public function show($id)
    // {
    //     $berita = Kegiatan::findOrFail($id);
    //     return view('kegiatan.show', compact('kegiatan'));
    // }
}
