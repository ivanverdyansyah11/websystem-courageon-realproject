<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    protected $guarded = [];

    public function kenaikan_kelas()
    {
        return $this->belongsTo(KenaikanKelas::class, 'id');
    }
}
