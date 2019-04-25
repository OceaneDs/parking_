@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card-header">Liste des places</div>

    <?php foreach ($places as $place): ?>
      <br>
      Place N: {{ $place->numéro }}

      <h5>
        @if ($place->dispo)
          <a class="text-success"  href="{{ route('listPlaces', $place) }}" > Disponible </a>
        @else
          <a class="text-danger"  href="{{ route('listPlaces', $place) }}" > Indisponible </a>
        @endif
      </h5>
    <?php endforeach; ?>
  </div>
  </div>
  </div>
@endsection
