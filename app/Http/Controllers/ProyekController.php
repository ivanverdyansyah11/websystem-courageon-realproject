<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\SectionProyek;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    function index()
    {
        return view('akademik.proyek.index', [
            'title' => 'Akademik > Proyek',
            'section_proyek' => SectionProyek::first(),
            'projects' => Project::paginate(6),
        ]);
    }

    public function search(Request $request)
    {
        $projects = Project::where('image', 'like', '%' . $request->search . '%')
            ->orWhere('title', 'like', '%' . $request->search . '%')
            ->orWhere('description', 'like', '%' . $request->search . '%')
            ->orWhere('topic', 'like', '%' . $request->search . '%')
            ->paginate(6);

        return view('akademik.proyek.index', [
            'title' => 'Akademik > Proyek',
            'section_proyek' => SectionProyek::first(),
            'projects' => $projects,
        ]);
    }

    function detailSection()
    {
        $section_project = SectionProyek::first();
        return response()->json($section_project);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'description' => 'required|string',
            'button' => 'required|string|max:255',
        ]);

        $sectionProyek = SectionProyek::first()->update($validatedData);

        if ($sectionProyek) {
            return redirect(route('proyek-index'))->with('success', 'Berhasil Update Section Proyek!');
        } else {
            return redirect(route('proyek-index'))->with('failed', 'Gagal Update Section Proyek!');
        }
    }

    function createProject()
    {
        return view('akademik.proyek.add', [
            'title' => 'Akademik > Proyek',
        ]);
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
            return redirect(route('proyek-create'))->with('failed', 'Gagal Tambah Proyek Sekolah!');
        }
    }

    function detailProject($id)
    {
        return view('akademik.proyek.detail', [
            'title' => 'Akademik > Proyek',
            'project' => Project::where('id', $id)->first(),
        ]);
    }

    function editProject($id)
    {
        return view('akademik.proyek.edit', [
            'title' => 'Akademik > Proyek',
            'project' => Project::where('id', $id)->first(),
        ]);
    }

    function updateProject($id, Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'topic' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($request->file('image')) {
            if (file_exists(public_path('assets/img/akademik-images/proyek-image/') . $request->oldImage) && $request->oldImage) {
                $oldImagePath = public_path('assets/img/akademik-images/proyek-image/') . $request->oldImage;
                unlink($oldImagePath);
            }

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
            return redirect(route('proyek-edit'))->with('failed', 'Gagal Edit Proyek Sekolah!');
        }
    }

    function deleteProject($id)
    {
        $project = Project::where('id', $id)->first();

        if ($project->image) {
            if (file_exists(public_path('assets/img/akademik-images/proyek-image/') . $project->image) && $project->image) {
                $imagePath = public_path('assets/img/akademik-images/proyek-image/') . $project->image;
                unlink($imagePath);
            }
        }

        $project = $project->delete();

        if ($project) {
            return redirect(route('proyek-index'))->with('success', 'Berhasil Hapus Proyek Sekolah!');
        } else {
            return redirect(route('proyek-index'))->with('failed', 'Gagal Hapus Proyek Sekolah!');
        }
    }
}
