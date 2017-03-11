<?php

use Illuminate\Database\Seeder;

class AdsScreensSeeder extends Seeder
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
          'screen_id' => 3,
        ]);

        DB::table('ad_screen')->insert([
          'ad_id' => 1,
          'screen_id' => 1,
        ]);
    }
}
