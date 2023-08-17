<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    function beranda()
    {
        return view('homepage.beranda', [
            'title' => 'Beranda',
        ]);
    }

    function profil()
    {
        return view('homepage.profil', [
            'title' => 'Profil',
        ]);
    }

    function akademik()
    {
        return view('homepage.akademik', [
            'title' => 'Akademik',
        ]);
    }

    function kesiswaan()
    {
        return view('homepage.kesiswaan', [
            'title' => 'Kesiswaan',
        ]);
    }

    function saranaPrasarana()
    {
        return view('homepage.sarana-prasarana', [
            'title' => 'Sarana Prasarana',
        ]);
    }

    function humas()
    {
        return view('homepage.humas', [
            'title' => 'Humas',
        ]);
    }
}
