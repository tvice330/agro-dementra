<?php

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'ПРЕИМУЩЕСТВА',
                'position' => '1',
                'alias' => 'advantages'
            ],
            [
                'name' => 'НАША ПРОДУКЦИЯ',
                'position' => '2',
                'alias' => 'products'
            ],
            [
                'name' => 'О КОМПАНИИ',
                'position' => '3',
                'alias' => 'about us'
            ],
            [
                'name' => 'КОНТАКТЫ',
                'position' => '4',
                'alias' => 'contacts'
            ]
        ];

        foreach ($data as $item) {
            Menu::create($item);
        }
    }
}
