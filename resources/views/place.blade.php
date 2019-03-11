@extends('layouts.master')

@section('content')
<h1>Liste des places :</h1>
<div class="col-md-5">

        <table class="table table-dark">
          <thead>
            <tr>
              <td>Place N: </td>
              <td>Action:</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($places as $place): ?>
          <tr>
            <td>{{$place->numéro}}</td>
            <td>
              @if ($place->dispo)
                <a class="text-success"  href="{{ route('/listPlaces', $place) }}" > Indisponible </a>
              @else
                <a class="text-success"  href="{{ route('/listPlaces', $place) }}" > Disponible </a>
              @endif
            </td>
          </tr>
        </tbody>
    <?php endforeach; ?>
  </div>
@endsection
