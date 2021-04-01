<?php

use App\Models\Partnership;
use Illuminate\Database\Seeder;

class PartnershipSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Звонок',
                'second_name' => 'в нашу компанию',
                'position' => 1
            ],
            [
                'name' => 'Консультация',
                'second_name' => 'определение подходящего сорта и объема заказа',
                'position' => 2
            ],
            [
                'name' => 'Составление',
                'second_name' => 'счета и договора поставки',
                'position' => 3
            ],
            [
                'name' => 'Обсуждение способа',
                'second_name' => 'способа и срока отгрузки',
                'position' => 4
            ],
            [
                'name' => 'Подготовка',
                'second_name' => 'посевного материала и документов на семена',
                'position' => 5
            ],
            [
                'name' => 'Отгрузка',
                'second_name' => 'продукции в оговоренный день',
                'position' => 6
            ],
            [
                'name' => 'Оплата',
                'second_name' => 'продукции по счету',
                'position' => 7
            ],
            [
                'name' => 'Возможность',
                'second_name' => 'получить ответы на интересующие вас вопросы',
                'position' => 8
            ]
        ];

        foreach ($data as $item) {
           Partnership::create($item);
        }
    }
}


