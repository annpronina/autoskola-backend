<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DrivingInstructor extends Model
{
    protected $fillable = [
        // Personas informācija
        'name',
        'surname',
        'personal_code',
        'email',
        'phone',
        'address',

        // Profesionālā informācija
        'registered_since',
        'category_id',
        'vehicle',
        'description'
    ]; 
}
