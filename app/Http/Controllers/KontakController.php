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
        $section_contact = SectionContact::first();
        return response()->json($section_contact);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'button' => 'required|string|max:255',
        ]);

        $section_contact = SectionStaff::first()->update($validatedData);

        if ($section_contact) {
            return redirect(route('pegawai-index'))->with('success', 'Berhasil Edit Section Pegawai Sekolah!');
        } else {
            return redirect(route('pegawai-create'))->with('failed', 'Gagal Edit Section Pegawai Sekolah!');
        }
    }
}
