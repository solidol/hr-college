<?php

namespace Database\Seeders;

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
            'name' => 'admin',
            'email' => 'admin@fakemail.com',
            'password' => Hash::make('!masteroftheuniverse'),
            'userable_id' => 1,
            'userable_type' => 'App\Models\Employee',
            'roles' => 'employee,admin',
            'status' => 1
        ]);



    }
}
