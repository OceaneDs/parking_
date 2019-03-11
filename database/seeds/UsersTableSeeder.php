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
          'name' => 'administrateur',
          'first_name' => str_random(5),
          'email' => 'admin@gmail.com',
          'password' => bcrypt('secret'),
          'adress' => str_random(30),
          'zip_code' => '01234',
          'city' => str_random(10),
          'phone' => '1020304050',
          'valid' => 1,
          'type' => 'admin',
        ]);

        DB::table('users')->insert([
          'name' => str_random(5),
          'first_name' => str_random(5),
          'email' => str_random(6).'@gmail.com',
          'password' => bcrypt('password'),
          'adress' => str_random(30),
          'zip_code' => '01234',
          'city' => str_random(10),
          'phone' => '1020304050',
          'valid' => 1,
          'type' => 'membre',
        ]);
        DB::table('users')->insert([
          'name' => str_random(5),
          'first_name' => str_random(5),
          'email' => str_random(6).'@gmail.com',
          'password' => bcrypt('password'),
          'adress' => str_random(30),
          'zip_code' => '01234',
          'city' => str_random(10),
          'phone' => '1020304050',
          'valid' => 0,
          'type' => 'membre',
        ]);
    }
}
