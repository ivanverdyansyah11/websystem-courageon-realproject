<?php

namespace App\Exports;

use App\Models\Employee;
use App\Models\Extracurricular;
use App\Models\Prestasi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PrestasiExport implements FromView
{
    public function view(): View
    {
        return view('kesiswaan.prestasi.generate-prestasi', [
            'prestasis' => Prestasi::all(),
        ]);
    }
}
