<?php

namespace App\Exports;

use App\Models\Student;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class StudentXIExport implements FromView
{
    public function view(): View
    {
        return view('kesiswaan.siswa.generate-siswa', [
            'students' => Student::where('kelases_id', 2)->get(),
        ]);
    }
}
