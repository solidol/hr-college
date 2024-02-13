<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator;


class DocumentSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('document_types')->insert([
            'slug' => 'education',
            'title' => 'Документ про освіту'
        ]);
        DB::table('document_types')->insert([
            'slug' => 'passport',
            'title' => 'Паспорт'
        ]);
        DB::table('document_types')->insert([
            'slug' => 'code',
            'title' => 'ІПН'
        ]);
        DB::table('document_types')->insert([
            'slug' => 'decree',
            'title' => 'Наказ'
        ]);
        DB::table('document_types')->insert([
            'slug' => 'studentid',
            'title' => 'Студентський квиток'
        ]);
        DB::table('document_types')->insert([
            'slug' => 'gratitude',
            'title' => 'Подяка'
        ]);
        DB::table('document_types')->insert([
            'slug' => 'reprimand',
            'title' => 'Догана'
        ]);
        DB::table('document_types')->insert([
            'slug' => 'charter',
            'title' => 'Грамота'
        ]);
        DB::table('document_types')->insert([
            'slug' => 'diploma',
            'title' => 'Диплом'
        ]);
        DB::table('document_types')->insert([
            'slug' => 'contract',
            'title' => 'Договір'
        ]);

    }
}
