<?php

namespace App\Exports;

use App\Models\Employee;
use App\Models\HistoryKenaikanSiswa;
use App\Models\Project;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class KenaikanSiswaExport implements FromView
{
    public function view(): View
    {
        return view('akademik.kelulusan.generate-kelulusan', [
            'kelulusans' => HistoryKenaikanSiswa::all(),
        ]);
    }
}
