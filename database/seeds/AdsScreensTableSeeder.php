<?php

use Illuminate\Database\Seeder;

class AdsScreensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ad_screen')->insert([
          'ad_id' => 1,
          'screen_id' => 2,
        ]);

        DB::table('ad_screen')->insert([
          'ad_id' => 2,
          'screen_id' => 1,
        ]);

        DB::table('ad_screen')->insert([
          'ad_id' => 1,
          'screen_id' => 1,
        ]);
    }
}
