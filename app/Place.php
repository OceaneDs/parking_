<?php

namespace Parking;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{

  protected $fillable = array('numéro', 'dispo');

  public function reservation()
  {
    return $this->hasMany('Parking\Reservation');
  }

  public function estdispo()
  {
    $places = Place::all();
    foreach ($places as $place)
    if($place->dispo)
          return true;
  }

}
