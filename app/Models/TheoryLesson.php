<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TheoryLesson extends Model
{
    protected $fillable = [
        'group_id',
        'starts_at',
        'ends_at',
        'lesson_number'
    ];

    public function group() {
        return $this->belongsTo(Group::class);
    }
}
