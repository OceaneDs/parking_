@extends('layouts.app')

@section('content')
<div class="container">
  <h2><center>Liste des places:</center></h2>
  <div class="row justify-content-center">
    <div class="table-responsive-md">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Numéro de la place</th>
            <th scope="col">Nombre de réservation</th>
            <th scope="col">Option</th>
            <th scope="col">Créé le</th>
            <th scope="col">Dernière modification le</th>
          </tr>
        </thead>
        @foreach ($places as $place)
        <tbody>
          <td> {{ $place->numéro }} </td>
          <td> {{ $place-> reservation->count() }} </td>
          <td>
            <h5>
              @if ($place->dispo)
                <a class="text-success"  href="{{ route('listPlaces', $place) }}" > est Disponible </a>
              @else
                <a class="text-danger"  href="{{ route('listPlaces', $place) }}" > est Indisponible </a>
              @endif
            </h5>
          </td>
          <td> {{Carbon\Carbon::parse($place->created_at)->format('d/m/Y')}} </td>
          <td> {{Carbon\Carbon::parse($place->updated_at)->format('d/m/Y')}} </td>
        </tbody>
        @endforeach
        <div class="card-body">
        @csrf

        </div>
    </div>
  </div>
<p><h4>  <a class="text-success"  href="{{ route('createPlace') }}" > Créer une nouvelle place </a></h4></p>
</div>

@endsection
