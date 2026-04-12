<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('groups')->insert([
             [
                'name' => 'A-2026-04',
                'start_date' => '2026-04-15',
                'end_date' => '2026-06-15',
                'category_id' => 1,
                'theory_teacher_id' => 2,
                'status_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'AM-2026-04',
                'start_date' => '2026-04-20',
                'end_date' => '2026-05-20',
                'category_id' => 2,
                'theory_teacher_id' => 2,
                'status_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'A1-2026-05',
                'start_date' => '2026-05-01',
                'end_date' => '2026-07-01',
                'category_id' => 3,
                'theory_teacher_id' => 2,
                'status_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'A2-2026-03',
                'start_date' => '2026-03-10',
                'end_date' => '2026-05-10',
                'category_id' => 4,
                'theory_teacher_id' => 2,
                'status_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ADR-2026-04',
                'start_date' => '2026-04-25',
                'end_date' => '2026-05-25',
                'category_id' => 5,
                'theory_teacher_id' => 1,
                'status_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'B-2026-02',
                'start_date' => '2026-02-01',
                'end_date' => '2026-04-30',
                'category_id' => 6,
                'theory_teacher_id' => 1,
                'status_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BE-2026-04',
                'start_date' => '2026-04-18',
                'end_date' => '2026-06-18',
                'category_id' => 7,
                'theory_teacher_id' => 1,
                'status_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
