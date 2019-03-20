<?php

namespace Parking\Http\Controllers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
      $this->middleware('is_admin');

      return view('admin');
    }
}
