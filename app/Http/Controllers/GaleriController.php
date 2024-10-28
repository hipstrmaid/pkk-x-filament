<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    //
    public function index()
    {
        $galeris = Galeri::all(); // Get all berita
        return view('frontend.informasi-page.galeri', compact('galeris'));
    }

    public function show($slug)
    {
        // Retrieve the galeri record based on the slug
        $galeri = Galeri::where('slug', $slug)->firstOrFail();

        // Decode the JSON to get the array of images
        $images = $galeri->gambar;

        // Return the view and pass the retrieved galeri data and images
        return view('frontend.sub-page.view-galeri', compact('galeri', 'images'));
    }
}
