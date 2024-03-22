<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator;
use App\Models\Position;
use App\Models\PositionRank;
use App\Models\PedagogicalRank;

class PositionSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        PositionRank::create(['title' => '-']);
        PositionRank::create(['title' => 'Спеціаліст без категорії']);
        PositionRank::create(['title' => 'Відповідає займаній посаді']);
        PositionRank::create(['title' => 'Спеціаліст другої категорії']);
        PositionRank::create(['title' => 'Спеціаліст першої категорії']);
        PositionRank::create(['title' => 'Спеціаліст вищої категорії']);


        PedagogicalRank::create(['title' => '-']);
        PedagogicalRank::create(['title' => 'Викладач-методист']);
        PedagogicalRank::create(['title' => 'Учитель-методист']);
        PedagogicalRank::create(['title' => 'Вихователь-методист']);
        PedagogicalRank::create(['title' => 'Педагог-організатор-методист']);
        PedagogicalRank::create(['title' => 'Старший викладач']);
        PedagogicalRank::create(['title' => 'Старший учитель']);
        PedagogicalRank::create(['title' => 'Старший вихователь']);


        Position::create(['title' => 'Директор']); 
        Position::create(['title' => 'Заступник директора з навчальної роботи']); 
        Position::create(['title' => 'Засупник директора з навчально-виховної роботи']); 
        Position::create(['title' => 'Заступник директора з адміністративно-господарської діяльності']); 
        Position::create(['title' => 'Заступник директора з навчально-виробничої роботи ']); 
        Position::create(['title' => 'Завідувач відділенням']); 
        Position::create(['title' => 'Завідувач  навчально - виробничими майстернями']); 
        Position::create(['title' => 'Керівник фізичного виховання']); 
        Position::create(['title' => 'Вихователь']); 
        Position::create(['title' => 'Завідувач навчальної лабораторії']); 
        Position::create(['title' => 'Завідувач навчально-методичної лабораторії']); 
        Position::create(['title' => 'Завідувач навчально-методичним кабінетом']); 
        Position::create(['title' => 'Методист']); 
        Position::create(['title' => 'Методист відділення']); 
        Position::create(['title' => 'Соціальний педагог']); 
        Position::create(['title' => 'Практичний психолог']); 
        Position::create(['title' => 'Завідувач виробничої практики']); 
        Position::create(['title' => 'Майстер виробничого навчання']); 
        Position::create(['title' => 'Головний бухгалтер']); 
        Position::create(['title' => 'Завідувач бібліотеки']); 
        Position::create(['title' => 'Провідний інженер  з охорони праці']); 
        Position::create(['title' => 'Начальник штабу цивільної оборони']); 
        Position::create(['title' => 'Юристконсульт']); 
        Position::create(['title' => 'Адміністратор бази даних']); 
        Position::create(['title' => 'Фахівець підрозділу сприяння працевлаштуванню випускників навчального закладу']); 
        Position::create(['title' => 'Фахівець з профорієнтації випусників навчального закладу ІІ категорії']); 
        Position::create(['title' => 'Лаборант']); 
        Position::create(['title' => 'Старший лаборант']); 
        Position::create(['title' => 'Секретар навчальної частини']); 
        Position::create(['title' => 'Бібліотекар провідний']); 
        Position::create(['title' => 'Помічник директора з кадрової роботи']); 
        Position::create(['title' => 'Старший інспектор з кадрів']); 
        Position::create(['title' => 'Інспектор з кадрів з обліку студентів']); 
        Position::create(['title' => 'Бухгалтер провідний']); 
        Position::create(['title' => 'Бухгалтер І категорії']); 
        Position::create(['title' => 'Інженер-електронік провідний']); 
        Position::create(['title' => 'Завідувач канцелярією']); 
        Position::create(['title' => 'Архіваріус']); 
        Position::create(['title' => 'Секретар друкарка']); 
        Position::create(['title' => 'Інженер']); 
        Position::create(['title' => 'Діловод']); 
        Position::create(['title' => 'Завідувач господарства']); 
        Position::create(['title' => 'Диспетчер']); 
        Position::create(['title' => 'Прибиральник службових приміщень']); 
        Position::create(['title' => 'Сторож']); 
        Position::create(['title' => 'Двірник']); 
        Position::create(['title' => 'Робітник з комплексного обслуговування і ремонту будинків']); 
        Position::create(['title' => 'Слюсар-сантехнік']); 
        Position::create(['title' => 'Електромонтер з ремонту та обслуговування електроустаткування']); 
        Position::create(['title' => 'Викладач']); 
        Position::create(['title' => 'Економіст провідний']); 
        Position::create(['title' => 'Сестра медична']); 
        Position::create(['title' => 'Столяр']); 
        Position::create(['title' => 'Паспортист']); 
        Position::create(['title' => 'Завідувач гуртожитку']); 
        Position::create(['title' => 'Черговий по гуртожитку']);
    }
}
