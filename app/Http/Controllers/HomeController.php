<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    // Display a listing of the berita
    public function index()
    {
        $beritas = Berita::all(); // Get all berita
        $galeris = Galeri::all(); // Get all berita
        return view('welcome', compact('beritas', 'galeris'));
    }
}
