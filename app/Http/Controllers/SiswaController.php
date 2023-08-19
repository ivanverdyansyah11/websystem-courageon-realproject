<?php

namespace App\Http\Controllers;

use App\Models\SectionStudent;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index()
    {
        return view('kesiswaan.siswa.index', [
            'title' => 'Kesiswaan > Siswa',
            'section_student' => SectionStudent::first(),
            // 'partnerships' => Partnership::all(),
        ]);
    }

    function detailSectionStudent()
    {
        $section_student = SectionStudent::first();
        return response()->json($section_student);
    }

    function updateSectionStudent(Request $request)
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

        $section_student = SectionStudent::first()->update($validatedData);

        if ($section_student) {
            return redirect(route('siswa-index'))->with('success', 'Berhasil Update Section Siswa!');
        } else {
            return redirect(route('siswa-index'))->with('failed', 'Gagal Update Section Siswa!');
        }
    }
}
