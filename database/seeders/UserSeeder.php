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
                'position_id' => 50,
                'position_type' => 1,
                'volume' => 1,
            ])
        );

        $emp->phones()->save(
            new Phone([
                'phone_type' => 1,
                'phone' => '+380997725462',
            ])
        );


        User::create([
            'name' => 'safonov',
            'email' => 'nemko85@gmail.com',
            'password' => Hash::make('111111'),
            'userable_id' => 2,
            'userable_type' => 'App\Models\Employee',
            'roles' => 'employee',
            'status' => 1
        ]);

        $emp = Employee::create([
            'reg_number' => 123457,
            'lastname' => 'Сафонов',
            'firstname' => 'Михайло',
            'secondname' => 'Сергійович',
            'birthdate' => '1985-01-01'
        ]);
        $emp->cards()->save(
            new EmployeeCard([
                'position_id' => 50,
                'position_type' => 1,
                'volume' => 1,
            ])
        );
        $emp->cards()->save(
            new EmployeeCard([
                'position_id' => 10,
                'position_type' => 2,
                'volume' => 0.5,
            ])
        );
        $emp->phones()->save(
            new Phone([
                'phone_type' => 2,
                'phone' => '+380662458185',
            ])
        );
        $emp->phones()->save(
            new Phone([
                'phone_type' => 2,
                'phone' => '+380982458185',
            ])
        );


        User::create([
            'name' => 'test',
            'email' => 'test666@gmail.com',
            'password' => Hash::make('111111'),
            'userable_id' => 3,
            'userable_type' => 'App\Models\Employee',
            'roles' => 'employee',
            'status' => 1
        ]);

        $emp = Employee::create([
            'reg_number' => 123458,
            'lastname' => 'Тестер',
            'firstname' => 'Тест',
            'secondname' => 'Тестович',
            'birthdate' => '1985-01-01'
        ]);
        $emp->cards()->save(
            new EmployeeCard([
                'position_id' => 50,
                'position_type' => 1,
                'volume' => 1,
            ])
        );
        $emp->cards()->save(
            new EmployeeCard([
                'position_id' => 10,
                'position_type' => 2,
                'volume' => 0.5,
            ])
        );
        $emp->phones()->save(
            new Phone([
                'phone_type' => 2,
                'phone' => '+380662458023',
            ])
        );
        $emp->phones()->save(
            new Phone([
                'phone_type' => 2,
                'phone' => '+380982454321',
            ])
        );


        User::create([
            'name' => 'derector',
            'email' => 'derector@gmail.com',
            'password' => Hash::make('111111'),
            'userable_id' => 4,
            'userable_type' => 'App\Models\Employee',
            'roles' => 'employee,boss',
            'status' => 1
        ]);

        $emp = Employee::create([
            'reg_number' => 123459,
            'lastname' => 'Яковенко',
            'firstname' => 'Олександр',
            'secondname' => 'Євгенович',
            'birthdate' => '1987-10-04'
        ]);
        $emp->cards()->save(
            new EmployeeCard([
                'position_id' => 1,
                'position_type' => 1,
                'volume' => 1,
            ])
        );

        $emp->phones()->save(
            new Phone([
                'phone_type' => 1,
                'phone' => '+380666666666',
            ])
        );


    }
}
