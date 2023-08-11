<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KesiswaanController extends Controller
{
    function index()
    {
        return view('kesiswaan.index', [
            'title' => 'Kesiswaan',
        ]);
    }
}
