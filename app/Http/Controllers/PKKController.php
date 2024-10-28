<?php

namespace App\Http\Controllers;

use App\Models\PKK;
use Illuminate\Http\Request;

class PKKController extends Controller
{
    public function showSejarah()
    {
        $sejarah = PKK::where('id', 1)->firstOrFail();
        return view('frontend.profile-page.sejarah', compact('sejarah'));
    }

    public function showProgram()
    {
        $program = PKK::where('id', 1)->firstOrFail();
        return view('frontend.profile-page.10-program-pkk', compact('program'));
    }

    public function showLogo()
    {
        $logo = PKK::where('id', 1)->firstOrFail();
        return view('frontend.profile-page.arti-logo', compact('logo'));
    }

    public function showVisi()
    {
        $visi = PKK::where('id', 1)->firstOrFail();
        return view('frontend.profile-page.visi-misi', compact('visi'));
    }

    public function showStruktur()
    {
        $struktur = PKK::where('id', 1)->firstOrFail();
        return view('frontend.profile-page.struktur-organisasi', compact('struktur'));
    }

    public function showMars()
    {
        $mars = PKK::where('id', 1)->firstOrFail();
        return view('frontend.profile-page.mars-pkk', compact('mars'));
    }
}
