<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    function index()
    {
        return view('sarana.index', [
            'title' => 'Sarana',
        ]);
    }
}
