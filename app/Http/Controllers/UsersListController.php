<?php

namespace Parking\Http\Controllers;

use Parking\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersListController extends Controller
{
  public function index()
  {
    $users = User::get();

    return view('users_list', compact('users'));
  }
}
