<?php

namespace Parking\Http\Controllers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
      if (auth()->guest())
        return redirect('login');
      if (auth()->user()->)
        return $next($request);
      return redirect('home');
    }

    public function admin()
    {
      return view('admin');
    }
}
