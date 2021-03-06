<?php

namespace Parking\Http\Controllers;
use DB;
use Auth;
use Parking\Place;
use Parking\Reservation;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function listreservation()
    {
      $reservations = Reservation::all();
      return view('listreservation',['reservations'=> $reservations]);
    }

    public function historique()
    {
      return view('Historique');
    }

    public function index()
    {
      return view('create');
    }

    public function create()
    {
      $dtnow =  Carbon::now();
      $datefin = $dtnow->addMonth();
      $user = Auth::id();
      $place = Place::where('dispo', TRUE)->first();
      if(!empty($place))
      {
        Reservation::create(['date_fin'=> $datefin,'user_id'=> $user ,'place_id'=> $place->id,]);
        DB::table('places')
            ->where('id',$place->id)
            ->update(['dispo'=> 0]);
        }
        else
        {
          $user = Auth::user();
          $user->joinRank();
        }
        return redirect('home');
    }
}
