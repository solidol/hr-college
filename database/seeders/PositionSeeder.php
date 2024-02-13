<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator;
use App\Models\Position;


class PositionSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::create([
            'title' => 'Викладач'
        ]);      
        Position::create([
            'title' => 'Завідувач лабораторії'
        ]);      
        Position::create([
            'title' => 'Методист'
        ]);      

    }
}
