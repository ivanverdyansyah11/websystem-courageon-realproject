<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajalahController extends Controller
{
    function index()
    {
        return view('humas.majalah.index', [
            'title' => 'Humas > Majalah',
            // 'section_header' => HeaderHumas::first(),
        ]);
    }
}
