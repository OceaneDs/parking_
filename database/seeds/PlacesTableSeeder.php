<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('places')->insert([
            'dispo'=> 1,
            'numéro'=> '1',
        ]);
      DB::table('places')->insert([
              'dispo'=> 0,
              'numéro'=>'2',
          ]);
      DB::table('places')->insert([
                'dispo'=> 1,
                'numéro'=> '3',
            ]);
    }
}
