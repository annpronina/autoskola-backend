<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TheoryLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('theory_lessons')->upsert([
            [
                'group_id' => 6,
                'starts_at' => '2026-02-03 17:00',
                'ends_at' => '2026-02-03 21:00',
                'lesson_number' => 1,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'group_id' => 6,
                'starts_at' => '2026-02-10 17:00',
                'ends_at' => '2026-02-10 21:00',
                'lesson_number' => 2,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'group_id' => 6,
                'starts_at' => '2026-02-17 17:00',
                'ends_at' => '2026-02-17 21:00',
                'lesson_number' => 3,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'group_id' => 6,
                'starts_at' => '2026-02-24 17:00',
                'ends_at' => '2026-02-24 21:00',
                'lesson_number' => 4,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'group_id' => 6,
                'starts_at' => '2026-03-03 17:00',
                'ends_at' => '2026-03-03 21:00',
                'lesson_number' => 5,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'group_id' => 6,
                'starts_at' => '2026-03-10 17:00',
                'ends_at' => '2026-03-10 21:00',
                'lesson_number' => 6,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'group_id' => 6,
                'starts_at' => '2026-03-17 17:00',
                'ends_at' => '2026-03-17 21:00',
                'lesson_number' => 7,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'group_id' => 6,
                'starts_at' => '2026-03-24 17:00',
                'ends_at' => '2026-03-24 21:00',
                'lesson_number' => 8,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'group_id' => 6,
                'starts_at' => '2026-03-31 17:00',
                'ends_at' => '2026-03-31 21:00',
                'lesson_number' => 9,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'group_id' => 6,
                'starts_at' => '2026-04-07 17:00',
                'ends_at' => '2026-04-07 21:00',
                'lesson_number' => 10,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'group_id' => 6,
                'starts_at' => '2026-04-14 17:00',
                'ends_at' => '2026-04-14 21:00',
                'lesson_number' => 11,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'group_id' => 6,
                'starts_at' => '2026-04-21 17:00',
                'ends_at' => '2026-04-21 21:00',
                'lesson_number' => 12,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'group_id' => 6,
                'starts_at' => '2026-04-28 17:00',
                'ends_at' => '2026-04-28 21:00',
                'lesson_number' => 13,
                'created_at' => now(),
                'updated_at' => now()

            ],
        ], ['group_id', 'lesson_number'],
        [
            'group_id',
            'starts_at',
            'ends_at',
            'lesson_number',
            'created_at',
            'updated_at'
        ]);
    }
}
