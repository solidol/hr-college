<?php

namespace Database\Seeders;

use App\Models\EstablishedRank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator;
use App\Models\User;
use App\Models\PositionCard;
use App\Models\Employee;
use App\Models\Phone;


class EmployeeSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Employee::create([
            'reg_number' => '00000',
            'lastname' => 'Admin',
            'firstname' => 'Admin',
            'secondname' => 'Admin',
            'birthdate' => '1987-10-04'
        ]);

    }
}
