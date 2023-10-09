<?php

namespace App\Exports;

use App\Models\Employee;
use App\Models\Project;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProyekExport implements FromView
{
    public function view(): View
    {
        return view('akademik.proyek.generate-proyek', [
            'proyeks' => Project::all(),
        ]);
    }
}
