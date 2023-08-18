<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\HeaderProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    function index()
    {
        return view('profil.index', [
            'title' => 'Profil',
            'section_header' => HeaderProfile::first(),
            'courses' => Course::all(),
        ]);
    }

    function editHeader()
    {
        $section_header = HeaderProfile::first();
        return response()->json($section_header);
    }

    function updateHeader(Request $request)
    {
        $validatedData = $request->validate([
            'title_header' => 'required|string|max:255',
            'description' => 'required|string',
            'button' => 'required|string|max:255',
        ]);

        if ($request->file('banner')) {
            $oldImagePath = public_path('assets/img/profil-images/header-image/') . $request->oldImage;
            unlink($oldImagePath);

            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/profil-images/header-image/'), $imageName);
            $validatedData['banner'] = $imageName;
        } else {
            $validatedData['banner'] = $request->oldImage;
        }

        $headerProfile = HeaderProfile::first()->update($validatedData);

        if ($headerProfile) {
            return redirect(route('profil-index'))->with('success', 'Berhasil Update Section Header!');
        } else {
            return redirect(route('profil-index'))->with('failed', 'Gagal Update Section Header!');
        }
    }

    function storeCourse(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'hours_per_week' => 'required|string|max:255',
        ]);

        $course = Course::create($validatedData);

        if ($course) {
            return redirect(route('profil-index'))->with('success', 'Berhasil Tambah Mata Pelajaran!');
        } else {
            return redirect(route('profil-index'))->with('failed', 'Gagal Tambah Mata Pelajaran!');
        }
    }

    function editCourse($id)
    {
        $course = Course::where('id', $id)->first();
        return response()->json($course);
    }

    function updateCourse($id, Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'hours_per_week' => 'required|string|max:255',
        ]);

        $course = Course::where('id', $id)->first()->update($validatedData);

        if ($course) {
            return redirect(route('profil-index'))->with('success', 'Berhasil Edit Mata Pelajaran!');
        } else {
            return redirect(route('profil-index'))->with('failed', 'Gagal Edit Mata Pelajaran!');
        }
    }

    function deleteCourse($id)
    {
        $course = Course::where('id', $id)->first();

        $course = $course->delete();

        if ($course) {
            return redirect(route('profil-index'))->with('success', 'Berhasil Hapus Mata Pelajaran!');
        } else {
            return redirect(route('profil-index'))->with('failed', 'Gagal Hapus Mata Pelajaran!');
        }
    }
}
