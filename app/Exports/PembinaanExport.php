<?php

namespace App\Exports;

use App\Models\Employee;
use App\Models\Extracurricular;
use App\Models\PelayananKarir;
use App\Models\PembinaanSiswa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PembinaanExport implements FromView
{
    public function view(): View
    {
        return view('kesiswaan.pembinaan-siswa.generate-pembinaan', [
            'pembinaans' => PembinaanSiswa::all(),
        ]);
    }
}
