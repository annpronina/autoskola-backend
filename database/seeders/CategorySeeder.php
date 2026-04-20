<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->upsert([
            [
                'name' => 'A',
                'description' => 'Motocikli, kvadrcikli',
                'created_at' => now(),
                'updated_at' =>  now()
            ],
            [
                'name' => 'AM',
                'description' => 'Mopēdi',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'A1',
                'description' => 'Motocikli, kuru motora darba tilpums nepārsniedz 125cc',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'A2',
                'description' => 'Motocikli, kuru motora jauda nepārsniedz 0,2kW',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'ADR',
                'description' => 'Bīstamo kravu pārvadāšana',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'B',
                'description' => 'Vieglie automobiļi, kuru pilna masa nepārsniedz 3500kg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'BE',
                'description' => 'Vieglie automobiļi ar piekabi',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ], ['name']);
    }
}
