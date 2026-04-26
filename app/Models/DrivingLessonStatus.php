<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DrivingLesson;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DrivingLessonStatus extends Model
{
    use HasFactory;
    
    public function drivingLessons() {
        return $this->hasMany(DrivingLesson::class);
    }
}
