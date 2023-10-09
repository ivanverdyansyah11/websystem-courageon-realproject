<?php

namespace App\Exports;

use App\Models\Employee;
use App\Models\Journal;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class MajalahExport implements FromView
{
    public function view(): View
    {
        return view('humas.majalah.generate-majalah', [
            'majalahs' => Journal::all(),
        ]);
    }
}
