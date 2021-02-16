<?php

use App\Advantage;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'ТОЛЬКО ВЫСОКОКАЧЕСТВЕННЫЕ СОРТА'
            ],
            [
                'name' => 'ШИРОКИЙ АССОРТИМЕНТ'
            ],
            [
                'name' => 'ВЫСОКАЯ УРОЖАЙНОСТЬ'
            ],
            [
                'name' => 'ОПЛАТА ПОСЛЕ ДОСТАВКИ ТОВАРА'
            ],
            [
                'name' => 'КОНТРОЛИРУЕМ СРОКИ ГОДНОСТИ И СООТВЕТСТВИЕ СОРТОВ'
            ],
            [
                'name' => 'ДОСТАВКА НОВОЙ ПОЧТОЙ ИЛИ СВОИМ ТРАНСПОРТОМ'
            ],
        ];

        foreach ($data as $item) {
            Advantage::create($item);
        }
    }
}
