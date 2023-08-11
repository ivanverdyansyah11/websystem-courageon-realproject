<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HumasController extends Controller
{
    function index()
    {
        return view('humas.index', [
            'title' => 'Humas',
        ]);
    }
}
