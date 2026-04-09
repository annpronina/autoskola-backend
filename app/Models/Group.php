<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Category;
use App\Models\TheoryTeacher;

class Group extends Model
{
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'category_id',
        'theory_teacher_id'
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
}
