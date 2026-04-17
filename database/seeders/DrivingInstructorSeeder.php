<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrivingInstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('driving_instructors')->upsert([
             [
                'name' => 'Māris',
                'surname' => 'Bērziņš',
                'personal_code' => '150380-12345',
                'email' => 'maris.berzins@example.com',
                'phone' => '+37120010001',
                'address' => 'Rīga, Brīvības iela 45',
                'registered_since' => '2017-03-10',
                'description' => 'Pieredzējis instruktors A, A1 un A2 kategorijām.',
            ],
            [
                'name' => 'Aigars',
                'surname' => 'Kalniņš',
                'personal_code' => '220485-23456',
                'email' => 'aigars.kalnins@example.com',
                'phone' => '+37120010002',
                'address' => 'Rīga, Tērbatas iela 17',
                'registered_since' => '2019-08-01',
                'description' => 'Strādā ar B kategorijas kursantiem.',
            ],
            [
                'name' => 'Juris',
                'surname' => 'Ozols',
                'personal_code' => '090290-34567',
                'email' => 'juris.ozols@example.com',
                'phone' => '+37120010003',
                'address' => 'Rīga, Lāčplēša iela 28',
                'registered_since' => '2020-05-15',
                'description' => 'Māca iesācējus un palīdz sagatavoties eksāmeniem.',
            ],
            [
                'name' => 'Edgars',
                'surname' => 'Liepiņš',
                'personal_code' => '011185-45678',
                'email' => 'edgars.liepins@example.com',
                'phone' => '+37120010004',
                'address' => 'Rīga, Dzirnavu iela 9',
                'registered_since' => '2016-11-20',
                'description' => 'Specializējas motociklu apmācībā.',
            ],
            [
                'name' => 'Ilmārs',
                'surname' => 'Siliņš',
                'personal_code' => '300775-56789',
                'email' => 'ilmars.silins@example.com',
                'phone' => '+37120010005',
                'address' => 'Rīga, Čaka iela 63',
                'registered_since' => '2015-02-01',
                'description' => 'Pieredze ar A, A1 un A2 kategorijām.',
            ],
            [
                'name' => 'Kaspars',
                'surname' => 'Mežulis',
                'personal_code' => '050990-67890',
                'email' => 'kaspars.mezulis@example.com',
                'phone' => '+37120010006',
                'address' => 'Rīga, Vienības gatve 100',
                'registered_since' => '2021-06-01',
                'description' => 'Jauns instruktors ar modernu pieeju apmācībai.',
            ],
            [
                'name' => 'Rihards',
                'surname' => 'Kalējs',
                'personal_code' => '120688-78901',
                'email' => 'rihards.kalejs@example.com',
                'phone' => '+37120010007',
                'address' => 'Rīga, Maskavas iela 75',
                'registered_since' => '2018-04-12',
                'description' => 'Pieredzējis instruktors ar uzsvaru uz drošu un pārliecinātu braukšanu.',
            ],
        ], ['email']);

        DB::table('category_driving_instructor')->upsert([
            ['category_id' => '5', 'driving_instructor_id' => '1'],
            ['category_id' => '6', 'driving_instructor_id' => '2'],
            ['category_id' => '7', 'driving_instructor_id' => '3'],
            ['category_id' => '1', 'driving_instructor_id' => '4'],
            ['category_id' => '2', 'driving_instructor_id' => '5'],
            ['category_id' => '3', 'driving_instructor_id' => '6'],
            ['category_id' => '4', 'driving_instructor_id' => '7'],
        ], ['category_id', 'driving_instructor_id']);
    }
}
