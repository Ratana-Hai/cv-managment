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
            'name' => 'sna',
            'email' => 'ratanahai2468@gmail.com',
            'password' => bcrypt('1234567'),
        ]);
    }
}
