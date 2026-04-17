<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\DrivingLesson;
use App\Models\Vehicle;

class DrivingInstructor extends Model
{
    protected $fillable = [
        // Personas informācija
        'name',
        'surname',
        'personal_code',
        'email',
        'phone',
        'address',

        // Profesionālā informācija
        'registered_since',
        'category_id',
        'description'
    ]; 

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function drivingLessons() {
        return $this->hasMany(DrivingLesson::class);
    }

    public function getFullNameAttribute(): string {
        return "{$this->name} {$this->surname}";
    }

    public function vehicles() {
        return $this->hasMany(Vehicle::class);
    }
}
