<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

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
        $this->call(CompanyDescriptionSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ProductSeeder::class);

        Artisan::call('passport:install');
    }
}
