<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Group;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

}
