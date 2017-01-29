<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
        	'title'		   => str_random(10),
        	'description'  => str_random(20),
        	'image'        => str_random(20),
        ]);
    }
}
