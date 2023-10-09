<?php

namespace App\Exports;

use App\Models\Employee;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PegawaiExport implements FromView
{
    public function view(): View
    {
        return view('profil.pegawai.generate-pegawai', [
            'pegawais' => Employee::where('role_employees_id', 3)->get(),
        ]);
    }
}
