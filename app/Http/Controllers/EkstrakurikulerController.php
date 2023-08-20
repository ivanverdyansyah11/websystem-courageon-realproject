<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use App\Models\SectionExtracurricular;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    function index()
    {
        return view('kesiswaan.ekstrakurikuler.index', [
            'title' => 'Kesiswaan > Ekstrakurikuler',
            'section_extracurricular' => SectionExtracurricular::first(),
            'extracurriculars' => Extracurricular::all(),
        ]);
    }

    function detailSection()
    {
        $section_extracurricular = SectionExtracurricular::first();
        return response()->json($section_extracurricular);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $sectionExtracurricular = SectionExtracurricular::first()->update($validatedData);

        if ($sectionExtracurricular) {
            return redirect(route('ekstrakurikuler-index'))->with('success', 'Berhasil Update Section Ekstrakurikuler!');
        } else {
            return redirect(route('ekstrakurikuler-index'))->with('failed', 'Gagal Update Section Ekstrakurikuler!');
        }
    }

    function storeGallery(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|string|max:255',
        ]);

        if ($validatedData['image']) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/akademik-images/galeri-image/'), $imageName);
            $validatedData['image'] = $imageName;
        }

        $gallery = Gallery::create($validatedData);

        if ($gallery) {
            return redirect(route('galeri-index'))->with('success', 'Berhasil Tambah Galeri Sekolah!');
        } else {
            return redirect(route('galeri-index'))->with('failed', 'Gagal Tambah Galeri Sekolah!');
        }
    }

    function detailGallery($id)
    {
        $gallery = Gallery::where('id', $id)->first();
        return response()->json($gallery);
    }

    function updateGallery($id, Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        if ($request->file('image')) {
            $oldImagePath = public_path('assets/img/akademik-images/galeri-image/') . $request->oldImage;
            unlink($oldImagePath);

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/akademik-images/galeri-image/'), $imageName);
            $validatedData['image'] = $imageName;
        } else {
            $validatedData['image'] = $request->oldImage;
        }

        $gallery = Gallery::where('id', $id)->first()->update($validatedData);

        if ($gallery) {
            return redirect(route('galeri-index'))->with('success', 'Berhasil Edit Galeri Sekolah!');
        } else {
            return redirect(route('galeri-index'))->with('failed', 'Gagal Edit Galeri Sekolah!');
        }
    }

    function deleteGallery($id)
    {
        $gallery = Gallery::where('id', $id)->first();

        if ($gallery->image) {
            $imagePath = public_path('assets/img/akademik-images/galeri-image/') . $gallery->image;
            unlink($imagePath);
        }

        $gallery = $gallery->delete();

        if ($gallery) {
            return redirect(route('galeri-index'))->with('success', 'Berhasil Hapus Galeri Sekolah!');
        } else {
            return redirect(route('galeri-index'))->with('failed', 'Gagal Hapus Galeri Sekolah!');
        }
    }
}
