<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehicle_types')->upsert([
            ['type' => 'Car'],
            ['type' => 'Motorcycle'],
            ['type' => 'Scooter'],
            ['type' => 'Trailer']
        ], ['type']);
    }
}
