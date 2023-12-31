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
            'section_headers' => HeaderProfile::paginate(6),
            'courses' => Course::all(),
        ]);
    }

    function detailHeader($id)
    {
        $section_header = HeaderProfile::where('id', $id)->first();
        return response()->json($section_header);
    }

    function storeHeader(Request $request)
    {
        $validatedData = $request->validate([
            'banner' => 'required|image|mimes:jpeg,png,jpg',
            'title_header' => 'required|string|max:255',
            'description' => 'required|string',
            'button' => 'required|string|max:255',
        ]);

        if ($request->file('banner')) {
            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/profil-images/header-image/'), $imageName);
            $validatedData['banner'] = $imageName;
        }

        $headerHome = HeaderProfile::create($validatedData);

        if ($headerHome) {
            return redirect(route('profil-index'))->with('success', 'Berhasil Tambah Section Header!');
        } else {
            return redirect(route('profil-index'))->with('failed', 'Gagal Tambah Section Header!');
        }
    }

    function updateHeader($id, Request $request)
    {
        $validatedData = $request->validate([
            'title_header' => 'required|string|max:255',
            'description' => 'required|string',
            'button' => 'required|string|max:255',
        ]);

        if ($request->file('banner')) {
            if (file_exists(public_path('assets/img/profil-images/header-image/') . $request->oldImage) && $request->oldImage) {
                $oldImagePath = public_path('assets/img/profil-images/header-image/') . $request->oldImage;
                unlink($oldImagePath);
            }

            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/profil-images/header-image/'), $imageName);
            $validatedData['banner'] = $imageName;
        } else {
            $validatedData['banner'] = $request->oldImage;
        }

        $headerHome = HeaderProfile::where('id', $id)->first()->update($validatedData);

        if ($headerHome) {
            return redirect(route('profil-index'))->with('success', 'Berhasil Update Section Header!');
        } else {
            return redirect(route('profil-index'))->with('failed', 'Gagal Update Section Header!');
        }
    }

    function deleteHeader($id)
    {
        $headerHome = HeaderProfile::where('id', $id)->first();

        if ($headerHome->banner) {
            if (file_exists(public_path('assets/img/profil-images/header-image/') . $headerHome->banner) && $headerHome->banner) {
                $imagePath = public_path('assets/img/profil-images/header-image/') . $headerHome->banner;
                unlink($imagePath);
            }
        }

        $headerHome = $headerHome->delete();

        if ($headerHome) {
            return redirect(route('profil-index'))->with('success', 'Berhasil Hapus Section Header!');
        } else {
            return redirect(route('profil-index'))->with('failed', 'Gagal Hapus Section Header!');
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
