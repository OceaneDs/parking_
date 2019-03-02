<?php

namespace Parking\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UsersListController extends Controller
{
  public function index()
  {
    $users = DB::table('users')
    ->select('*')
    -> get();

    return view('users_list', [
      'users' =>$users,
    ]);
  }

}
