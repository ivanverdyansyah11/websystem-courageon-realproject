<?php

namespace App\Exports;

use App\Models\Employee;
use App\Models\Extracurricular;
use App\Models\PelayananKarir;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PelayananExport implements FromView
{
    public function view(): View
    {
        return view('kesiswaan.pelayanan-karir.generate-pelayanan', [
            'pelayanans' => PelayananKarir::all(),
        ]);
    }
}
