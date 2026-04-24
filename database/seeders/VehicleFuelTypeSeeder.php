<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleFuelTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehicle_fuel_type')->upsert([
            ['fuel_type' => 'Dīzelis'],
            ['fuel_type' => 'Benzīns'],
            ['fuel_type' => 'Elektro']
        ], ['fuel_type']);
    }
}
