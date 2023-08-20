<?php

namespace App\Http\Controllers;

use App\Models\SectionService;
use Illuminate\Http\Request;

class PelayananKarirController extends Controller
{
    function index()
    {
        return view('kesiswaan.pelayanan-karir.index', [
            'title' => 'Kesiswaan > Pelayanan Karir',
            'section_service' => SectionService::first(),
            // 'extracurriculars' => Extracurricular::paginate(6),
        ]);
    }

    function detailSection()
    {
        $section_service = SectionService::first();
        return response()->json($section_service);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'description' => 'required|string',
            'button' => 'required|string|max:255',
        ]);

        $sectionService = SectionService::first()->update($validatedData);

        if ($sectionService) {
            return redirect(route('pelayanan-karir-index'))->with('success', 'Berhasil Update Section Pelayanan Karir!');
        } else {
            return redirect(route('pelayanan-karir-index'))->with('failed', 'Gagal Update Section Pelayanan Karir!');
        }
    }
}
