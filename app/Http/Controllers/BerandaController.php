<?php

namespace App\Http\Controllers;

use App\Models\HeaderHome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BerandaController extends Controller
{
    function index()
    {
        return view('beranda.index', [
            'title' => 'Beranda',
            'section_header' => HeaderHome::first(),
        ]);
    }

    function editHeader()
    {
        $section_header = HeaderHome::first();
        return response()->json($section_header);
    }

    function updateHeader(Request $request)
    {
        $validatedData = $request->validate([
            // 'banner' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name_translation' => 'required|string|max:255',
            'description_translation' => 'required|string',
        ]);

        if ($request->file('banner')) {
            Storage::delete($request->oldImage);
            $validatedData['banner'] = $request->file('banner')->store('menu-images');
        } else {
            $validatedData['banner'] = $request->oldImage;
        }
    }
}
