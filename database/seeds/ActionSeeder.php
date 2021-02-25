<?php

use App\Models\Action;
use App\Models\ActionValue;
use Illuminate\Database\Seeder;

class ActionSeeder extends Seeder
{
    public function run()
    {
        $action = Action::create([
            'title' => 'АКЦИЯ! На каждый гектар посева подарок:'
        ]);
        ActionValue::create([
            'action_id' => $action->id,
            'name' => '50 кг. органического удобрения (граннулированный куриный помет);'
        ]);
        ActionValue::create([
            'action_id' => $action->id,
            'name' => 'ИЛИ Стаффер бор Блек 1 л.;'
        ]);
        ActionValue::create([
            'action_id' => $action->id,
            'name' => 'ИЛИ Стаффер эликсир;'
        ]);
        ActionValue::create([
            'action_id' => $action->id,
            'name' => 'ИЛИ Стаффер стандарт;'
        ]);
        ActionValue::create([
            'action_id' => $action->id,
            'name' => 'ИЛИ отсрочка платежа 30/70%;'
        ]);
    }
}

