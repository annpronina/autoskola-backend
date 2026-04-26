<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\DrivingInstructor;
use App\Models\Category;
use App\Models\DrivingLessonStatus;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DrivingLesson extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'student_id',
        'driving_instructor_id',
        'date',
        'starts_at',
        'ends_at',
        'status_id',
        'category_id'
    ];

    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function drivingInstructor() {
        return $this->belongsTo(DrivingInstructor::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function drivingLessonStatus() {
        return $this->belongsTo(drivingLessonStatus::class);
    }

    public function vehicle() {
        return $this->belongsTo(Vehicle::class);
    }
}
