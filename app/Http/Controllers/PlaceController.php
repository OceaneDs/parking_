<?php

namespace Parking\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Parking\Place;

class PlaceController extends Controller
{
  public function newPlace()
  {

    $newPlace = new Place();
    $newPlace->dispo = true;
    $newPlace->numéro = 4;
    $newPlace->save();

    return redirect('listPlaces');
  }

  public function listPlaces()
  {
    $places = Place::all();
    return view('place',['places'=> $places]);
  }


  public function disponibilite(Place $place)
  {
    if($place->dispo)
    $place->dispo = false;
    else
    $place->dispo = true;

    $place ->save();
     return redirect('listPlaces');
  }

}
