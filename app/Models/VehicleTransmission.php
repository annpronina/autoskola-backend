<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VehicleTransmission extends Model
{
    use HasFactory;

    protected $table = 'vehicle_transmission';
    
    public function vehicles() {
        return $this->hasMany(Vehicle::class);
    }
}
