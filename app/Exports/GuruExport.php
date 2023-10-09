<?php

namespace App\Exports;

use App\Models\Employee;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class GuruExport implements FromView
{
    public function view(): View
    {
        return view('profil.guru.generate-guru', [
            'gurus' => Employee::where('role_employees_id', 2)->get(),
        ]);
    }
}
