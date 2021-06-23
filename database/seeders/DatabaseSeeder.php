<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'name' => 'restaurant Admin',
            'email' => 'admin@restaurantapp.com',
            'password' => '$2y$12$/qL.MLFUiEHgwIBFef/gKey8k2TNv2cxxlBNWLN0LSc9Hj5mmy4d6',
        ]);
    }
}
