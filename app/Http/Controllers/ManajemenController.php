<?php

namespace App\Http\Controllers;

use App\Models\Employee;
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
