<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator;
use App\Models\User;
use App\Models\EmployeeCard;
use App\Models\Employee;
use App\Models\Phone;


class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'levitsky',
            'email' => 'levitsky.v.n@gmail.com',
            'password' => Hash::make('111111'),
            'userable_id' => 1,
            'userable_type' => 'App\Models\Employee',
            'roles' => 'employee,admin',
            'status' => 1
        ]);

        $emp = Employee::create([
            'reg_number' => 123456,
            'lastname' => 'Левицький',
            'firstname' => 'Віктор',
            'secondname' => 'Миколайович',
            'birthdate' => '1987-10-04'
        ]);
        $emp->cards()->save(
            new EmployeeCard([
                'position_id' => 1,
            ])
        );
        $emp->phones()->save(
            new Phone([
                'phone_type' => 1,
                'phone' => '0997725462',
            ])
        );

    }
}
