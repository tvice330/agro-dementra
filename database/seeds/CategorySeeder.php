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
                'alias' => 'winter_wheat',
                'position' => 1
            ],
            [
                'name' => 'ОЗИМЫЙ ЯЧМЕНЬ',
                'alias' => 'winter_barley',
                'position' => 2
            ],
            [
                'name' => 'РАПС ОЗИМЫЙ',
                'alias' => 'rapeseed_winter',
                'position' => 3
            ],
            [
                'name' => 'ГОРОХ ЗИМУЮЩИЙ',
                'alias' => 'winter_peas',
                'position' => 4
            ],
            [
                'name' => 'ОЗИМАЯ ГОРЧИЦА',
                'alias' => 'winter_mustard',
                'position' => 5
            ],
            [
                'name' => 'ЯРОВЫЙ ЯЧМЕНЬ',
                'alias' => 'spring_barley',
                'position' => 6
            ],
            [
                'name' => 'ЯРАЯ КУКУРУЗА',
                'alias' => 'spring_corn',
                'position' => 7
            ],
            [
                'name' => 'ЯРЫЙ РАПС',
                'alias' => 'spring_rapeseed',
                'position' => 8
            ],
            [
                'name' => 'ЯРАЯ ГОРЧИЦА',
                'alias' => 'spring_mustard',
                'position' => 9
            ],
            [
                'name' => 'ЯРЫЙ НУТ',
                'alias' => 'spring_nut',
                'position' => 10
            ],
            [
                'name' => 'ЯРЫЙ ПОДСОЛНУХ',
                'alias' => 'spring_sunflower',
                'position' => 11
            ],
            [
                'name' => 'ЯРАЯ ГРЕЧИХА',
                'alias' => 'spring_buckwheat',
                'position' => 12
            ],
        ];

        foreach ($data as $item) {
            Category::create($item);
        }
    }
}
