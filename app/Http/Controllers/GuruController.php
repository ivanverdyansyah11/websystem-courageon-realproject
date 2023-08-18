<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    function index()
    {
        return view('profil.guru.index', [
            'title' => 'Profil > Guru',
            'teachers' => Employee::where('role_employees_id', '2')->get(),
        ]);
    }

    function detail($id)
    {
        $employee = Employee::where('id', $id)->first();

        if ($employee->work_tenure) {
            $work_tenure = str_replace('-', ',', $employee->work_tenure);
            $work_tenure = explode(',', $work_tenure);

            $targetDate = Carbon::create($work_tenure[0], $work_tenure[1], $work_tenure[2]);
            $currentDate = Carbon::now();

            $diff = $currentDate->diff($targetDate);
            $diffInYears = $diff->y;
            $diffInMonths = $diff->m;

            $work_tenure = $diffInYears . ' tahun ' . $diffInMonths . ' bulan';
        } else {
            $work_tenure = '-';
        }

        return view('profil.guru.detail', [
            'title' => 'Profil > Guru',
            'teacher' => Employee::with('course')->where('id', $id)->first(),
            'work_tenure' => $work_tenure,
        ]);
    }

    function create()
    {
        return view('profil.guru.create', [
            'title' => 'Profil > Guru',
            'courses' => Course::all(),
        ]);
    }

    function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'fullname' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'place_of_birth' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|date',
            'position' => 'required|string|max:255',
            'gender' => 'required|string',
            'status' => 'nullable|string',
            'course_id' => 'required|string',
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

        if ($validatedData['image']) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/profil-images/guru-image/'), $imageName);
            $validatedData['image'] = $imageName;
        }

        $validatedData['role_employees_id'] = '2';

        if ($validatedData['status'] == '-') {
            $validatedData['status'] = null;
        }

        $employee = Employee::create($validatedData);

        if ($employee) {
            return redirect(route('guru-index'))->with('success', 'Berhasil Tambah Guru Sekolah!');
        } else {
            return redirect(route('guru-create'))->with('failed', 'Gagal Tambah Guru Sekolah!');
        }
    }

    function edit($id)
    {
        return view('profil.guru.edit', [
            'title' => 'Profil > Guru',
            'teacher' => Employee::with('course')->where('id', $id)->first(),
            'courses' => Course::all(),
        ]);
    }

    function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'fullname' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'place_of_birth' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|date',
            'position' => 'required|string|max:255',
            'gender' => 'required|string',
            'status' => 'nullable|string',
            'course_id' => 'required|string',
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
            $oldImagePath = public_path('assets/img/profil-images/guru-image/') . $request->oldImage;
            unlink($oldImagePath);

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/profil-images/guru-image/'), $imageName);
            $validatedData['image'] = $imageName;
        } else {
            $validatedData['image'] = $request->oldImage;
        }

        if ($validatedData['status'] == '-') {
            $validatedData['status'] = null;
        }

        $employee = Employee::where('id', $id)->first()->update($validatedData);

        if ($employee) {
            return redirect(route('guru-index'))->with('success', 'Berhasil Edit Guru Sekolah!');
        } else {
            return redirect(route('guru-create'))->with('failed', 'Gagal Edit Guru Sekolah!');
        }
    }

    function delete($id)
    {
        $employee = Employee::where('id', $id)->first();

        if ($employee->image) {
            $imagePath = public_path('assets/img/profil-images/guru-image/') . $employee->image;
            unlink($imagePath);
        }

        $employee = $employee->delete();

        if ($employee) {
            return redirect(route('guru-index'))->with('success', 'Berhasil Hapus Guru Sekolah!');
        } else {
            return redirect(route('guru-create'))->with('failed', 'Gagal Hapus Guru Sekolah!');
        }
    }
}
