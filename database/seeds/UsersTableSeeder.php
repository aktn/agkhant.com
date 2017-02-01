<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'name' => 'Name here',
            'password' => Hash::make('douchebag'),
            'email' => '120120ster@gmail.com',
        ]);
    }
}
