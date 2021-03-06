<?php

namespace Parking\Http\Controllers\Auth;

use Parking\User;
use Parking\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'fname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'max:30', 'confirmed'],
            'adress' => ['required', 'string', 'max:255'],
            'zip_code' => ['required', 'digits:5'],
            'city' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'digits:10', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Parking\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'first_name' => $data['fname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'adress' => $data['adress'],
            'zip_code' => $data['zip_code'],
            'city' => $data['city'],
            'phone' => $data['phone'],
            'type' => 'membre',
        ]);
    }
}
