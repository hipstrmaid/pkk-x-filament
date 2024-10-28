<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use Illuminate\Http\Request;

class PokjaIIController extends Controller
{
    public function show()
    {
        $data = Kelompok::where('nama_kelompok', 'Pokja II')->firstOrFail();
        return view('frontend.pokja-page.pokja2', compact('data'));
    }
}
