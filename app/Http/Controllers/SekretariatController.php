<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use Illuminate\Http\Request;

class SekretariatController extends Controller
{
    public function show()
    {
        $sekretariat = Kelompok::where('nama_kelompok', 'sekretariat')->firstOrFail();
        return view('frontend.pokja-page.sekretariat', compact('sekretariat'));
    }
}
