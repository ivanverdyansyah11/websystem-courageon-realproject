<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkademikController extends Controller
{
    function index()
    {
        return view('akademik.index', [
            'title' => 'Akademik',
        ]);
    }
}
