<?php

use Illuminate\Database\Seeder;

class CodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('codes')->insert([
        	'name'=>'VG1A57YB',
        	'ad_id'=>1,
            'active'=>true,
        ]);

        DB::table('codes')->insert([
        	'name'=>'NP6XAUHM',
        	'ad_id'=>2,
            'active'=>true,
        ]);

        DB::table('codes')->insert([
        	'name'=>'GYGREQYY',
        	'ad_id'=>1,
            'active'=>true,
        ]);

        DB::table('codes')->insert([
        	'name'=>'N5NMWVTL',
        	'ad_id'=>2,
            'active'=>true,
        ]);

        DB::table('codes')->insert([
        	'name'=>'EWY3UYW8',
        	'ad_id'=>1,
            'active'=>true,
        ]);

        DB::table('codes')->insert([
        	'name'=>'VVZ2UA8T',
        	'ad_id'=>2,
            'active'=>true,
        ]);

        DB::table('codes')->insert([
        	'name'=>'C2TOGVEH',
        	'ad_id'=>1,
            'active'=>true,
        ]);

        DB::table('codes')->insert([
        	'name'=>'ITGDD1LV',
        	'ad_id'=>2,
            'active'=>true,
        ]);

        DB::table('codes')->insert([
        	'name'=>'JB3KM2M2',
        	'ad_id'=>1,
            'active'=>true,
        ]);

    }
}



