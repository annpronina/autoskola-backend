<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\DrivingInstructor;
use App\Models\TheoryTeacher;
use App\Models\Group;

use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function theoryTeachers() {
        return $this->belongsToMany(TheoryTeacher::class);
    }

    public function groups() {
        return $this->HasMany(Group::class);
    }
}
