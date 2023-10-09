<?php

namespace App\Exports;

use App\Models\Employee;
use App\Models\Student;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ManajemenExport implements FromView
{
    public function view(): View
    {
        return view('profil.manajemen.generate-manajemen', [
            'manajemens' => Employee::where('role_employees_id', 1)->get(),
        ]);
    }
}
