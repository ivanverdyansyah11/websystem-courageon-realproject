<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = [];

    public function role_employee()
    {
        return $this->belongsTo(RoleEmployee::class, 'role_employees_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
