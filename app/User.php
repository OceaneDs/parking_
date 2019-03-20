<?php

namespace Parking;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = array('name', 'first_name',
                                 'email', 'password', 'adress',
                                 'zip_code', 'city', 'phone',
                                 'valid', 'type', 'rank');

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
      return $this->type ===;
    }

    /**
    * Get the reservation record associated with the user.
    */
    public function reservation()
    {
      return $this->hasOne('Parking\Reservation');
    }
}
