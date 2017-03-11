<?php

use Illuminate\Database\Seeder;

class ScreensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('screens')->insert([
            'latitude' => 19.0311478,
            'longitude' => -98.2374441,
            'name' => 'Angelópolis 1',
            'city' => 'Puebla',
            'province' => 'Puebla',
        ]);

        DB::table('screens')->insert([
            'latitude' => 19.0311478,
            'longitude' => -98.2374441,
            'name' => 'Angelópolis 2',
            'city' => 'Puebla',
            'province' => 'Puebla',
        ]);

        DB::table('screens')->insert([
            'latitude' => 19.0778546,
            'longitude' => -98.1665991,
            'name' => 'Estadio Cuauhtémoc',
            'city' => 'Puebla',
            'province' => 'Puebla',
        ]);

        DB::table('screens')->insert([
            'latitude' => 19.0271051,
            'longitude' => -98.2033887,
            'name' => 'Plaza Dorada',
            'city' => 'Puebla',
            'province' => 'Puebla',
        ]);        
    }
}
