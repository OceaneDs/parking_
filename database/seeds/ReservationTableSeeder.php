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
      DB::table('reservations')->insert([
        'date_fin' => '2019-10-10',
        'user_id' => 2,
        'place_id' => 2,
      ]);
    }
}
