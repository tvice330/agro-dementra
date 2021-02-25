<?php

use App\Models\ActionValue;
use Illuminate\Database\Seeder;

class ActionValuesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => '50 кг. органического удобрения (граннулированный куриный помет);',
                'action_id' => '1'
            ],
            [
                'name' => 'ИЛИ Стаффер бор Блек 1 л.;',
                'action_id' => '1'
            ],
            [
                'name' => 'ИЛИ Стаффер эликсир;',
                'action_id' => '1'
            ],
            [
                'name' => 'ИЛИ Стаффер стандарт;',
                'action_id' => '1'
            ],
            [
                'name' => 'ИЛИ отсрочка платежа 30/70%;',
                'action_id' => '1'
            ]
        ];

        foreach ($data as $item) {
            ActionValue::create($item);
        }
    }
}

