<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'type', // car, motorcycle, scooter...
        'brand',
        'model',
        'year',
        'transmission', // manual, automatic...
        'fuel_type',    // diesel, petrol, electric...
        'category_id'
    ];  
}
