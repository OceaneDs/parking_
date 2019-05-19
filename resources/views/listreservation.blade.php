@extends('layouts.app')

@section('content')
<div class="container">
  <h2><center>Liste des réservations:</center></h2>
  <div class="row justify-content-center">
    <div class="table-responsive-md">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Numéro de la place</th>
            <th scope="col">Date de début</th>
            <th scope="col">date de fin</th>
          </tr>
        </thead>
        @foreach ($reservations as $reservation)
        <tbody>
          <td> {{ $reservation->user->name }} </td>
          <td> {{ $reservation->user->first_name }}</td>
          <td> {{ $reservation->place->numéro }} </td>
          <td> {{Carbon\Carbon::parse($reservation->created_at)->format('d/m/Y')}} </td>
          <td> {{Carbon\Carbon::parse($reservation->date_fin)->format('d/m/Y')}} </td>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
