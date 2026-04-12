<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TheoryTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('theory_teachers')->insert([
            [
                'name' => 'Andris',
                'surname' => 'Ozoliņš',
                'personal_code' => '120580-12345',
                'email' => 'andris.ozolins@example.com',
                'address' => 'Rīga, Brīvības iela 25',
                'phone' => '+37120000001',
                'registered_since' => '2018-09-01',
                'description' => 'Pieredzējis teorijas pasniedzējs ar vairāk nekā 10 gadu pieredzi autoskolā.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ilze',
                'surname' => 'Kalniņa',
                'personal_code' => '050690-54321',
                'email' => 'ilze.kalnina@example.com',
                'address' => 'Rīga, Tērbatas iela 12',
                'phone' => '+37120000002',
                'registered_since' => '2020-01-15', 
                'description' => 'Specializējas motociklu kategoriju teorijā un eksāmenu sagatavošanā.',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

        DB::table('category_theory_teacher')->insert([
            ['category_id' => '5', 'theory_teacher_id' => '1', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => '6', 'theory_teacher_id' => '1', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => '7', 'theory_teacher_id' => '1', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => '1', 'theory_teacher_id' => '2', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => '2', 'theory_teacher_id' => '2', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => '3', 'theory_teacher_id' => '2', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => '4', 'theory_teacher_id' => '2', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
