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
        DB::table('vehicle_fuel_type')->insert([
            ['name' => 'Diesel'],
            ['name' => 'Petrol'],
            ['name' => 'Electric']
        ]);
    }
}
