<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Menu::insert([
            'name1' => 'sentence',
            'name2' => 'paragraph',
            'name3' => 'paragraph',
            'name4' => 'paragraph',
            ]);
    }
}
