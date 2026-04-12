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
        DB::table('categories')->insert([
            [
                'name' => 'A',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'AM',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'A1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'A2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'ADR',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'B',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'BE',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
