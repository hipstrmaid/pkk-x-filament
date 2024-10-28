<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function show()
    {
        $data = Pegawai::where('id', 1)->firstOrFail();
        return view('frontend.profile-page.profil-pj', compact('data'));
    }
}
