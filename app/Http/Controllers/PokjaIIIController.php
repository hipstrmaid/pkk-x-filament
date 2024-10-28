<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use Illuminate\Http\Request;

class PokjaIIIController extends Controller
{
    public function show()
    {
        $data = Kelompok::where('nama_kelompok', 'Pokja III')->firstOrFail();
        return view('frontend.pokja-page.pokja3', compact('data'));
    }
}
