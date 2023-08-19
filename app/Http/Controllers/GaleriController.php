<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\SectionGallery;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    function index()
    {
        return view('akademik.galeri.index', [
            'title' => 'Galeri',
            'section_gallery' => SectionGallery::first(),
            'galleries' => Gallery::all(),
        ]);
    }

    function detailSection()
    {
        $section_gallery = SectionGallery::first();
        return response()->json($section_gallery);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $sectionGallery = SectionGallery::first()->update($validatedData);

        if ($sectionGallery) {
            return redirect(route('galeri-index'))->with('success', 'Berhasil Update Section Galeri!');
        } else {
            return redirect(route('galeri-index'))->with('failed', 'Gagal Update Section Galeri!');
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
            'topic' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($request->file('image')) {
            $oldImagePath = public_path('assets/img/akademik-images/proyek-image/') . $request->oldImage;
            unlink($oldImagePath);

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/akademik-images/proyek-image/'), $imageName);
            $validatedData['image'] = $imageName;
        } else {
            $validatedData['image'] = $request->oldImage;
        }

        $project = Project::where('id', $id)->first()->update($validatedData);

        if ($project) {
            return redirect(route('proyek-index'))->with('success', 'Berhasil Edit Proyek Sekolah!');
        } else {
            return redirect(route('proyek-index'))->with('failed', 'Gagal Edit Proyek Sekolah!');
        }
    }

    function deleteGallery($id)
    {
        $project = Project::where('id', $id)->first();

        if ($project->image) {
            $imagePath = public_path('assets/img/akademik-images/proyek-image/') . $project->image;
            unlink($imagePath);
        }

        $project = $project->delete();

        if ($project) {
            return redirect(route('proyek-index'))->with('success', 'Berhasil Hapus Proyek Sekolah!');
        } else {
            return redirect(route('proyek-index'))->with('failed', 'Gagal Hapus Proyek Sekolah!');
        }
    }
}
