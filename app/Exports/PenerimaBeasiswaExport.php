<?php

namespace App\Exports;

use App\Models\BeasiswaPenerima;
use App\Models\Employee;
use App\Models\Extracurricular;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PenerimaBeasiswaExport implements FromView
{
    public function view(): View
    {
        return view('kesiswaan.beasiswa.generate-beasiswa', [
            'beasiswas' => BeasiswaPenerima::all(),
        ]);
    }
}
