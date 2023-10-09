<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelases_id');
    }

    public function tahun_ajaran()
    {
        return $this->belongsTo(TahunAjaran::class, 'tahun_ajarans_id');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusans_id');
    }

    public function index()
    {
        return $this->belongsTo(Index::class, 'indices_id');
    }

    public function semesters()
    {
        return $this->belongsTo(Semester::class, 'semesters_id');
    }
}
