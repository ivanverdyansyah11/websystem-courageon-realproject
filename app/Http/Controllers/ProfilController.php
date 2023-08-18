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
        $course = Course::where('id', $id)->get();
        return response()->json($course);
    }

    function edit($id)
    {
        return view('profil.manajemen.edit', [
            'title' => 'Profil > Edit Manajemen',
            'management' => Employee::where('id', $id)->first(),
        ]);
    }

    function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'nip' => 'nullable|string|max:18',
            'place_of_birth' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'position' => 'required|string|max:255',
            'gender' => 'required|string',
            'status' => 'string',
            'highest_rank' => 'nullable|string|max:255',
            'room_type' => 'nullable|max:255',
            'tmt' => 'nullable|date',
            'last_number_skp' => 'nullable|string|max:255',
            'last_date_skp' => 'nullable|date',
            'work_tenure' => 'nullable|date',
            'first_number_skp' => 'nullable|string|max:255',
            'first_date_skp' => 'nullable|date',
            'salary_increase' => 'nullable|date',
            'employee_card_number' => 'nullable|string|max:255',
        ]);

        if ($request->file('image')) {
            $oldImagePath = public_path('assets/img/profil-images/manajemen-image/') . $request->oldImage;
            unlink($oldImagePath);

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/profil-images/manajemen-image/'), $imageName);
            $validatedData['image'] = $imageName;
        } else {
            $validatedData['image'] = $request->oldImage;
        }

        if ($validatedData['status'] == '-') {
            $validatedData['status'] = null;
        }

        $employee = Employee::where('id', $id)->first()->update($validatedData);

        if ($employee) {
            return redirect(route('manajemen-index'))->with('success', 'Berhasil Edit Manajemen Sekolah!');
        } else {
            return redirect(route('manajemen-create'))->with('failed', 'Gagal Edit Manajemen Sekolah!');
        }
    }

    function delete($id)
    {
        $employee = Employee::where('id', $id)->first();

        if ($employee->image) {
            $imagePath = public_path('assets/img/profil-images/manajemen-image/') . $employee->image;
            unlink($imagePath);
        }

        $employee = $employee->delete();

        if ($employee) {
            return redirect(route('manajemen-index'))->with('success', 'Berhasil Hapus Manajemen Sekolah!');
        } else {
            return redirect(route('manajemen-create'))->with('failed', 'Gagal Hapus Manajemen Sekolah!');
        }
    }
}
