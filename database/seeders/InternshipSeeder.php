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
            'title' => 'Навчання на курсах підвищення кваліфікації',
        ]);
        InternshipType::create([
            'title' => 'Стажування на виробництві (підприємстві)',
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
            'thesis' => 'Тестове стажування перше',
            'institution' => 'Одеська політехніка',
            'department' => 'Кафедра 123',
            'date_start' => '2022-02-24',
            'date_end' => '2022-03-01',
            'hours' => 12,
            'position_card_id' => 1,
            'internship_type_id' => 1,
        ]);
        Internship::create([
            'thesis' => 'Тестове стажування друге',
            'institution' => 'Одеська політехніка',
            'department' => 'Кафедра 123',
            'date_start' => '2023-02-24',
            'date_end' => '2023-03-01',
            'hours' => 12,
            'position_card_id' => 1,
            'internship_type_id' => 1,
        ]);
        Internship::create([
            'thesis' => 'Тестове стажування третє',
            'institution' => 'Одеська політехніка',
            'department' => 'Кафедра 123',
            'date_start' => '2024-02-24',
            'date_end' => '2024-03-01',
            'hours' => 12,
            'position_card_id' => 1,
            'internship_type_id' => 1,
        ]);
        Internship::create([
            'thesis' => 'Налаштування веб-серверу',
            'institution' => 'KDTeam Україна',
            'department' => '',
            'date_start' => '2024-03-24',
            'date_end' => '2024-04-01',
            'hours' => 30,
            'position_card_id' => 1,
            'internship_type_id' => 2,
        ]);

        Internship::create([
            'thesis' => 'Налаштування серверу Linux',
            'institution' => 'KDTeam Україна',
            'department' => '',
            'date_start' => '2021-03-01',
            'date_end' => '2021-04-01',
            'hours' => 30,
            'position_card_id' => 1,
            'internship_type_id' => 2,
        ]);

        Internship::create([
            'thesis' => 'Використання сервісу Github в освітній діяльності викладача',
            'institution' => 'ВСП Херсонський політехнічний фаховий коледж',
            'department' => '',
            'date_start' => '2024-05-01',
            'date_end' => '2024-05-01',
            'hours' => 6,
            'position_card_id' => 1,
            'internship_type_id' => 5,
        ]);

        Internship::create([
            'thesis' => 'Використання MOODLE в освітній діяльності викладача',
            'institution' => 'ВСП Херсонський політехнічний фаховий коледж',
            'department' => '',
            'date_start' => '2024-05-01',
            'date_end' => '2024-05-01',
            'hours' => 6,
            'position_card_id' => 1,
            'internship_type_id' => 6,
        ]);




        //==============================



        Internship::create([
            'thesis' => 'Тестове стажування перше',
            'institution' => 'Одеська політехніка',
            'department' => 'Кафедра 123',
            'date_start' => '2022-02-24',
            'date_end' => '2022-03-01',
            'hours' => 12,
            'position_card_id' => 2,
            'internship_type_id' => 1,
            'status' => 0,
        ]);
        Internship::create([
            'thesis' => 'Тестове стажування друге',
            'institution' => 'Одеська політехніка',
            'department' => 'Кафедра 123',
            'date_start' => '2023-02-24',
            'date_end' => '2023-03-01',
            'hours' => 12,
            'position_card_id' => 2,
            'internship_type_id' => 1,
            'status' => 0,
        ]);
        Internship::create([
            'thesis' => 'Тестове стажування третє',
            'institution' => 'Одеська політехніка',
            'department' => 'Кафедра 123',
            'date_start' => '2024-02-24',
            'date_end' => '2024-03-01',
            'hours' => 12,
            'position_card_id' => 2,
            'internship_type_id' => 1,
        ]);
        Internship::create([
            'thesis' => 'Налаштування веб-серверу',
            'institution' => 'KDTeam Україна',
            'department' => '',
            'date_start' => '2024-03-24',
            'date_end' => '2024-04-01',
            'hours' => 30,
            'position_card_id' => 1,
            'internship_type_id' => 2,
        ]);

        Internship::create([
            'thesis' => 'Налаштування серверу Linux',
            'institution' => 'KDTeam Україна',
            'department' => '',
            'date_start' => '2021-03-01',
            'date_end' => '2021-04-01',
            'hours' => 30,
            'position_card_id' => 2,
            'internship_type_id' => 2,
        ]);

        Internship::create([
            'thesis' => 'Використання сервісу Github в освітній діяльності викладача',
            'institution' => 'ВСП Херсонський політехнічний фаховий коледж',
            'department' => '',
            'date_start' => '2024-05-01',
            'date_end' => '2024-05-01',
            'hours' => 6,
            'position_card_id' => 2,
            'internship_type_id' => 5,
            'status' => 0,
        ]);

        Internship::create([
            'thesis' => 'Використання MOODLE в освітній діяльності викладача',
            'institution' => 'ВСП Херсонський політехнічний фаховий коледж',
            'department' => '',
            'date_start' => '2024-05-01',
            'date_end' => '2024-05-01',
            'hours' => 6,
            'position_card_id' => 2,
            'internship_type_id' => 6,
        ]);



    }
}
