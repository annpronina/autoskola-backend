<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;

class VehicleFuelType extends Model
{
    protected $table = 'vehicle_fuel_type';
    
    public function vehicle() {
        return $this->hasMany(Vehicle::class);
    }
}
