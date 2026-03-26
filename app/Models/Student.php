<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

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


}
