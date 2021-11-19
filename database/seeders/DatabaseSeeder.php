<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\City;
use App\Models\Country;
use App\Models\PartsOfTheWorld;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $data_user = [['testlogin', Hash::make('testpassword')]];
        foreach ($data_user as $data){
            if (empty(User::where('email', $data[0])->first())){
                User::create(['email' => $data[0],
                              'password' => $data[1]]);
            }
        }

        $data_parts_of_the_world = ['Азия', 'Америка', 'Африка', 'Европа'];
        foreach ($data_parts_of_the_world as $data){
            if (empty(PartsOfTheWorld::where('title', $data)->first())){
                PartsOfTheWorld::create(['title' => $data]);
            }
        }

        $data_сountry = [['Индонезия', 1], ['Индия', 1], ['Филиппины', 1], ['Китай', 1], ['Япония', 1],
            ['США', 2], ['Бразилия', 2], ['Мексика', 2], ['Аргентина', 2], ['Перу', 2],
            ['Египет', 3], ['Нигерия', 3], ['Конго', 3], ['ЮАР', 3], ['Ангола', 3],
            ['Кения', 3], ['Танзания', 3],
            ['Россия', 4], ['Турция', 4], ['Франция', 4], ['Великобритания', 4], ['Испания', 4], ['Италия', 4]];
        foreach ($data_сountry as $data){
            if (empty(Country::where('title', $data)->first())){
                Country::create(['title' => $data[0],
                    'parts_of_the_world_id' => $data[1]]);
            }
        }

        $data_сity = [
            ['Токио', 38500, 5], ['Джакарта', 32275, 1], ['Дели', 27280, 2],
            ['Манила', 24650, 3], ['Шанхай', 24115, 4], ['Мумбаи', 23265, 2],
            ['Пекин', 21200, 4], ['Гуанчжоу', 20060, 4], ['Осака', 17165, 5],

            ['Нью-Йорк', 21757, 6], ['Сан-Пауло', 21100, 7], ['Мехико', 20500, 8],
            ['Лос-Анджелес', 15620, 6], ['Буэнос-Айрес', 15520, 9], ['Лима', 11300, 10],
            ['Чикаго', 9100, 6], ['Даллас', 6600, 6], ['Сан-Хосе', 6500, 6],

            ['Каир', 16545, 11], ['Лагос', 13900, 12], ['Киншаса', 12500, 13],
            ['Йоханнесбург', 9115, 14], ['Луанда', 7560, 15], ['Найроби', 5700, 16],
            ['Дар-эс-Салам', 4980, 17], ['Александрия', 4960, 11], ['Гиза', 3300, 11],

            ['Москва', 16855, 18], ['Стамбул', 13995, 19], ['Париж', 10900, 20],
            ['Лондон', 10500, 21], ['Мадрид', 6385, 22], ['Милан', 5200, 23],
            ['Санкт-Петербург', 5175, 18], ['Анкара', 4850, 19], ['Барселона', 4840, 22],
        ];
        foreach ($data_сity as $data){
            if (empty(City::where('title', $data)->first())){
                City::create(['title' => $data[0],
                    'population' => $data[1],
                    'country_id' => $data[2]]);
            }
        }
    }
}





