<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryKenaikanSiswa extends Model
{
    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(Student::class, 'students_id');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusans_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelases_id');
    }

    public function index()
    {
        return $this->belongsTo(Index::class, 'indexes_id');
    }

    public function semesters()
    {
        return $this->belongsTo(Semester::class, 'semesters_id');
    }
}
