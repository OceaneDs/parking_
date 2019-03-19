<?php

namespace Parking\Policies;

use Parking\User;
use Parking\Controllers;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \Parking\User  $user
     * @param  \Parking\User  $model
     * @return mixed
     */
    public function view(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \Parking\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
      //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \Parking\User  $user
     * @param  \Parking\User  $model
     * @return mixed
     */
    public function affUpdate(User $user, User $model)
    {
      if (auth()->guest())
      {
        return redirect('login');
      }
      if (Auth::user()->isAdmin())
      {
        return true);
      }

      return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \Parking\User  $user
     * @param  \Parking\User  $model
     * @return mixed
     */
    public function delete(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \Parking\User  $user
     * @param  \Parking\User  $model
     * @return mixed
     */
    public function restore(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \Parking\User  $user
     * @param  \Parking\User  $model
     * @return mixed
     */
    public function forceDelete(User $user, User $model)
    {
        //
    }
}
