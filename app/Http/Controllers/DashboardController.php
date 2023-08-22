<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'totalSiswa' => Student::count(),
            'totalManajemen' => Employee::where('role_employees_id', '1')->get()->count(),
            'totalGuru' => Employee::where('role_employees_id', '2')->get()->count(),
            'totalPegawai' => Employee::where('role_employees_id', '3')->get()->count(),
        ]);
    }
}
