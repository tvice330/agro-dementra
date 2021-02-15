<?php
use App\Setting;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    public function run()
    {

        $data = [
            [
                'key' => 'logo'
            ],
            [
                'key' => 'phone_one'
            ],
            [
                'key' => 'phone_two'
            ],
            [
                'key' => 'phone_three'
            ],
            [
                'key' => 'email'
            ],
            [
                'key' => 'adres'
            ],
            [
                'value' => 'ООО НЦ "Деметра"'
            ],
            [
                'value' => '(067)776-80-80'
            ],
            [
                'value' => '(066)686-31-98'
            ],
            [
                'value' => '(093)403-47-88'
            ],
            [
                'value' => 'smirnovpasa120@gmail.com'
            ],
            [
                'value' => 'Украина, Киевская область, Киево-Святошинский район'
            ],

        ];

        foreach ($data as $item) {
            Setting::create($item);
        }
    }
}

