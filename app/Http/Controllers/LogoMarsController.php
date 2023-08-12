<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoMarsController extends Controller
{
    function index()
    {
        return view('profil.logo-mars.index', [
            'title' => 'Profil > Logo & Mars',
            'logo' => Logo::first(),
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
}
