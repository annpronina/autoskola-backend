<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehicles')->insert([
            [
                'vehicle_type_id' => 1,
                'brand' => 'Volkswagen',
                'model' => 'T-Rock',
                'year' => 2025,
                'vehicle_transmission_id' => 1,
                'vehicle_fuel_type_id' => 1,
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_type_id' => 1,
                'brand' => 'Volkswagen',
                'model' => 'Golf 7',
                'year' => 2016,
                'vehicle_transmission_id' => 1,
                'vehicle_fuel_type_id' => 2,
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_type_id' => 1,
                'brand' => 'Volkswagen',
                'model' => 'Golf 8',
                'year' => 2019,
                'vehicle_transmission_id' => 1,
                'vehicle_fuel_type_id' => 2,
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_type_id' => 1,
                'brand' => 'Opel',
                'model' => 'Astra',
                'year' => 2010,
                'vehicle_transmission_id' => 1,
                'vehicle_fuel_type_id' => 1,
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_type_id' => 1,
                'brand' => 'Ford',
                'model' => 'C Max',
                'year' => 2016,
                'vehicle_transmission_id' => 2,
                'vehicle_fuel_type_id' => 2,
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_type_id' => 1,
                'brand' => 'Volkswagen',
                'model' => 'ID4',
                'year' => 2022,
                'vehicle_transmission_id' => 2,
                'vehicle_fuel_type_id' => 3,
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_type_id' => 4,
                'brand' => 'Brentex',
                'model' => 'BREN-3015-2-750',
                'year' => 2024,
                'vehicle_transmission_id' => null,
                'vehicle_fuel_type_id' => null,
                'category_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_type_id' => 3,
                'brand' => 'REX',
                'model' => 'Trophy 50',
                'year' => 2002,
                'vehicle_transmission_id' => null,
                'vehicle_fuel_type_id' => 2,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_type_id' => 2,
                'brand' => 'Malaguti',
                'model' => 'Drakon 125',
                'year' => 2025,
                'vehicle_transmission_id' => 1,
                'vehicle_fuel_type_id' => 2,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_type_id' => 2,
                'brand' => 'KTM',
                'model' => '390 DUKE',
                'year' => 2021,
                'vehicle_transmission_id' => 1,
                'vehicle_fuel_type_id' => 2,
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_type_id' => 2,
                'brand' => 'Kawasaki',
                'model' => 'Z 650',
                'year' => 2021,
                'vehicle_transmission_id' => 1,
                'vehicle_fuel_type_id' => 2,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_type_id' => 2,
                'brand' => 'Kawasaki',
                'model' => 'Z 650',
                'year' => 2023,
                'vehicle_transmission_id' => 1,
                'vehicle_fuel_type_id' => 2,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
 
