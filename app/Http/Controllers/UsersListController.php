<?php

namespace Parking\Http\Controllers;

use Parking\User;
use Parking\Http\Policies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UsersListController extends Controller
{
  public function index(User $user)
  {
    // Verification du droit d'acces de l'utilisateur
    $this->authorize('update', $user);
    // Recupere les utilisateurs
    $users = User::get();
    return view('users_list', compact('users'));
  }

  // Fonction de gestion de la validation utilisateurs
  public function validation(User $user)
  {
    // Valide et unvalide l'utilisateur
    $user->valid = !$user->valid;
    // sauvegarde utilisateur
    $user->save();
    return redirect('users_list');
  }
}
