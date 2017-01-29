<?php

use Illuminate\Database\Seeder;

class GigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gigs')->insert([
        	'title' 	  => str_random(10),
        	'description' => str_random(20),
        	'image'		  => str_random(10),
        ]);
    }
}
