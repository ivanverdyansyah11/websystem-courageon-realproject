<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Hobi;
use App\Models\HobiContoh;
use App\Models\SectionManagement;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManajemenController extends Controller
{
    function index()
    {
        return view('profil.manajemen.index', [
            'title' => 'Profil > Manajemen',
            'section' => SectionManagement::first(),
            'managements' => Employee::where('role_employees_id', '1')->paginate(6),
        ]);
    }

    public function search(Request $request)
    {
        $managements = Employee::where('role_employees_id', '1')
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

        return view('profil.manajemen.index', [
            'title' => 'Profil > Manajemen',
            'section' => SectionManagement::first(),
            'managements' => $managements,
        ]);
    }

    function detailSection()
    {
        $section_management = SectionManagement::first();
        return response()->json($section_management);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'button' => 'required|string|max:255',
        ]);

        $section_management = SectionManagement::first()->update($validatedData);

        if ($section_management) {
            return redirect(route('manajemen-index'))->with('success', 'Berhasil Edit Section Manajemen Sekolah!');
        } else {
            return redirect(route('manajemen-create'))->with('failed', 'Gagal Edit Section Manajemen Sekolah!');
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

        return view('profil.manajemen.detail', [
            'title' => 'Profil > Manajemen',
            'management' => Employee::where('id', $id)->first(),
            'work_tenure' => $work_tenure,
        ]);
    }

    function create()
    {
        return view('profil.manajemen.create', [
            'title' => 'Profil > Manajemen',
        ]);
    }

    function store(Request $request)
    {
        if ($request->gender == '' || $request->status == '') {
            return redirect(route('manajemen-create'))->with('failed', 'Isi Form Jenis Kelamin dan Status Terlebih Dahulu!');
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
            $image->move(public_path('assets/img/profil-images/manajemen-image/'), $imageName);
            $validatedData['image'] = $imageName;
        }

        $validatedData['role_employees_id'] = '1';

        if ($validatedData['status'] == '-') {
            $validatedData['status'] = null;
        }

        $employee = Employee::create($validatedData);

        if ($employee) {
            return redirect(route('manajemen-index'))->with('success', 'Berhasil Tambah Manajemen Sekolah!');
        } else {
            return redirect(route('manajemen-create'))->with('failed', 'Gagal Tambah Manajemen Sekolah!');
        }
    }

    function edit($id)
    {
        return view('profil.manajemen.edit', [
            'title' => 'Profil > Manajemen',
            'management' => Employee::where('id', $id)->first(),
        ]);
    }

    function update($id, Request $request)
    {
        if ($request->gender == '' || $request->status == '') {
            return redirect(route('manajemen-edit', $id))->with('failed', 'Isi Form Jenis Kelamin dan Status Terlebih Dahulu!');
        }

        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'nip' => 'nullable|string|max:255',
            'place_of_birth' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|date',
            'position' => 'nullable|string|max:255',
            'gender' => 'nullable|string',
            'status' => 'nullable|string',
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
            if (public_path('assets/img/profil-images/manajemen-image/') . $request->oldImage && $request->oldImage) {
                $oldImagePath = public_path('assets/img/profil-images/manajemen-image/') . $request->oldImage;
                unlink($oldImagePath);
            }

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
            return redirect(route('manajemen-edit', $id))->with('failed', 'Gagal Edit Manajemen Sekolah!');
        }
    }

    function delete($id)
    {
        $employee = Employee::where('id', $id)->first();

        if ($employee->image) {
            if (public_path('assets/img/profil-images/manajemen-image/') . $employee->image && $employee->image) {
                $imagePath = public_path('assets/img/profil-images/manajemen-image/') . $employee->image;
                unlink($imagePath);
            }
        }

        $employee = $employee->delete();

        if ($employee) {
            return redirect(route('manajemen-index'))->with('success', 'Berhasil Hapus Manajemen Sekolah!');
        } else {
            return redirect(route('manajemen-create'))->with('failed', 'Gagal Hapus Manajemen Sekolah!');
        }
    }
}
