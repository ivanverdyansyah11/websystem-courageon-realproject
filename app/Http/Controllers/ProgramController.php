<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\SectionProgram;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    function index()
    {
        return view('akademik.program.index', [
            'title' => 'Program',
            'section_program' => SectionProgram::first(),
            'programs' => Program::all(),
        ]);
    }

    function detailSection()
    {
        $section_curriculum = SectionProgram::first();
        return response()->json($section_curriculum);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
        ]);

        $sectionProgram = SectionProgram::first()->update($validatedData);

        if ($sectionProgram) {
            return redirect(route('program-index'))->with('success', 'Berhasil Update Section Program!');
        } else {
            return redirect(route('program-index'))->with('failed', 'Gagal Update Section Program!');
        }
    }
}
