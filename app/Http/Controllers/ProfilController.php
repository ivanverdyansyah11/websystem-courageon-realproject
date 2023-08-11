<?php

namespace App\Http\Controllers;

use App\Models\HeaderProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    function index()
    {
        return view('profil.index', [
            'title' => 'Profil',
            'section_header' => HeaderProfile::first(),
        ]);
    }

    function editHeader()
    {
        $section_header = HeaderProfile::first();
        return response()->json($section_header);
    }

    function updateHeader(Request $request)
    {
        $validatedData = $request->validate([
            // 'banner' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title_header' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($request->file('banner')) {
            Storage::delete($request->oldImage);
            $validatedData['banner'] = $request->file('banner')->store('profil-images/header-image');
        } else {
            $validatedData['banner'] = $request->oldImage;
        }

        $headerProfile = HeaderProfile::first()->update($validatedData);

        if ($headerProfile) {
            return redirect(route('profil-index'))->with('success', 'Berhasil Update Section Header!');
        } else {
            return redirect(route('profil-index'))->with('failed', 'Gagal Update Section Header!');
        }
    }
}
