<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Group;
use App\Models\DrivingLesson;

class Student extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'personal_code',
        'address',
        'phone',
        'email',
        'category_id'
    ];

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function group() {
        return $this->belongsToMany(Group::class);
    }

    public function drivingLessons() {
        return $this->hasMany(DrivingLesson::class);
    }

    public function getFullNameAttribute(): string {
        return "{$this->name} {$this->surname}";
    }

}
