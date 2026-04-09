<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Group;

class TheoryTeacher extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'personal_code',
        'email', 
        'address',
        'phone',
        'registered_since',
        'category_id',
        'description'
    ];

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function groups() {
        return $this->hasMany(Group::class);
    }
}
