<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenuTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(AdvantageSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PartnershipSeeder::class);
        $this->call(ActionSeeder::class);
    }
}
