<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\DrivingInstructor;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function students() {
        return $this->belongsToMany(Student::class);
    }

    public function drivingInstructors() {
        return $this->belongsToMany(DrivingInstructor::class);
    }
}
