<?php

use App\Menu;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'ПРЕИМУЩЕСТВА'
            ],
            [
                'name' => 'НАША ПРОДУКЦИЯ'
            ],
            [
                'name' => 'О КОМПАНИИ'
            ],
            [
                'name' => 'КОНТАКТЫ'
            ]
        ];

        foreach ($data as $item) {
            Menu::create($item);
        }
    }
}
