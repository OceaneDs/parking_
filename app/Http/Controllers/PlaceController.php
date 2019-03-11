<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class PlaceController extends Controller
{
  public function newPlace()
  {
    $newPlace = new Place();
    $newPlace->dispo = true;
    $newPlace->numéro = '1';
    $newPlace->save();
  }
  public function listPlaces()
  {
    $places = Place::all();
    return view('place',['places'=> $places]);
  }

}
