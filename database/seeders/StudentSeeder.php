<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'Jānis',
                'surname' => 'Bērziņš',
                'personal_code' => '020382-00001',
                'address' => 'Rīga, Brīvības iela 10',
                'phone' => '+37120000001',
                'email' => 'janis.berzins@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Anna',
                'surname' => 'Kalniņa',
                'personal_code' => '120495-00002',
                'address' => 'Rīga, Tērbatas iela 5',
                'phone' => '+37120000002',
                'email' => 'anna.kalnina@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mārtiņš',
                'surname' => 'Ozols',
                'personal_code' => '231199-00003',
                'address' => 'Rīga, Lāčplēša iela 20',
                'phone' => '+37120000003',
                'email' => 'martins.ozols@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Laura',
                'surname' => 'Liepa',
                'personal_code' => '160206-00004',
                'address' => 'Rīga, Valdemāra iela 15',
                'phone' => '+37120000004',
                'email' => 'laura.liepa@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Edgars',
                'surname' => 'Zariņš',
                'personal_code' => '011106-00005',
                'address' => 'Rīga, Dzirnavu iela 8',
                'phone' => '+37120000005',
                'email' => 'edgars.zarins@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Elīna',
                'surname' => 'Krūmiņa',
                'personal_code' => '161075-00006',
                'address' => 'Rīga, Krišjāņa Barona iela 30',
                'phone' => '+37120000006',
                'email' => 'elina.krumina@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Andris',
                'surname' => 'Kļaviņš',
                'personal_code' => '150802-00007',
                'address' => 'Rīga, Čaka iela 12',
                'phone' => '+37120000007',
                'email' => 'andris.klavins@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kristīne',
                'surname' => 'Lapiņa',
                'personal_code' => '181205-00008',
                'address' => 'Rīga, Stabu iela 18',
                'phone' => '+37120000008',
                'email' => 'kristine.lapina@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Toms',
                'surname' => 'Pētersons',
                'personal_code' => '020606-00009',
                'address' => 'Rīga, Matīsa iela 22',
                'phone' => '+37120000009',
                'email' => 'toms.petersons@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Līga',
                'surname' => 'Vītola',
                'personal_code' => '240599-00010',
                'address' => 'Rīga, Avotu iela 9',
                'phone' => '+37120000010',
                'email' => 'liga.vitola@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Artūrs',
                'surname' => 'Saulītis',
                'personal_code' => '290303-00011',
                'address' => 'Rīga, Bruņinieku iela 14',
                'phone' => '+37120000011',
                'email' => 'arturs.saulitis@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Dace',
                'surname' => 'Eglīte',
                'personal_code' => '171073-00012',
                'address' => 'Rīga, Maskavas iela 50',
                'phone' => '+37120000012',
                'email' => 'dace.eglite@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Roberts',
                'surname' => 'Siliņš',
                'personal_code' => '210889-00013',
                'address' => 'Rīga, Slokas iela 33',
                'phone' => '+37120000013',
                'email' => 'roberts.silins@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Inese',
                'surname' => 'Briede',
                'personal_code' => '160704-00014',
                'address' => 'Rīga, Kalnciema iela 7',
                'phone' => '+37120000014',
                'email' => 'inese.briede@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kaspars',
                'surname' => 'Mežulis',
                'personal_code' => '220804-00015',
                'address' => 'Rīga, Vienības gatve 100',
                'phone' => '+37120000015',
                'email' => 'kaspars.mezulis@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Zane',
                'surname' => 'Riekstiņa',
                'personal_code' => '121201-00016',
                'address' => 'Rīga, Ganību dambis 25',
                'phone' => '+37120000016',
                'email' => 'zane.riekstina@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Gatis',
                'surname' => 'Strautmanis',
                'personal_code' => '110107-00017',
                'address' => 'Rīga, Sarkandaugavas iela 40',
                'phone' => '+37120000017',
                'email' => 'gatis.strautmanis@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ilze',
                'surname' => 'Vanaga',
                'personal_code' => '190896-00018',
                'address' => 'Rīga, Miera iela 60',
                'phone' => '+37120000018',
                'email' => 'ilze.vanaga@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Rihards',
                'surname' => 'Balodis',
                'personal_code' => '270402-00019',
                'address' => 'Rīga, Duntes iela 11',
                'phone' => '+37120000019',
                'email' => 'rihards.balodis@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Evija',
                'surname' => 'Upeniece',
                'personal_code' => '051090-00020',
                'address' => 'Rīga, Juglas iela 5',
                'phone' => '+37120000020',
                'email' => 'evija.upeniece@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

        DB::table('group_student')->insert([
            ['group_id' => 1, 'student_id' => 1],
            ['group_id' => 1, 'student_id' => 2],
            ['group_id' => 1, 'student_id' => 3],

            ['group_id' => 2, 'student_id' => 4],
            ['group_id' => 2, 'student_id' => 5],
            ['group_id' => 2, 'student_id' => 6],

            ['group_id' => 3, 'student_id' => 7],
            ['group_id' => 3, 'student_id' => 8],
            ['group_id' => 3, 'student_id' => 9],

            ['group_id' => 4, 'student_id' => 10],
            ['group_id' => 4, 'student_id' => 11],
            ['group_id' => 4, 'student_id' => 12],

            ['group_id' => 5, 'student_id' => 13],
            ['group_id' => 5, 'student_id' => 14],

            ['group_id' => 6, 'student_id' => 15],
            ['group_id' => 6, 'student_id' => 16],
            ['group_id' => 6, 'student_id' => 17],

            ['group_id' => 7, 'student_id' => 18],
            ['group_id' => 7, 'student_id' => 19],
            ['group_id' => 7, 'student_id' => 20],
        ]); 
    }
}
