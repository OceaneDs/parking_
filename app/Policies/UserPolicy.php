<?php

namespace Parking\Policies;

use Parking\User;
use Parking\Http;
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
      return $user->isAdmin();
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \Parking\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
      return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \Parking\User  $user
     * @param  \Parking\User  $model
     * @return mixed
     */
    public function update(User $user)
    {
      return $user->isAdmin();
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
        return false;
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
