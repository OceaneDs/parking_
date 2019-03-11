<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Placeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i=0; $i<=10; $i++)

      DB::table('places')->insert([
          'dispo'=>rand(0,1),
          'numéro'=>$i,
      ]);
    }
}
