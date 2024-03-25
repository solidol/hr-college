<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator;
use App\Models\Institution;


class InstitutionSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Institution::create([
            'title' => 'ВСП «Херсонський політехнічний фаховий коледж Національного університету «Одеська політехніка»',
            'short_title' => 'ХПФК Одеської політехніки',
        ]);
        Institution::create([
            'title' => 'Національний університет «Одеська політехніка»',
            'short_title' => 'НУ «Одеська політехніка»',
        ]);
     

    }
}
