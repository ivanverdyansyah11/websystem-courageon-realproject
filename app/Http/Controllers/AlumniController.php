<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\SectionAlumni;
use App\Models\Student;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    function index()
    {
        return view('kesiswaan.alumni.index', [
            'title' => 'Kesiswaan > Alumni',
            'section_alumni' => SectionAlumni::first(),
            'testimonials' => Alumni::paginate(6),
            'students' => Student::all(),
            'tahun_ajarans' => TahunAjaran::all(),
        ]);
    }

    function detailSection()
    {
        $section_alumni = SectionAlumni::first();
        return response()->json($section_alumni);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $sectionAlumni = SectionAlumni::first()->update($validatedData);

        if ($sectionAlumni) {
            return redirect(route('alumni-index'))->with('success', 'Berhasil Update Section Alumni!');
        } else {
            return redirect(route('alumni-index'))->with('failed', 'Gagal Update Section Alumni!');
        }
    }

    function detailAlumni($id)
    {
        $alumni = Alumni::where('id', $id)->first();
        $students = Student::all();
        foreach ($students as $student) {
            if ($student->id === $alumni->students_id) {
                $alumni->students_id = $student->nama_lengkap;
            }
        }
        return response()->json($alumni);
    }

    function storeAlumni(Request $request)
    {
        $validatedData = $request->validate([
            'tahun_ajaran_lulus' => 'required|string',
            'students_id' => 'required|string',
            'testimoni' => 'required|string',
        ]);

        $alumni = Alumni::create($validatedData);

        if ($alumni) {
            return redirect(route('alumni-index'))->with('success', 'Berhasil Tambah Alumni Sekolah!');
        } else {
            return redirect(route('alumni-index'))->with('failed', 'Gagal Tambah Alumni Sekolah!');
        }
    }

    function updateAlumni($id, Request $request)
    {
        $validatedData = $request->validate([
            'tahun_ajaran_lulus' => 'required|string',
            'students_id' => 'required|string',
            'testimoni' => 'required|string',
        ]);

        $alumni = Alumni::where('id', $id)->update($validatedData);

        if ($alumni) {
            return redirect(route('alumni-index'))->with('success', 'Berhasil Edit Alumni Sekolah!');
        } else {
            return redirect(route('alumni-index'))->with('failed', 'Gagal Edit Alumni Sekolah!');
        }
    }

    function deleteAlumni($id)
    {
        $alumni = Alumni::where('id', $id)->first();
        $alumni = $alumni->delete();

        if ($alumni) {
            return redirect(route('alumni-index'))->with('success', 'Berhasil Delete Alumni Sekolah!');
        } else {
            return redirect(route('alumni-index'))->with('failed', 'Gagal Delete Alumni Sekolah!');
        }
    }
}
