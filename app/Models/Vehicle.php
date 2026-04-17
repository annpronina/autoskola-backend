<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\DrivingLesson;
use App\Models\VehicleType;
use App\Models\VehicleFuelType;
use App\Models\VehicleTransmission;
use App\Models\DrivingInstructor;

class Vehicle extends Model
{
    protected $fillable = [
        'type', 
        'brand',
        'model',
        'number_plate',
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

    public function vehicleType() {
        return $this->belongsTo(VehicleType::class);
    }

    public function vehicleFuelType() {
        return $this->belongsTo(VehicleFuelType::class);
    }

    public function vehicleTransmission() {
        return $this->belongsTo(VehicleTransmission::class);
    }

    public function drivingInstructor() {
        return $this->belongsTo(DrivingInstructor::class);
    }

    public function getFullNameAttribute(): string {
        return "{$this->brand} {$this->model} ({$this->number_plate})";
    }
}
