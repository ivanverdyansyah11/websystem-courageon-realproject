<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    function index()
    {
        return view('profil.index', [
            'title' => 'Profil',
        ]);
    }
}
