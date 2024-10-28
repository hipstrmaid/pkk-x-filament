<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    // Display a listing of the berita
    public function index()
    {
        $beritas = Berita::orderBy('created_at', 'desc')->take(4)->get(); // Order by newest first
        return view('welcome', compact('beritas'));
    }

    public function ListBerita()
    {
        $beritas = Berita::all(); // Order by newest first
        return view('frontend.informasi-page.informasi-terbaru', compact('beritas'));
    }


    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('frontend.sub-page.view-berita', compact('berita'));
    }
}
