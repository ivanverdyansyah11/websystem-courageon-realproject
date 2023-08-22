<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $guarded = [];

    public function kategori_prestasi()
    {
        return $this->belongsTo(KategoriPrestasi::class, 'id');
    }
}
