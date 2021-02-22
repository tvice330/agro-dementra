<?php
use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'ОЗИМАЯ ПШЕНИЦА',
                'position' => '1'
            ],
            [
                'name' => 'ОЗИМЫЙ ЯЧМЕНЬ',
                'position' => '2'
            ],
            [
                'name' => 'РАПС ОЗИМЫЙ',
                'position' => '3'
            ],
            [
                'name' => 'ГОРОХ ЗИМУЮЩИЙ',
                'position' => '4'
            ],
            [
                'name' => 'ОЗИМАЯ ГОРЧИЦА',
                'position' => '5'
            ],
            [
                'name' => 'ЯРОВЫЙ ЯЧМЕНЬ',
                'position' => '6'
            ],
            [
                'name' => 'ЯРАЯ КУКУРУЗА',
                'position' => '7'
            ],
            [
                'name' => 'ЯРЫЙ РАПС',
                'position' => '8'
            ],
            [
                'name' => 'ЯРАЯ ГОРЧИЦА',
                'position' => '9'
            ],
            [
                'name' => 'ЯРЫЙ НУТ',
                'position' => '10'
            ],
            [
                'name' => 'ЯРЫЙ ПОДСОЛНУХ',
                'position' => '11'
            ],
            [
                'name' => 'ЯРАЯ ГРЕЧИХА',
                'position' => '12'
            ],
        ];

        foreach ($data as $item) {
            Category::create($item);
        }
    }
}
