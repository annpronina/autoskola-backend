<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('group_statuses')->upsert([
            ['name' => 'Planned'],
            ['name' => 'Active'],
            ['name' => 'Completed'],
            ['name' => 'Cancelled'],
        ], ['name']);
    }
}
