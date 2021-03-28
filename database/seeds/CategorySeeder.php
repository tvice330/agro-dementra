<?php
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'ОЗИМАЯ ПШЕНИЦА',
                'alias' => 'WINTER WHEAT',
                'position' => '1'
            ],
            [
                'name' => 'ОЗИМЫЙ ЯЧМЕНЬ',
                'alias' => 'WINTER BARLEY',
                'position' => '2'
            ],
            [
                'name' => 'РАПС ОЗИМЫЙ',
                'alias' => 'RAPESEED WINTER',
                'position' => '3'
            ],
            [
                'name' => 'ГОРОХ ЗИМУЮЩИЙ',
                'alias' => 'WINTER PEAS',
                'position' => '4'
            ],
            [
                'name' => 'ОЗИМАЯ ГОРЧИЦА',
                'alias' => 'WINTER MUSTARD',
                'position' => '5'
            ],
            [
                'name' => 'ЯРОВЫЙ ЯЧМЕНЬ',
                'alias' => 'SPRING BARLEY',
                'position' => '6'
            ],
            [
                'name' => 'ЯРАЯ КУКУРУЗА',
                'alias' => 'SPRING CORN',
                'position' => '7'
            ],
            [
                'name' => 'ЯРЫЙ РАПС',
                'alias' => 'SPRING RAPESEED',
                'position' => '8'
            ],
            [
                'name' => 'ЯРАЯ ГОРЧИЦА',
                'alias' => 'SPRING MUSTARD',
                'position' => '9'
            ],
            [
                'name' => 'ЯРЫЙ НУТ',
                'alias' => 'SPRING NUT',
                'position' => '10'
            ],
            [
                'name' => 'ЯРЫЙ ПОДСОЛНУХ',
                'alias' => 'SPRING SUNFLOWER',
                'position' => '11'
            ],
            [
                'name' => 'ЯРАЯ ГРЕЧИХА',
                'alias' => 'SPRING BUCKWHEAT',
                'position' => '12'
            ],
        ];

        foreach ($data as $item) {
            Category::create($item);
        }
    }
}
