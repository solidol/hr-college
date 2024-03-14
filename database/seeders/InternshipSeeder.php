<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator;
use App\Models\Internship;
use App\Models\InternshipType;


class InternshipSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        InternshipType::create([
            'title' => 'Участь у підвищення кваліфікації',
        ]);
        InternshipType::create([
            'title' => 'Участь у конференції',
        ]);
        InternshipType::create([
            'title' => 'Участь в семінарі',
        ]);
        InternshipType::create([
            'title' => 'Участь у обласному методичному об\'єднанні',
        ]);
        InternshipType::create([
            'title' => 'Участь у всеукраїнському методичному об\'єднанні',
        ]);



        Internship::create([
            'thesis'=>'Тестове стажування перше',
            'institution'=>'Одеська політехніка',
            'department'=>'Кафедра 123',
            'date_start'=>'2022-02-24',
            'date_end'=>'2022-03-01',
            'hours'=>12,
            'employee_id'=>1,
            'internship_type_id'=>1,
        ]);
        Internship::create([
            'thesis'=>'Тестове стажування друге',
            'institution'=>'Одеська політехніка',
            'department'=>'Кафедра 123',
            'date_start'=>'2023-02-24',
            'date_end'=>'2023-03-01',
            'hours'=>12,
            'employee_id'=>1,
            'internship_type_id'=>1,
        ]);
        Internship::create([
            'thesis'=>'Тестове стажування третє',
            'institution'=>'Одеська політехніка',
            'department'=>'Кафедра 123',
            'date_start'=>'2024-02-24',
            'date_end'=>'2024-03-01',
            'hours'=>12,
            'employee_id'=>1,
            'internship_type_id'=>1,
        ]);






    }
}
