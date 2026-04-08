<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'personal_code',
        'email',
        'phone',
        'address',
        'position'
    ];
}
