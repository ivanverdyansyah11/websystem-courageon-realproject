<?php

namespace App\Http\Controllers;

use App\Models\SectionGallery;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    function index()
    {
        return view('akademik.galeri.index', [
            'title' => 'Galeri',
            'section_gallery' => SectionGallery::first(),
            // 'projects' => Project::all(),
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

    function storeProject(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|string|max:255',
            'topic' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($validatedData['image']) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/akademik-images/proyek-image/'), $imageName);
            $validatedData['image'] = $imageName;
        }

        $project = Project::create($validatedData);

        if ($project) {
            return redirect(route('proyek-index'))->with('success', 'Berhasil Tambah Proyek Sekolah!');
        } else {
            return redirect(route('proyek-index'))->with('failed', 'Gagal Tambah Proyek Sekolah!');
        }
    }

    function detailProject($id)
    {
        $project = Project::where('id', $id)->first();
        return response()->json($project);
    }

    function updateProject($id, Request $request)
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

    function deleteProject($id)
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
