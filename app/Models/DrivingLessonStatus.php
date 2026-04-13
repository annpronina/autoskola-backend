<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DrivingLesson;

class DrivingLessonStatus extends Model
{
    public function drivingLessons() {
        return $this->hasMany(DrivingLesson::class);
    }
}
