<?php

namespace App\Exports;

use App\Models\Employee;
use App\Models\Extracurricular;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class EkstrakurikulerExport implements FromView
{
    public function view(): View
    {
        return view('kesiswaan.ekstrakurikuler.generate-ekstrakurikuler', [
            'ekstrakurikulers' => Extracurricular::all(),
        ]);
    }
}
