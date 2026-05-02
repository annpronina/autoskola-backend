<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Group;
use App\Models\DrivingLesson;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'personal_code',
        'address',
        'phone',
        'email'
    ];

    public function groups() {
        return $this->belongsToMany(Group::class);
    }

    public function drivingLessons() {
        return $this->hasMany(DrivingLesson::class);
    }

    public function getFullNameAttribute(): string {
        return "{$this->name} {$this->surname}";
    }

}
