<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator;
use App\Models\User;
use App\Models\Person;
use App\Models\Employee;


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
            'user_name' => 'levitsky',
            'email' => 'levitsky.v.n@gmail.com',
            'password' => Hash::make('111111'),
            'userable_id' => 1,
            'userable_type' => 'App\Models\Person',
            'roles' => 'employee,admin',
            'status' => 1
        ]);
        
        Person::create([
            'lastname' => 'Левицький',
            'firstname' => 'Віктор',
            'secondname' => 'Миколайович',
            'birthdate' => '1987-10-04'
        ]);
        
        Employee::create([
            'person_id' => 1,
            'position_id' => 1,
            
        ]);
        
    }
}
