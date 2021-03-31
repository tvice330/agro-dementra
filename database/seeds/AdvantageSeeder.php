<?php

use App\Models\Advantage;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'ТОЛЬКО ВЫСОКОКАЧЕСТВЕННЫЕ СОРТА',
                'position' => 1,
            ],
            [
                'name' => 'ШИРОКИЙ АССОРТИМЕНТ',
                'position' => 2,
            ],
            [
                'name' => 'ВЫСОКАЯ УРОЖАЙНОСТЬ',
                'position' => 3,
            ],
            [
                'name' => 'ОПЛАТА ПОСЛЕ ДОСТАВКИ ТОВАРА',
                'position' => 4,
            ],
            [
                'name' => 'КОНТРОЛИРУЕМ СРОКИ ГОДНОСТИ И СООТВЕТСТВИЕ СОРТОВ',
                'position' => 5,
            ],
            [
                'name' => 'ДОСТАВКА НОВОЙ ПОЧТОЙ ИЛИ СВОИМ ТРАНСПОРТОМ',
                'position' => 6
            ],
        ];

        foreach ($data as $item) {
            Advantage::create($item);
        }
    }
}
