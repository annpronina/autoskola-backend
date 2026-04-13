<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrivingLessonStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('driving_lesson_status')->insert([
            ['name' => 'Planned'],
            ['name' => 'Completed'],
            ['name' => 'Cancelled']
        ]);
    }
}
