<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeasiswaPenerima extends Model
{
    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(Student::class, 'students_id');
    }
}
