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
            ['name' => 'A'],
            ['name' => 'AM'],
            ['name' => 'A1'],
            ['name' => 'A2'],
            ['name' => 'ADR'],
            ['name' => 'B'],
            ['name' => 'BE'],
        ], ['name']);
    }
}
