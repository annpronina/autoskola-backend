<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Category;
use App\Models\TheoryTeacher;
use App\Models\GroupStatus;
use App\Models\TheoryLesson;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'category_id',
        'theory_teacher_id',
        'status_id',
        'lesson_count'
    ];

    public function students() {
        return $this->belongsToMany(Student::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function theoryTeacher() {
        return $this->belongsTo(TheoryTeacher::class);
    }

    public function groupStatus() {
        return $this->belongsTo(GroupStatus::class, 'status_id');
    }

    public function theoryLessons() {
        return $this->hasMany(TheoryLesson::class);
    }

    public function getFullDateAttribute(): string {
        return "{$this->start_date} {$this->end_date}";
    }
}
