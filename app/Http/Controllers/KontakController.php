<?php

namespace App\Http\Controllers;

use App\Models\SectionContact;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    function index()
    {
        return view('profil.kontak.index', [
            'title' => 'Profil > Kontak',
            'section' => SectionContact::first(),
        ]);
    }

    function detailSection()
    {
        $section_staff = SectionStaff::first();
        return response()->json($section_staff);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'button' => 'required|string|max:255',
        ]);

        $section_staff = SectionStaff::first()->update($validatedData);

        if ($section_staff) {
            return redirect(route('pegawai-index'))->with('success', 'Berhasil Edit Section Pegawai Sekolah!');
        } else {
            return redirect(route('pegawai-create'))->with('failed', 'Gagal Edit Section Pegawai Sekolah!');
        }
    }
}
