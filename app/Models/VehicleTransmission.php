<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;

class VehicleTransmission extends Model
{
    public function vehicle() {
        return $this->hasMany(Vehicle::class);
    }
}
