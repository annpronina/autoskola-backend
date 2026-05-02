<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DrivingInstructor;
use App\Models\TheoryTeacher;
use App\Models\Group;
use App\Models\DrivingLesson;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description'
    ];

    public function drivingInstructors() {
        return $this->belongsToMany(DrivingInstructor::class);
    }

    public function theoryTeachers() {
        return $this->belongsToMany(TheoryTeacher::class);
    }

    public function groups() {
        return $this->hasMany(Group::class);
    }

    public function drivingLessons() {
        return $this->hasMany(DrivingLesson::class);
    }

    public function vehicles() {
        return $this->hasMany(Vehicle::class);
    }
}
