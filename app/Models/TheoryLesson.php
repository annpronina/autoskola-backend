<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TheoryLesson extends Model
{
    use HasFactory;
    
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
