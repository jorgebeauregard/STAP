<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AdsTableSeeder::class);
        $this->call(CodesTableSeeder::class);
        $this->call(ScreensTableSeeder::class);
        $this->call(AdsScreensTableSeeder::class);
    }
}
