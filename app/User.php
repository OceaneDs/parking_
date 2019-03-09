<?php

namespace Parking;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'membre';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = array('name', 'first_name',
                                 'email', 'password', 'adress',
                                 'zip_code', 'city', 'phone',
                                 'valid', 'type');

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
      return $this->type === self::ADMIN_TYPE;
    }
}
