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

    if($place->dispo)
          return $places->id;
        else
          return false;
  }

}
