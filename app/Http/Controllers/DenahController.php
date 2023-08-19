<?php

namespace App\Http\Controllers;

use App\Models\Denah;
use App\Models\SectionDenah;
use Illuminate\Http\Request;

class DenahController extends Controller
{
    function index()
    {
        return view('sarana.denah.index', [
            'title' => 'Sarana',
            'section' => SectionDenah::first(),
            'rooms' => Denah::all(),
        ]);
    }

    function detailSection()
    {
        $section_denah = SectionDenah::first();
        return response()->json($section_denah);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'title_code' => 'required|string|max:255',
            'title_room' => 'required|string|max:255',
            'button' => 'required|string|max:255',
        ]);

        $sectionDenah = SectionDenah::first()->update($validatedData);

        if ($sectionDenah) {
            return redirect(route('denah-index'))->with('success', 'Berhasil Update Section Denah!');
        } else {
            return redirect(route('denah-index'))->with('failed', 'Gagal Update Section Denah!');
        }
    }
}
