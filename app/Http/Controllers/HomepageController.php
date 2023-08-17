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
}
