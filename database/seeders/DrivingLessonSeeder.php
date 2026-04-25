<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrivingLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('driving_lessons')->upsert([
            [
                'starts_at' => '2026-04-15 09:00',
                'ends_at' => '2026-04-15 10:00',
                'student_id' => 1,
                'driving_instructor_id' => 1,
                'category_id' => 6,
                'status_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                
                'starts_at' => '2026-04-15 10:00',
                'ends_at' => '2026-04-15 11:00',
                'student_id' => 2,
                'driving_instructor_id' => 1,
                'category_id' => 7,
                'status_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'starts_at' => '2026-04-16 11:00',
                'ends_at' => '2026-04-16 12:00',
                'student_id' => 3,
                'driving_instructor_id' => 2,
                'category_id' => 1,
                'status_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'starts_at' => '2026-04-16 12:00',
                'ends_at' => '2026-04-16 13:00',
                'student_id' => 4,
                'driving_instructor_id' => 2,
                'category_id' => 4,
                'status_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'starts_at' => '2026-04-17 14:00',
                'ends_at' => '2026-04-17 15:00',
                'student_id' => 5,
                'driving_instructor_id' => 3,
                'category_id' => 5,
                'status_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'starts_at' => '2026-04-17 15:00',
                'ends_at' => '2026-04-17 16:00',
                'student_id' => 6,
                'driving_instructor_id' => 3,
                'category_id' => 6,
                'status_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'starts_at' => '2026-04-18 16:00',
                'ends_at' => '2026-04-18 17:00',
                'student_id' => 7,
                'driving_instructor_id' => 4,
                'category_id' => 1,
                'status_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'starts_at' => '2026-04-18 17:00',
                'ends_at' => '2026-04-18 18:00',
                'student_id' => 8,
                'driving_instructor_id' => 4,
                'category_id' => 3,
                'status_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'starts_at' => '2026-04-19 09:00',
                'ends_at' => '2026-04-19 10:00',
                'student_id' => 9,
                'driving_instructor_id' => 5,
                'category_id' => 6,
                'status_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'starts_at' => '2026-04-19 10:00',
                'ends_at' => '2026-04-19 11:00',
                'student_id' => 10,
                'driving_instructor_id' => 5,
                'category_id' => 7,
                'status_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ],  ['driving_instructor_id', 'starts_at', 'ends_at']);
    }
}
