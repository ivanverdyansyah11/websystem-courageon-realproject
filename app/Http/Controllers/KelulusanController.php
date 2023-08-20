<?php

namespace App\Http\Controllers;

use App\Models\SectionGraduation;
use Illuminate\Http\Request;

class KelulusanController extends Controller
{
    function index()
    {
        return view('akademik.kelulusan.index', [
            'title' => 'Akademik > Kelulusan',
            'section_graduation' => SectionGraduation::first(),
            // 'partnerships' => Partnership::all(),
        ]);
    }

    function detailSectionGraduation()
    {
        $section_graduation = SectionGraduation::first();
        return response()->json($section_graduation);
    }

    function updateSectionGraduation(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'button_1' => 'required|string|max:255',
            'button_2' => 'required|string|max:255',
            'button_3' => 'required|string|max:255',
            'caption_1' => 'required|string|max:255',
            'caption_2' => 'required|string|max:255',
            'caption_3' => 'required|string|max:255',
        ]);

        $section_graduation = SectionGraduation::first()->update($validatedData);

        if ($section_graduation) {
            return redirect(route('kelulusan-index'))->with('success', 'Berhasil Update Section Kelulusan!');
        } else {
            return redirect(route('kelulusan-index'))->with('failed', 'Gagal Update Section Kelulusan!');
        }
    }
}
