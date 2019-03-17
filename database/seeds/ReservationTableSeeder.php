<?php

use Illuminate\Database\Seeder;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('reservation')->insert([
        'date' => '2010-10-10',
        'duree' => 30,
        'user_id' => 2,
        'place_id' => 2,
      ]);
    }
}
