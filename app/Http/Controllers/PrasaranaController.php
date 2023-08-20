<?php

namespace App\Http\Controllers;

use App\Models\Prasarana;
use App\Models\SectionPrasarana;
use Illuminate\Http\Request;

class PrasaranaController extends Controller
{
    function index()
    {
        return view('sarana.prasarana.index', [
            'title' => 'Sarana Prasarana > Prasarana',
            'section' => SectionPrasarana::first(),
            'prasaranas' => Prasarana::paginate(6),
        ]);
    }

    function detailSection()
    {
        $section_prasarana = SectionPrasarana::first();
        return response()->json($section_prasarana);
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

    function storePrasarana(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'total' => 'required|string',
        ]);

        if ($validatedData['image']) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/sarana-prasarana-images/sarana-prasarana-image/'), $imageName);
            $validatedData['image'] = $imageName;
        }

        $prasarana = Prasarana::create($validatedData);

        if ($prasarana) {
            return redirect(route('prasarana-index'))->with('success', 'Berhasil Tambah Sarana Prasarana Sekolah!');
        } else {
            return redirect(route('prasarana-index'))->with('failed', 'Gagal Tambah Sarana Prasarana Sekolah!');
        }
    }

    function detailPrasarana($id)
    {
        $prasarana = Prasarana::where('id', $id)->first();
        return response()->json($prasarana);
    }

    function updatePrasarana($id, Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'total' => 'required|string',
        ]);

        if ($request->file('image')) {
            $oldImagePath = public_path('assets/img/sarana-prasarana-images/sarana-prasarana-image/') . $request->oldImage;
            unlink($oldImagePath);

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/sarana-prasarana-images/sarana-prasarana-image/'), $imageName);
            $validatedData['image'] = $imageName;
        } else {
            $validatedData['image'] = $request->oldImage;
        }

        $prasarana = Prasarana::where('id', $id)->first()->update($validatedData);

        if ($prasarana) {
            return redirect(route('prasarana-index'))->with('success', 'Berhasil Edit Sarana Prasarana Sekolah!');
        } else {
            return redirect(route('prasarana-index'))->with('failed', 'Gagal Edit Sarana Prasarana Sekolah!');
        }
    }

    function deletePrasarana($id)
    {
        $prasarana = Prasarana::where('id', $id)->first();

        if ($prasarana->icon) {
            $imagePath = public_path('assets/img/sarana-prasarana-images/sarana-prasarana-image/') . $prasarana->icon;
            unlink($imagePath);
        }

        $prasarana = $prasarana->delete();

        if ($prasarana) {
            return redirect(route('prasarana-index'))->with('success', 'Berhasil Hapus Sarana Prasarana Sekolah!');
        } else {
            return redirect(route('prasarana-index'))->with('failed', 'Gagal Hapus Sarana Prasarana Sekolah!');
        }
    }
}
