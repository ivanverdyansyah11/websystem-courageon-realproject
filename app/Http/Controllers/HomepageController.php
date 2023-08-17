<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    function homepage()
    {
        return view('homepage.homepage', [
            'title' => 'Homepage',
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
}
