<?php

namespace Parking;

use Illuminate\Database\Eloquent\Model;
use DB;
class Place extends Model
{

  protected $fillable = array('numéro', 'dispo');

  public function reservation()
  {
    return $this->hasMany('Parking\Reservation');
  }
/*
  public function place
  {
    return $this->hasMany('Parking\Reservation');
  }
*/
  public function estdispo()
  {
    $places = Place::all();
    foreach ($places as $place)
    if($place->dispo)
    DB::table('places')
          ->where('id',$place->id)
          ->update(['dispo'=> 0]);
    else {
      DB::table('places')
            ->where('id',$place->id)
            ->update(['dispo'=> 1]);
    }
    return $place;

  }

}
