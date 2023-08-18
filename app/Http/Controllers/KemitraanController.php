<?php

namespace App\Http\Controllers;

use App\Models\SectionKemitraan;
use Illuminate\Http\Request;

class KemitraanController extends Controller
{
    function index()
    {
        return view('humas.kemitraan.index', [
            'title' => 'Humas > Kemitraan',
            'section_header' => SectionKemitraan::first(),
        ]);
    }
}
