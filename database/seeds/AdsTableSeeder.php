<?php

use Illuminate\Database\Seeder;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ads')->insert([
          'client_id' => 1,
          'category_id' => 3,
          'path' => 'public/mts.png',
          'quantity' => 100,
          'limit' => '2017-03-12',
          'active' => true,
        ]);

        DB::table('ads')->insert([
          'client_id' => 2,
          'category_id' => 3,
          'path' => 'public/paint.jpg',
          'quantity' => 100,
          'limit' => '2017-03-12',
          'active' => true,
        ]);
    }
}
