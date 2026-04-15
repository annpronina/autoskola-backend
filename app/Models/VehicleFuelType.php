<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;

class VehicleFuelType extends Model
{
    public function vehicle() {
        return $this->hasMany(Vehicle::class);
    }
}
