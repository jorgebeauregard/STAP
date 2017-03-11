<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'=>'Liverpool',
        	'email' => 'contacto@liverpool.com',
        	'password' => bcrypt('secret'),
        	'category_id'=>3,
        	'type' => 0,
        	'limit' => '2017-03-11 02:10',
        	'active' =>  true
        ]);

        DB::table('users')->insert([
        	'name'=>'Los Fuertes Puebla',
        	'email' => 'contacto@losFuertes.com',
        	'password' => bcrypt('secret'),
        	'category_id'=>2,
        	'type' => 0,
        	'limit' => '2017-03-11 13:11',
        	'active' =>  false
        ]);

        DB::table('users')->insert([
        	'name'=>'Gobierno Municipal de Puebla',
        	'email' => 'contacto@gobierno.pue.mx',
        	'password' => bcrypt('secret'),
        	'category_id'=>1,
        	'type' => 0,
        	'limit' => '2017-03-11 16:15',
        	'active' =>  true
        ]);


    }
}
