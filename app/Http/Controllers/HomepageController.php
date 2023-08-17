<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    function beranda()
    {
        return view('homepage.beranda.index', [
            'title' => 'Beranda',
        ]);
    }

    function profil()
    {
        return view('homepage.profil.index', [
            'title' => 'Profil',
        ]);
    }

    function akademik()
    {
        return view('homepage.akademik.index', [
            'title' => 'Akademik',
        ]);
    }

    function kesiswaan()
    {
        return view('homepage.kesiswaan.index', [
            'title' => 'Kesiswaan',
        ]);
    }

    function saranaPrasarana()
    {
        return view('homepage.sarana-prasarana.index', [
            'title' => 'Sarana Prasarana',
        ]);
    }

    function humas()
    {
        return view('homepage.humas.index', [
            'title' => 'Humas',
        ]);
    }
}
