<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator;
use App\Models\DocumentType;


class DocumentSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DocumentType::create([
            'title' => 'Внутрішні документи'
        ]);
        DocumentType::create([
            'title' => 'Документ про освіту'
        ]);
        DocumentType::create([
            'title' => 'Документ про стажування'
        ]);
        DocumentType::create([
            'title' => 'Нагороди та догани'
        ]);
        DocumentType::create([
            'title' => 'Документи військового обліку'
        ]);
        DocumentType::create([
            'title' => 'Документи посвідчення особи'
        ]);
        DocumentType::create([
            'title' => 'Документи атестаційної справи'
        ]);
                
//==================================================
        DocumentType::create([
            'title' => 'Наказ',
            'parent_id' => 1
        ]);
        DocumentType::create([
            'title' => 'Заява',
            'parent_id' => 1
        ]);
        DocumentType::create([
            'title' => 'Клопотання',
            'parent_id' => 1
        ]);
        DocumentType::create([
            'title' => 'Трудова книжка',
            'parent_id' => 1
        ]);
        DocumentType::create([
            'title' => 'Автобіографія',
            'parent_id' => 1
        ]);
//==================================================
        DocumentType::create([
            'title' => 'Свідоцтво про ЗСО',
            'parent_id' => 2
        ]);
        DocumentType::create([
            'title' => 'Диплом кваліфікованого робітника',
            'parent_id' => 2
        ]);
        DocumentType::create([
            'title' => 'Диплом молодшого спеціаліста',
            'parent_id' => 2
        ]);
        DocumentType::create([
            'title' => 'Диплом молодшого ФМБ',
            'parent_id' => 2
        ]);
        DocumentType::create([
            'title' => 'Диплом бакалавра',
            'parent_id' => 2
        ]);
        DocumentType::create([
            'title' => 'Диплом спеціаліста',
            'parent_id' => 2
        ]);
        DocumentType::create([
            'title' => 'Диплом магістра',
            'parent_id' => 2
        ]);
        DocumentType::create([
            'title' => 'Диплом кандидата наук (доктора філософії)',
            'parent_id' => 2
        ]);
        DocumentType::create([
            'title' => 'Диплом доктора наук',
            'parent_id' => 2
        ]);
        DocumentType::create([
            'title' => 'Атестат доцента',
            'parent_id' => 2
        ]);
        DocumentType::create([
            'title' => 'Атестат професора',
            'parent_id' => 2
        ]);
        DocumentType::create([
            'title' => 'Посвідчення кандидата у майстри спорту України',
            'parent_id' => 2
        ]);
        DocumentType::create([
            'title' => 'Посвідчення майстра спорту України',
            'parent_id' => 2
        ]);
        DocumentType::create([
            'title' => 'Посвідчення заслуженого майстра спорту України',
            'parent_id' => 2
        ]);
        DocumentType::create([
            'title' => 'Посвідчення майстра спорту України міжнародного класу',
            'parent_id' => 2
        ]);
//==================================================
        DocumentType::create([
            'title' => 'Сертифікат підвищення кваліфікації (стажування)',
            'parent_id' => 3
        ]);
        DocumentType::create([
            'title' => 'Сертифікат учасника конференції',
            'parent_id' => 3
        ]);
        DocumentType::create([
            'title' => 'Сертифікат учасника обласного методичного об\'єднання',
            'parent_id' => 3
        ]);
        DocumentType::create([
            'title' => 'Сертифікат учасника всеукраїнського методичного об\'єднання',
            'parent_id' => 3
        ]);

//==================================================
        DocumentType::create([
            'title' => 'Подяка',
            'parent_id' => 4
        ]);
        DocumentType::create([
            'title' => 'Нагорода',
            'parent_id' => 4
        ]);
        DocumentType::create([
            'title' => 'Диплом',
            'parent_id' => 4
        ]);
        DocumentType::create([
            'title' => 'Сертифікат',
            'parent_id' => 4
        ]);
        DocumentType::create([
            'title' => 'Догана',
            'parent_id' => 4
        ]);
        DocumentType::create([
            'title' => 'Грамота',
            'parent_id' => 4
        ]);
        DocumentType::create([
            'title' => 'Почесна грамота',
            'parent_id' => 4
        ]);

//==================================================

        DocumentType::create([
            'title' => 'Військовий квитор',
            'parent_id' => 5
        ]);
        DocumentType::create([
            'title' => 'Тимчасове  посвідчення військовозобов\'язаного',
            'parent_id' => 5
        ]);
        DocumentType::create([
            'title' => 'Довідка про проходження ВЛК',
            'parent_id' => 5
        ]);

//==================================================

        DocumentType::create([
            'title' => 'Паспорт (ID картка)',
            'parent_id' => 6
        ]);
        DocumentType::create([
            'title' => 'Ідентифікаційний код платника податків',
            'parent_id' => 6
        ]);
        DocumentType::create([
            'title' => 'Водійське посвідчення',
            'parent_id' => 6
        ]);

//==================================================

        DocumentType::create([
            'title' => 'Характеристика',
            'parent_id' => 7
        ]);
        DocumentType::create([
            'title' => 'Рішення атестаційної комісії',
            'parent_id' => 7
        ]);


    }
}
