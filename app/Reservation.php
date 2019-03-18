<?php

namespace Parking;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = array('date', 'duree',
                               'user_id', 'place_id');

  /**
  * Get the user that owns the reservation.
  */
  public function user()
  {
    return $this->belongsTo('Parking\User');
  }
  public function place()
  {
    return $this->belongsTo('Parking\Place');
  }
}
