<?php

namespace Parking\Http\Controllers;

use Parking\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UsersListController extends Controller
{
  public function index()
  {
    $users = User::get();

    return view('users_list', compact('users'));
  }

  public function validation(User $user)
  {
    if ($user->valid)
      $user->valid = false;
    else
      $user->valid = true;

    $user->save();

    return redirect('users_list');
  }

  public function affUpdate(User $user)
  {
    return view('update_user', compact('user'));
  }

  public function update(User $user)
  {
    request()->validate([
        'name' => ['string', 'max:255'],
        'first_name' => ['string', 'max:255'],
        'email' => ['string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
        'password' => ['nullable', 'string', 'min:6', 'max:30', 'confirmed'],
        'adress' => ['string', 'max:255'],
        'zip_code' => ['digits:5'],
        'city' => ['string', 'max:255'],
        'phone' => ['digits:10', 'max:255'],
        'type' => ['string', 'max:15'],
    ]);

    $user->name = request('name');
    $user->first_name = request('first_name');
    $user->email = request('email');
    if (!empty(request('password')))
    {
      $user->password = request('password');
    }
    $user->adress = request('adress');
    $user->zip_code = request('zip_code');
    $user->city = request('city');
    $user->phone =request('phone');
    $user->type = request('type');

    $user->save();

    return redirect('users_list');
  }
}
