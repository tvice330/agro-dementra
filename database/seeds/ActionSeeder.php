<?php

use App\Models\Action;
use Illuminate\Database\Seeder;

class ActionSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'АКЦИЯ! На каждый гектар посева подарок:'
            ]
        ];

        foreach ($data as $item) {
            Action::create($item);
        }
    }
}

