<?php

namespace App\Exports;

use App\Models\Employee;
use App\Models\Prasarana;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PrasaranaExport implements FromView
{
    public function view(): View
    {
        return view('sarana.prasarana.generate-prasarana', [
            'prasaranas' => Prasarana::all(),
        ]);
    }
}
