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
        ]);

        $section_contact = SectionContact::first()->update($validatedData);

        if ($section_contact) {
            return redirect(route('kontak-index'))->with('success', 'Berhasil Edit Section Kontak Sekolah!');
        } else {
            return redirect(route('kontak-index'))->with('failed', 'Gagal Edit Section Kontak Sekolah!');
        }
    }
}
