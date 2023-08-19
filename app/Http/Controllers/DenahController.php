<?php

namespace App\Http\Controllers;

use App\Models\SectionDenah;
use Illuminate\Http\Request;

class DenahController extends Controller
{
    function index()
    {
        return view('sarana.denah.index', [
            'title' => 'Sarana',
            'section' => SectionDenah::first(),
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
            'description' => 'required|string',
            'button' => 'required|string|max:255',
        ]);

        $sectionPrasarana = SectionPrasarana::first()->update($validatedData);

        if ($sectionPrasarana) {
            return redirect(route('prasarana-index'))->with('success', 'Berhasil Update Section Prasarana!');
        } else {
            return redirect(route('prasarana-index'))->with('failed', 'Gagal Update Section Prasarana!');
        }
    }
}
