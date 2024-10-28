<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use Illuminate\Http\Request;

class PokjaIController extends Controller
{
    public function show()
    {
        $data = Kelompok::where('nama_kelompok', 'Pokja I')->firstOrFail();
        return view('frontend\pokja-page\pokja1', compact('data'));
    }
}
