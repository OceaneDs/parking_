<?php

namespace Parking\Http\Controllers;
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
    public function index()
    {
      //
    }

    public function create()
    {
      return view('create');
    }

    public function store(Place $place)
    {
      $dtnow =  Carbon::now();
      $datefin = $dtnow->addMonth();
      if($place->estdispo())
      {
      $reservation = new Reservation();
      $reservation->date_fin = $datefin;
      $reservation->user_id  = Auth::user()->id;
      $reservation->place_id  = 1;

      $reservation->save();
      }
      return redirect('users_list');
    }
}
