<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\DrivingLesson;

class Vehicle extends Model
{
    protected $fillable = [
        'type', 
        'brand',
        'model',
        'year',
        'transmission', 
        'fuel_type',    
        'category_id'
    ];  

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function drivingLessons() {
        return $this->hasMany(DrivingLesson::class);
    }
}
