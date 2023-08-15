<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Mars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoMarsController extends Controller
{
    function index()
    {
        return view('profil.logo-mars.index', [
            'title' => 'Profil > Logo & Mars',
            'logo' => Logo::first(),
            'mars' => Mars::first(),
        ]);
    }

    function editLogo()
    {
        $logo = Logo::first();
        return response()->json($logo);
    }

    function updateLogo(Request $request)
    {
        $validatedData = $request->validate([
            'logo_meaning' => 'required|string',
            'font_meaning' => 'required|string',
            'color_meaning' => 'required|string',
        ]);

        if ($request->file('logo')) {
            Storage::delete($request->oldImage);
            $validatedData['logo'] = $request->file('logo')->store('logo-brand');
        } else {
            $validatedData['logo'] = $request->oldImage;
        }

        $logo = Logo::first()->update($validatedData);

        if ($logo) {
            return redirect(route('logo-mars-index'))->with('success', 'Berhasil Update Logo Sekolah!');
        } else {
            return redirect(route('logo-mars-index'))->with('failed', 'Gagal Update Logo Sekolah!');
        }
    }

    function editMars()
    {
        $mars = Mars::first();
        return response()->json($mars);
    }

    function updateMars(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'mars' => 'required|string',
            'creation' => 'required|string|max:255',
        ]);

        if ($request->file('banner')) {
            Storage::delete($request->oldImage);
            $validatedData['banner'] = $request->file('banner')->store('profil-images/mars-image');
        } else {
            $validatedData['banner'] = $request->oldImage;
        }

        $mars = Mars::first()->update($validatedData);

        if ($mars) {
            return redirect(route('logo-mars-index'))->with('success', 'Berhasil Update Mars Sekolah!');
        } else {
            return redirect(route('logo-mars-index'))->with('failed', 'Gagal Update Mars Sekolah!');
        }
    }
}
