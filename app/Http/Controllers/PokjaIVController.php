<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use Illuminate\Http\Request;

class PokjaIVController extends Controller
{
    public function show()
    {
        $data = Kelompok::where('nama_kelompok', 'Pokja IV')->firstOrFail();
        return view('frontend.pokja-page.pokja4', compact('data'));
    }
}
