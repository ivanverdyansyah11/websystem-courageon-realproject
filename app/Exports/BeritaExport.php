<?php

namespace App\Exports;

use App\Models\Alumni;
use App\Models\Berita;
use App\Models\Employee;
use App\Models\Extracurricular;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BeritaExport implements FromView
{
    public function view(): View
    {
        return view('humas.berita.generate-berita', [
            'beritas' => Berita::all(),
        ]);
    }
}
