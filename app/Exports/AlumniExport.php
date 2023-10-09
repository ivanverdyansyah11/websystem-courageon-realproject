<?php

namespace App\Exports;

use App\Models\Alumni;
use App\Models\Employee;
use App\Models\Extracurricular;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AlumniExport implements FromView
{
    public function view(): View
    {
        return view('kesiswaan.alumni.generate-alumni', [
            'alumnis' => Alumni::all(),
        ]);
    }
}
