<?php

namespace Parking\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Parking\User;

class ValidationController extends Controller
{
    public function valid()
    {

      $id = request('user_id');
      if (request('user_valid'))
        $valid=false;
      else
        $valid=true;

      DB::table('users')
                  ->where('id', $id)
                  ->update(array('valid' => $valid));

      return redirect('users_list');
    }
}
