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
         $this->call(UsersTableSeeder::class);
         $this->call(SkillsTableSeeder::class);
         $this->call(GigsTableSeeder::class);
         $this->call(ProfilesTableSeeder::class);
    }
}
