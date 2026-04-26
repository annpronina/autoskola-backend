<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TheoryTeacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'personal_code',
        'email', 
        'address',
        'phone',
        'registered_since',
        'description'
    ];

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function groups() {
        return $this->hasMany(Group::class);
    }

    public function getFullNameAttribute(): string {
        return "{$this->name} {$this->surname}";
    }
}
