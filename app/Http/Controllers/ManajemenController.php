<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ManajemenController extends Controller
{
    function index()
    {
        return view('profil.manajemen.index', [
            'title' => 'Profil > Manajemen',
            'managements' => Employee::where('role_employees_id', '1')->get(),
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


        return view('profil.manajemen.detail', [
            'title' => 'Profil > Detail Manajemen',
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
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
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

        $validatedData['image'] = $request->file('image')->store('profil-images/manajemen-image');

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

    function editManagement()
    {
        $managements = Employee::where('role_employees_id', '1')->get();
        return response()->json($managements);
    }

    function updateManagement(Request $request)
    {
        // $validatedData = $request->validate([
        //     'logo_meaning' => 'required|string',
        //     'font_meaning' => 'required|string',
        //     'color_meaning' => 'required|string',
        // ]);

        // if ($request->file('logo')) {
        //     Storage::delete($request->oldImage);
        //     $validatedData['logo'] = $request->file('logo')->store('logo-brand');
        // } else {
        //     $validatedData['logo'] = $request->oldImage;
        // }

        // $logo = Logo::first()->update($validatedData);

        // if ($logo) {
        //     return redirect(route('logo-mars-index'))->with('success', 'Berhasil Update Logo Sekolah!');
        // } else {
        //     return redirect(route('logo-mars-index'))->with('failed', 'Gagal Update Logo Sekolah!');
        // }
    }
}
