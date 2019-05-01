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
      return $this->type === 'admin';
    }

    /**
    * Get the reservation record associated with the user.
    */
    public function reservation()
    {
      return $this->hasMany('Parking\Reservation')->orderBy('created_at', 'desc');
    }

    public function reservationNow()
    {
      return $this->reservation()->first();
    }

    public function leaveRank()
   {
       if( !empty($this->rank) )
       {
           User::whereNotNull('rank')
               ->where('rank', '>', $this->rank)
               ->decrement('rank', 1);
           $this->rank = NULL;
           $this->save();
       }
   }

   public function joinRank()
    {
        if( empty($this->rank) )
        {
          $this->rank = 0 + User::max('rank') + 1;
          $this->save();
          flash('Aucune place de disponible pour le moment, vous avez été placé en liste d attente. Vous êtes au rang '.$this->rank)->important();
        }
        else
          flash('Vous avez déjà fait une demande et avez été placé en liste d attente. Vous êtes au rang '.$this->rank);
    }

    public function updateRank($rank)
   {
       if( empty($this->rank) )
       {
         $this->leaveRank();
         User::whereNotNull('rank')
             ->where('rank', '>=', $rank)
             ->increment('rank', 1);
         $this->rank = $rank;
         $this->save();
       }
   }
}
