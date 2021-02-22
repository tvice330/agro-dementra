<?php

use App\Menu;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'ПРЕИМУЩЕСТВА',
                'position' => '1'
            ],
            [
                'name' => 'НАША ПРОДУКЦИЯ',
                'position' => '2'
            ],
            [
                'name' => 'О КОМПАНИИ',
                'position' => '3'
            ],
            [
                'name' => 'КОНТАКТЫ',
                'position' => '4'
            ]
        ];

        foreach ($data as $item) {
            Menu::create($item);
        }
    }
}
