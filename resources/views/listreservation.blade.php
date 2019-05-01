@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <h2>Liste des réservations</h2>
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
          <td> <?php $str = $reservation->created_at ?> {{date("d/m/Y", strtotime($str))}} </td>
          <td> <?php $str = $reservation->date_fin ?> {{date("d/m/Y", strtotime($str))}} </td>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
