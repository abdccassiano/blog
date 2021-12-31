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
          'name' => 'marcelo',
          'email' => 'marcelo@hotmail.com',
          'password' => bcrypt('secret'),
        ]);
    }
}
