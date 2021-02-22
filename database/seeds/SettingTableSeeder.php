<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    public function run()
    {

        $data = [
            [
                'key' => 'logo',
                'value' => 'ООО НЦ "Деметра"'

            ],
            [
                'key' => 'phone_one',
                'value' => '(067)776-80-80'
            ],
            [
                'key' => 'phone_two',
                'value' => '(066)686-31-98'
            ],
            [
                'key' => 'phone_three',
                'value' => '(093)403-47-88'
            ],
            [
                'key' => 'email',
                'value' => 'smirnovpasa120@gmail.com'
            ],
            [
                'key' => 'address',
                'value' => 'Украина, Киевская область, Киево-Святошинский район'
            ]

        ];

        foreach ($data as $item) {
            Setting::create($item);
        }
    }
}

