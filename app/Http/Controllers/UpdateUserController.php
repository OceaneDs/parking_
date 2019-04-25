<?php

namespace Parking\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Parking\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Auth;

class UpdateUserController extends Controller
{
  public function index()
  {
    // Verification du droit d'acces de l'utilisateur
    $this->authorize('update',Auth::user());
    // Variable id est egal à la requete reçue
    $id = request('user_id');
    // Variable user est egal à l'utilisateur qui a l'id trouve
    $user = User::find($id);

    return view('update_user', [
      'user'=>$user,
      ]);
  }

  // Fonction qui retourne l'utilisateur selectionné pour la modification
  public function edit(User $user)
  {
    return view('update_user', compact('user'));
  }

  // Fonction qui met a jour les informations de l'utilisateur
  public function update(User $user)
  {
    $user = request('user');
    // Contrôle des parametres saisie
    request()->validate([
        'name' => ['string', 'max:255'],
        'first_name' => ['string', 'max:255'],
        'email' => ['string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
        'adress' => ['string', 'max:255'],
        'zip_code' => ['digits:5'],
        'city' => ['string', 'max:255'],
        'phone' => ['digits:10', 'max:255'],
        'type' => ['max:255'],
    ]);

    //
    $user->name = request('name');
    $user->first_name = request('first_name');
    $user->email = request('email');
    if (!empty(request('password')))
      $user->password = request('password');
    $user->adress = request('adress');
    $user->zip_code = request('zip_code');
    $user->city = request('city');
    $user->phone =request('phone');
    $user->type = request('type');
    $user->save();
    return redirect('users_list');
  }
}
