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
$this->authorize('update',Auth::user());
    $id = request('user_id');
    $user = User::find($id);

    return view('update_user', [
      'user'=>$user,
      ]);
  }
  public function update()
  {

    $user = request('user');

    request()->validate([
        'name' => ['string', 'max:255'],
        'first_name' => ['string', 'max:255'],
        'email' => ['string', 'email', 'max:255', 'unique:users,email' .$user->id.',id'],
        'adress' => ['string', 'max:255'],
        'zip_code' => ['digits:5'],
        'city' => ['string', 'max:255'],
        'phone' => ['digits:10', 'max:255'],
        'type' => ['max:255'],
    ]);

    $user->name = request('name');
    $user->first_name = request('first_name');
    $user->email = request('email');
    $user->adress = request('adress');
    $user->zip_code = request('zip_code');
    $user->city = request('city');
    $user->phone =request('phone');
    $user->type = request('type');

    $user->save();

    return redirect('users_list');
  }
}
