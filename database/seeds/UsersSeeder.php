<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Johua',
            'email' => 'ten@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
