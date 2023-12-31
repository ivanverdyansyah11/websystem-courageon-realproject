<?php

namespace App\Http\Controllers;

use App\Exports\GuruExport;
use App\Models\Course;
use App\Models\Employee;
use App\Models\SectionTeacher;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class GuruController extends Controller
{
    function index()
    {
        return view('profil.guru.index', [
            'title' => 'Profil > Guru',
            'section' => SectionTeacher::first(),
            'teachers' => Employee::where('role_employees_id', '2')->paginate(6),
        ]);
    }

    public function search(Request $request)
    {
        $teachers = Employee::where('role_employees_id', 2)
            ->where('fullname', 'like', '%' . $request->search . '%')
            ->orWhere('nip', 'like', '%' . $request->search . '%')
            ->orWhere('place_of_birth', 'like', '%' . $request->search . '%')
            ->orWhere('date_of_birth', 'like', '%' . $request->search . '%')
            ->orWhere('rank', 'like', '%' . $request->search . '%')
            ->orWhere('position', 'like', '%' . $request->search . '%')
            ->orWhere('room_type', 'like', '%' . $request->search . '%')
            ->orWhere('status', 'like', '%' . $request->search . '%')
            ->orWhere('highest_rank', 'like', '%' . $request->search . '%')
            ->orWhere('tmt', 'like', '%' . $request->search . '%')
            ->orWhere('last_number_skp', 'like', '%' . $request->search . '%')
            ->orWhere('last_date_skp', 'like', '%' . $request->search . '%')
            ->orWhere('work_tenure', 'like', '%' . $request->search . '%')
            ->orWhere('first_number_skp', 'like', '%' . $request->search . '%')
            ->orWhere('first_date_skp', 'like', '%' . $request->search . '%')
            ->orWhere('salary_increase', 'like', '%' . $request->search . '%')
            ->orWhere('employee_card_number', 'like', '%' . $request->search . '%')
            ->paginate(6);

        return view('profil.guru.index', [
            'title' => 'Profil > Guru',
            'section' => SectionTeacher::first(),
            'teachers' => $teachers,
        ]);
    }

    public function generate()
    {
        return Excel::download(new GuruExport, 'data-guru.xlsx');
    }

    function detailSection()
    {
        $section_teacher = SectionTeacher::first();
        return response()->json($section_teacher);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'button' => 'required|string|max:255',
        ]);

        $section_teacher = SectionTeacher::first()->update($validatedData);

        if ($section_teacher) {
            return redirect(route('guru-index'))->with('success', 'Berhasil Edit Section Guru Sekolah!');
        } else {
            return redirect(route('guru-create'))->with('failed', 'Gagal Edit Section Guru Sekolah!');
        }
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
        if ($request->gender == '' || $request->status == '' || $request->course_id == '') {
            return redirect(route('guru-create'))->with('failed', 'Isi Form Jenis Kelamin, Status dan Mata Pelajaran Terlebih Dahulu!');
        }

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'fullname' => 'required|string|max:255',
            'nip' => 'nullable|string|max:255',
            'place_of_birth' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|date',
            'position' => 'nullable|string|max:255',
            'gender' => 'nullable|string',
            'status' => 'nullable|string',
            'course_id' => 'nullable|string',
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
        if ($request->gender == '' || $request->status == '' || $request->course_id == '') {
            return redirect(route('guru-edit', $id))->with('failed', 'Isi Form Jenis Kelamin, Status dan Mata Pelajaran Terlebih Dahulu!');
        }

        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'nip' => 'nullable|string|max:255',
            'place_of_birth' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|date',
            'position' => 'nullable|string|max:255',
            'gender' => 'nullable|string',
            'status' => 'nullable|string',
            'course_id' => 'nullable|string',
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
            if (file_exists(file_exists(public_path('assets/img/profil-images/guru-image/') . $request->oldImage)) && $request->oldImage) {
                $oldImagePath = public_path('assets/img/profil-images/guru-image/') . $request->oldImage;
                unlink($oldImagePath);
            }

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
            return redirect(route('guru-edit', $id))->with('failed', 'Gagal Edit Guru Sekolah!');
        }
    }

    function delete($id)
    {
        $employee = Employee::where('id', $id)->first();

        if ($employee->image) {
            if (file_exists(public_path('assets/img/profil-images/guru-image/') . $employee->image) && $employee->image) {
                $imagePath = public_path('assets/img/profil-images/guru-image/') . $employee->image;
                unlink($imagePath);
            }
        }

        $employee = $employee->delete();

        if ($employee) {
            return redirect(route('guru-index'))->with('success', 'Berhasil Hapus Guru Sekolah!');
        } else {
            return redirect(route('guru-index'))->with('failed', 'Gagal Hapus Guru Sekolah!');
        }
    }
}
